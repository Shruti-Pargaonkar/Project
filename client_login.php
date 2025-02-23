<?php
include_once "connection.php";

$uname=$_POST['uname'];
$upass=$_POST['upass'];

$q="select * from users where uname='$uname' and upass='$upass'";
$sql_res=mysqli_query($conn,$q);
$row_count=mysqli_num_rows($sql_res);

if($row_count==0)
{
    echo "<h1 style='color:red'>Invalid Login</h1>";
}
elseif($row_count == 1)
{
    session_start();
    $_SESSION['cart']=array();
    header('location:client_view_products.php');
}

?>