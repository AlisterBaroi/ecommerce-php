<?php
include "inc/header.php";
include "controller/cart_manager.php";
if (!isset($_SESSION['customer'])) {
    header("location: index.php");
}
// delete account
if (isset($_POST['del'])) {
    $del = $conn->query("DELETE FROM customer WHERE user_name ='$uname'");
    session_unset();
    echo "<script>alert('Account deleted successfully, now you will be redirected to the home page');window.location.href='index.php';</script>";
}
//updating password (CRUD functionality)
if (isset($_POST['changepass'])) {
    $npass = hash('sha256', $_POST['npass']);
    $ncpass = hash('sha256', $_POST['ncpass']);

    if (strlen($npass) <= 4 && !empty($npass)) {
        echo "<script>alert('New password must be more than 3 characters')</script>";
    } elseif ($npass != $ncpass) {
        echo "<script>alert('Confirm password did not match')</script>";
    } else {
        $update_pass = $conn->query("UPDATE customer SET pass='$npass' WHERE user_name = '$uname'");
        if (!$update_pass) {
            echo "<script>alert('Due to an unexpected error we are unable to update your password')</script>";
        } else {
            echo "<script>alert('Password updated successfully');window.location.href='profile.php';</script>";
        }
    }
}
// adding/updating user info in profile (CRUD functionality)
if (isset($_POST['submit'])) {
    $nfname = $_POST['nfname'];
    $nphno = $_POST['nphno'];
    $nemail = $_POST['nemail'];
    $payno = $_POST['payno'];
    $cno = $_POST['cno'];
    $exp = $_POST['exp'];
    $cvv = $_POST['cvv'];

    $check = $conn->query("SELECT * FROM customer WHERE user_name = '$uname' OR email = '$nemail'");

    if (empty($nfname) || empty($nphno) || empty($nemail)) {
        echo "<script> alert('Please provided all informations!')</script>";
    } else {
        $insert = $conn->query("UPDATE customer SET full_name='$nfname',phone='$nphno',email='$nemail',pay_name='$payno',card_no='$cno',exp='$exp',cvv='$cvv'");
        if (!$insert) {
            echo "<script>alert('Due to an unexpected error we are unable to update your profile')</script>";
        } else {
            echo "<script>alert('Profile details updated successfully');window.location.href='profile.php';</script>";
        }
    }
}
?>
<div class="container">
    <form class="row pt-3" action="" method="POST">
        <!-- displaying user info -->
        <?php while ($row = mysqli_fetch_array($query_run)) {?>
        <div class="col-4">
            <div class="border border-secondary">
                <!-- profile info section start -->
                <div class="card-body text-secondary">
                    <h3 class="card-title my-3">Profile Info</h3>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-user text-secondary"></i></span>
                        <input type="text" class="form-control " placeholder="Username" value="<?php echo $row['user_name']; ?>" disabled>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-user-edit text-secondary"></i></span>
                        <input type="text" class="form-control" placeholder="Full Name" name="nfname" value="<?php echo $row['full_name']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-phone text-secondary"></i></span>
                        <input type="number" class="form-control" placeholder="Phone No" name="nphno" value="<?php echo $row['phone']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-at text-secondary"></i></span>
                        <input type="email" class="form-control" placeholder="Email Address" name="nemail" value="<?php echo $row['email']; ?>">
                    </div>
                </div>
                <!-- profile info section end -->

            </div>
        </div>
        <div class="col-4">
            <div class="multi-collapse border border-secondary">
                <!-- payment info section start -->
                <div class="card-body text-secondary">
                    <h3 class="card-title my-3">Payment Info</h3>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-address-card text-secondary"></i></span>
                        <input type="text" class="form-control" placeholder="Card Holder Name" name="payno" value="<?php echo $row['pay_name']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fab fa-cc-visa text-secondary"></i></span>
                        <input type="number" class="form-control" placeholder="Card Number" name="cno" value="<?php echo $row['card_no']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control me-1" placeholder="YYYY-MM-DD" name="exp" value="<?php echo $row['exp']; ?>">
                        <input type="number" class="form-control" placeholder="CCV" name="cvv" value="<?php echo $row['cvv']; ?>">
                    </div>
                </div>
                <!-- payment info section end -->
            </div>
        </div>
        <div class="col-4">
            <div class="multi-collapse border border-secondary">
                <!-- security section start -->
                <div class="card-body text-secondary">
                    <h3 class="card-title my-3">Security</h3>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-edit text-secondary"></i></span>
                        <input type="password" class="form-control" placeholder="New Password" name="npass" value="">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-edit text-secondary"></i></span>
                        <input type="password" class="form-control" placeholder="Confirm New Password" name="ncpass" value="">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-lock text-secondary"></i></span>
                        <input type="submit" class="form-control bg-success text-white" name="changepass" value="Change Password">
                    </div>
                </div>
                <!-- security section end -->
            </div>

            <!-- delete account section start -->
            <div class="col-12 mt-3">
                <div class="multi-collapse border border-secondary">
                    <div class="card-body text-secondary">
                        <h3 class="card-title mb-2">Delete Account</h3>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-trash-alt text-secondary"></i></span>
                            <input type="submit" class="form-control bg-danger text-white" value="Delete Account" name="del">
                        </div>
                    </div>
                </div>
            </div>
            <!-- delete account section end -->
        </div>
        <?php }?>
        </div>
        <div class="px-5 mt-0">
            <div class="input-group mb-5 pt-5 px-5">
                <a href="" class="form-control btn border-secondary me-1">Discard</a>
                <input type="submit" class="form-control btn btn-success" value="Save Changes" name="submit">
            </div>
        </div>
    </form>
</div>
<?php
include "inc/footer.php";
?>
