<?php
session_start();
$pid_=$_GET['pid'];
$cart=$_SESSION['cart'];
$res = array_search($pid,$cart);
if($res!==false)
{
    echo "<script> alert('item already availble in cart') </script>";
}
else
{
    array_push($cart,$pid);
    $_SESSION['cart']=$cart;
    header('location:client_view_product.php');
}


?>