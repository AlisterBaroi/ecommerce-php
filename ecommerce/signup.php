<?php
include "inc/header.php";
if (isset($_SESSION['customer'])) {
    header("location: profile.php");
}

// checking data and adding them to databse for signup
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $pass = hash('sha256', $_POST['pass']);
    $cpass = hash('sha256', $_POST['cpass']);

    $check = $conn->query("SELECT * FROM customer WHERE user_name = '$uname' OR email = '$email'");

    if (empty($fname) || empty($uname) || empty($phno) || empty($email) || empty($pass) || empty($cpass)) {
        echo "<script> alert('Please provided all informations!')</script>";
    } elseif (strlen($pass) <= 3) {
        echo "<script>alert('Password must be more than 3 characters')</script>";
    } elseif ($pass != $cpass) {
        echo "<script>alert('Password did not match')</script>";
    } elseif ($check->num_rows > 0) {
        echo "<script>alert('This username or email alredy exists')</script>";
    } else {
        $insert = $conn->query("INSERT INTO customer(user_name,full_name,phone,email,pass) VALUES ('$uname','$fname','$phno','$email','$pass')");
        if (!$insert) {
            echo "<script>alert('Due to an unexpected error we are unable to sign you up')</script>";
        } else {
            echo "<script>alert('Sign up successful');window.location.href='signin.php';</script>";
        }
    }
}

?>
<form action="" method="POST">
    <!-- signup form -->
    <div class="card mx-auto my-0 text-center border border-secondary" style="width: 30rem;">
        <div class="card-body text-secondary">
            <i class="fas fa-sign-in-alt fa-7x mx-auto my-2"></i>
            <h3 class="card-title my-3">Sign Up</h3>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-user text-secondary"></i></span>
                <input type="text" class="form-control" placeholder="Full Name" name="fname">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-user-circle text-secondary"></i></span>
                <input type="text" class="form-control me-1" placeholder="Username" name="uname">
                <span class="input-group-text"><i class="fas fa-phone text-secondary"></i></span>
                <input type="number" class="form-control" placeholder="Phone No" name="phno">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-at text-secondary"></i></span>
                <input type="email" class="form-control" placeholder="Email Address" name="email">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-edit text-secondary"></i></span>
                <input type="password" class="form-control me-1" placeholder="Password" name="pass">
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
            </div>
            <input type="submit" class="form-control btn btn-success" value="Sign Up" name="submit">
        </div>
    </div>
</form>

<?php
include "inc/footer.php";
?>
