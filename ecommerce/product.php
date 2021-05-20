<?php
include "inc/header.php";

if (isset($_SESSION['customer'])) {
    include "controller/cart_manager.php";

    while ($row = mysqli_fetch_array($query_run_id)) {
        $uid = $row['id'];

        if (isset($_POST['add_to_cart'])) {
            $pid = $_POST['product_id'];
            $oqnt = $_POST['qnt'];
            if (empty($oqnt) || $oqnt == 0) {
                header("location: index.php");
                break;
            }
            // adding product to cart (CRUD functionality)
            $check = "SELECT * FROM product WHERE pid = '$pid'";
            $query_run = mysqli_query($conn, $check);
            while ($row = mysqli_fetch_array($query_run)) {
                $opid = $row['pid'];
                $opname = $row['pname'];
                $opprice = $row['pprice'];
                $ototal = $opprice * $oqnt;
                $insert = $conn->query("INSERT INTO cart(pid,uid,opname,opprice,oqnt,ototal) VALUES ('$opid','$uid','$opname','$opprice','$oqnt','$ototal')");
                if (!$insert) {
                    echo "<script>alert('An unexpected error occured')</script>";
                } else {
                    echo "<script>alert('Item successfully added to cart');window.location.href='store.php';</script>";
                }
            }
        }
    }
}

// fetching product data from dabatase
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['pp'])) {
        $p = $_POST['product'];
        $check = "SELECT * FROM product WHERE pname = '$p'";
        $query_run = mysqli_query($conn, $check);
    }
}

?>
<div class="container text-secondary">
    <form action="" method="POST" class="row py-5">
        <!-- displaying fetched data about product -->
        <?php while ($row = mysqli_fetch_array($query_run)) {?>
        <img src="inc/img/<?php echo $row['pname']; ?>.jpg" class="col-4 img-fluid mx-auto" alt="">
        <div class="col-7 mx-auto text-end">
            <h1 class="mb-3"><?php echo $row['pname']; ?></h1>
            <h5 class="mb-3">Price: $<?php echo $row['pprice']; ?> </h5>
            <h4 class="mt-3">Description </h4>
            <p class="text-justify mb-2">
                <?php echo $row['pdes']; ?>
            </p>
            <!-- conditional function to add to card, depending on if user is logged in -->
            <?php if (!isset($_SESSION['customer'])) {?>
                <p class="my-0 fw-bold">Login to add to cart</p>
            <?php }?>
            <div class="d-flex my-3">
                <p class="col-11 me-2 my-1">Quantity: </p>
                <input type="number" class="col-1" name="qnt" value="1" <?php if (!isset($_SESSION['customer'])) {?> disabled <?php ;}?>>
            </div>
            <input type="submit" class="btn btn-success" name="add_to_cart" value="Add to Cart >" <?php if (!isset($_SESSION['customer'])) {?> disabled <?php ;}?>>
            <input type="hidden" name="product_id" value="<?php echo $row['pid']; ?>">
        </div>
        <?php }?>
    </form>.
</div>
<?php
include "inc/footer.php";
?>
