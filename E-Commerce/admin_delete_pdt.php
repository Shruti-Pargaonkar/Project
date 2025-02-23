<?php
include_once 'connection.php';
$pdt_id=$_GET['pdt_id'];
echo "Recieved pdt id=$pdt_id";

$cmd="delete from products where id=$pdt_id";
echo "cmd=$cmd";
$sql_status=mysqli_query($conn, $cmd);

if($sql_status)
{
    header('location:admin_view_products.php');
}
else
{
    echo "error occured during delete";
    echo $conn->error_log;
}
//$cmd="delete from product id=$pdt_id";

?>