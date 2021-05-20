<?php
include "inc/header.php";
include "controller/cart_manager.php";
if (!isset($_SESSION['customer'])) {
    header("location: signin.php");
}
$ship = 0;
$sub_total = 0;
$total = 0;

while ($row = mysqli_fetch_array($query_run_id)) {
    $uid = $row['id'];
    $query = "SELECT * FROM cart WHERE uid = '$uid' AND paid = '0'";
    $query_run_cart = mysqli_query($conn, $query);
    ?>

<div class="container">
    <!-- shopping cart table start -->
    <form action="checkout.php" method="POST" class="row">
        <div class="card mt-3 mb-5 px-3">
            <h1 class="card-header mt-3">My Shopping Cart</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" class="ps-5">Item No.</th>
                    <th scope="col">Product</th>
                    <th scope="col" class="text-center">Unit Price</th>
                    <th scope="col" class="text-center">Quantity</th>
                    <th scope="col" class="text-center">Amount</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-secondary">
                <!-- fetching data of products added to cart -->
                <?php while ($row = mysqli_fetch_array($query_run_cart)) {
        $opid = $row['pid'];
        $opname = $row['opname'];
        $opprice = $row['opprice'];
        $oqnt = $row['oqnt'];
        $ototal = $row['ototal'];?>
                <!-- showing data with ability to delete it (CRUD functionality) -->
                    <tr>
                        <td class="ps-5"><?php echo $opid; ?></td>
                        <th scope="row"><?php echo $opname; ?></th>
                        <td class="text-center">$<?php echo $opprice; ?></td>
                        <td class="text-center"><?php echo $oqnt; ?></td>
                        <td class="text-center"><h5>$<?php echo $ototal; ?></h5></td>
                        <td class="text-center"><input type="submit" class="btn btn-danger" name="remove" value="Remove">
                        <input type="hidden" name="delp" value="<?php echo $opid; ?>">
                    </td>
                    </tr>
                    <?php $sub_total = $ototal + $sub_total;if ($sub_total > 1) {$ship = 19.99;}
        $total = $sub_total + $ship;}}?>
                </tbody>
            </table>
                <div class="card-body text-end text-secondary">
                <hr>
                <p class="px-0 mb-2"><b>Shipping:</b> $<?php echo $ship; ?></p>
                <h3 class="card-title">Total Amount</h3>
                <h4 class="card-title">$<?php echo $total; ?></h4>
                <input type="hidden" name="total" value="<?php echo $total; ?>">
                <input type="hidden" name="sub_total" value="<?php echo $sub_total; ?>">
                <input type="hidden" name="ship" value="<?php echo $ship; ?>">
                <input type="submit" class="btn btn-success my-3 px-3" name="checkout" value="Checkout >">
            </div>
            <!-- <?php ?> -->
        </div>
    </form>
    <!-- shopping cart table end -->
</div>
<?php
include "inc/footer.php";
?>
