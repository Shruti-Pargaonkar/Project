<?php

include_once 'connection.php';

$uname=$_POST['uname'];
$upass=$_POST['upass'];
$mobile=$_POST['mobile'];
$uaddress=$_POST['address'];

$q="insert into users(uname,upass,mobile,address) values('$uname','$upass',$mobile,'$uaddress')";
$sql_status = mysqli_query($conn,$q);

if($sql_status)
{
    echo "<h1 style='color:green'>Registeration Success</h1>
        <a href='client_login.html'>Login here</a>";
}
else
{
    echo "<h1 style='color:red'>Registeration Failed</h1>";
}
?>