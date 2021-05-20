<?php
include "inc/header.php";
include "controller/cart_manager.php";
if (!isset($_SESSION['customer'])) {
    header("location: signin.php");
}

while ($row = mysqli_fetch_array($query_run_id)) {
    $uid = $row['id'];
    $query = "SELECT * FROM cart WHERE uid = '$uid' AND paid = '1'";
    $query_run = mysqli_query($conn, $query);
    ?>

<div class="container">
    <form action="" method="POST" class="row">
    <!-- purchase record table start -->
        <div class="card mt-3 mb-5 px-3">
            <h1 class="card-header mt-3">Purchase History</h1>
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
                <!-- fetching data of previously purchased products -->
                <?php while ($row = mysqli_fetch_array($query_run)) {
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
                        <td class="text-center"><input type="submit" class="btn btn-danger" name="delete" value="Delete Record">
                        <input type="hidden" name="delp" value="<?php echo $opid; ?>">
                    </td>
                    </tr>
                    <?php }}?>
                </tbody>
            </table>
        </div>
    </form>
    <!-- purchase record table end -->
</div>
<?php
include "inc/footer.php";
?>
