<?php
// For controlling data flow and functions of 'Cart', 'Checkout' and 'Purchase History' page

// Creating class
class Cart
{
    // Class function to delete from cart.php and purchased.php
    public function del($conn, $paid, $msg)
    {$delp = $_POST['delp'];
        $del = $conn->query("DELETE FROM cart WHERE pid ='$delp' AND paid='$paid'");
        echo $msg;
    }

    // Class function to make payment in checkout.php
    public function confirm($conn)
    {
        $id = $_POST['id'];
        $holder_name = $_POST['pname'];
        $card_no = $_POST['cno'];
        $exp = $_POST['exp'];
        $cvv = $_POST['cvv'];
        $paid = 1;
        if (empty($holder_name) || empty($card_no) || empty($exp) || empty($cvv)) {
            echo "<script> alert('Please provided all informations')</script>";
        } else {
            $payment = $conn->query("UPDATE cart SET paid='$paid' WHERE uid='$id'");
            if (!$payment) {
                echo "<script>alert('Due to an unexpected error you were unable to make the payment')</script>";
            } else {
                echo "<script>alert('Payment successfully');window.location.href='purchased.php';</script>";
            }
        }
    }
    public function amount($conn)
    {echo "running function ";
        $total = $_POST['total'];
        $sub_total = $_POST['sub_total'];
        $ship = $_POST['ship'];
        $uname = $_SESSION['customer'];
        $uid = $conn->query("SELECT id FROM customer WHERE user_name = '$uname'");
        $checkout = $conn->query("INSERT INTO checkout(uid,shipping,sub_total,total) VALUES ('$uid','$ship','$sub_total','$total')");
        // $checkout = $conn->query("INSERT INTO customer(user_name,full_name,phone,email,pass) VALUES ('$uname','$fname','$phno','$email','$pass')");
        echo "added to checkout $ship, $sub_total, $total ";

    }
}

// Getting user session data
$uname = $_SESSION['customer'];
$query = "SELECT * FROM customer WHERE user_name = '$uname'";
$query_id = "SELECT id FROM customer WHERE user_name = '$uname'";
$query_run = mysqli_query($conn, $query);
$query_run_id = mysqli_query($conn, $query_id);

// Creating object
$cart = new Cart($conn);

// Remove item in cart.php
if (isset($_POST['remove'])) {
    $paid = 0;
    $msg = "<script>alert('Item deleted successfully');window.location.href='cart.php';</script>";
    $cart->del($conn, $paid, $msg);
}

// Remove purchase record in purchased.php
if (isset($_POST['delete'])) {
    $paid = 1;
    $msg = "<script>alert('Record deleted successfully');</script>";
    $cart->del($conn, $paid, $msg);
}

// Transfering data from cart.php to checkout.php
if (isset($_POST['checkout'])) {
    while ($row = mysqli_fetch_array($query_run_id)) {
        $uid = $row['id'];
        $total = $_POST['total'];
        $sub_total = $_POST['sub_total'];
        $ship = $_POST['ship'];

        $check = $conn->query("SELECT * FROM checkout WHERE uid='$uid' AND paid='0'");
        if ($check->num_rows == 0) {
            $checkout = $conn->query("INSERT INTO checkout(uid,shipping,sub_total,total) VALUES ('$uid','$ship','$sub_total','$total')");
        }

        // $cart->amount($conn);
    }
}

// Completing Payment in checkout.php
if (isset($_POST['confirm'])) {
    $cart->confirm($conn);
}
