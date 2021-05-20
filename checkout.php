<?php
include "inc/header.php";
include "controller/cart_manager.php";
// Check login
if (!isset($_SESSION['customer'])) {
    header("location: index.php");
}

// while ($row = mysqli_fetch_array($query_run)) {
//     $checkout_uid = $row['id'];
//     $query_ckout = "SELECT * FROM checkout WHERE uid = '$checkout_uid' AND paid = '0'";
//     $query_run_checkout = mysqli_query($conn, $query_ckout);
while ($row = mysqli_fetch_array($query_run)) {
    $uid = $row['id'];
    $query = "SELECT * FROM checkout WHERE uid = '$uid' AND paid = '0'";
    $query_run_checkout = mysqli_query($conn, $query);
    ?>
<div class="container">
    <form action="" method="POST" class="row mb-5">
        <!-- Payment Start, fetching payment data from user database (CRUD functionality) -->
        <div class="col-8 mt-3 mx-auto">
            <div class="multi-collapse border border-secondary">
                <div class="card-body text-secondary">
                    <h2 class="card-title my-4">Payment Details</h2>
                    <hr>
                    <p>Card Holder Name</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-address-card text-secondary"></i></span>
                        <input type="text" class="form-control me-1" placeholder="Full Name" name="pname" value="<?php echo $row['pay_name']; ?>">

                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </div>
                    <p >Card Number</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fab fa-cc-visa text-secondary"></i></span>
                        <input type="number" class="form-control me-1" placeholder="xxxxx-xxxxx-xxxxx-xxxxx" name="cno" value="<?php echo $row['card_no']; ?>">
                    </div>
                    <div class="d-flex">
                        <p class="col-3">Valid Till</p>
                        <p>Security Code</p>
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control me-4" placeholder="YYYY-MM-DD" name="exp" value="<?php echo $row['exp']; ?>">
                        <input type="number" class="form-control me-1" placeholder="CCV" name="cvv" value="<?php echo $row['cvv']; ?>">
                        <input class="invisible">
                        <input class="invisible">
                    </div>
                </div>
            </div>
        </div>
        <!-- Payment end -->

        <!-- Order Summary Start, fetching user data from database (CRUD functionality) -->
        <div class="col-4 mt-3 mx-auto">
            <div class="multi-collapse border border-secondary">
                <div class="card-body text-secondary">
                    <h2 class="card-title my-4">Order Summary</h2>
                    <hr>
                    <div class="d-flex px-2">
                        <p class="col-3">Billed To</p>
                        <p class="col-9 text-end text-break"><?php echo $row['full_name']; ?></p>
                    </div>
                    <div class="d-flex px-2">
                        <p class="col-2">Email</p>
                        <p class="col-10 text-end text-break"><?php echo $row['email']; ?></p>
                    </div>
                    <div class="d-flex px-2">
                        <p class="col-6">Phone</p>
                        <p class="col-6 text-end text-break"><?php echo $row['phone']; ?></p>
                    </div>
                    <?php //}?>
                    <?php while ($row = mysqli_fetch_array($query_run_checkout)) {
        $total = $row['total'];
        $sub_total = $row['sub_total'];
        $ship = $row['shipping'];?>

                    <div class="d-flex px-2">
                        <p class="col-6">Sub Total</p>
                        <p class="col-6 text-end">$<?php echo $row['sub_total']; ?></p>
                    </div>
                    <div class="d-flex px-2">
                        <p class="col-6">Shipping</p>
                        <p class="col-6 text-end">$<?php echo $row['shipping']; ?></p>
                    </div>
                    <hr>
                    <div class="d-flex px-2">
                        <h4 class="col-5">Grand Total</h4>
                        <h4 class="col-7 text-end">$<?php echo $row['total']; ?></h4>
                    </div>
                    <?php //}?>
                    <div class="d-flex px-2">
                        <p class="col-6">Delivery</p>
                        <p class="col-6 text-end">5 days</p>
                    </div>
                    <div class="input-group">
                        <input type="submit" name="confirm" class="form-control btn btn-success" value="Confirm & Pay">
                    </div>
                </div>
            </div>
        </div>
        <!-- Order Summary End -->
        <?php }}?>
    </form>


</div>
<?php
include "inc/footer.php";
?>