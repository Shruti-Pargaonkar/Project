<?php

if(isset($_POST['name']) && isset($_POST['details']) && isset($_POST['price']) )
{


    include_once 'connection.php';

    date_default_timezone_set("Asia/Kolkata");
    $unique_name=date('d_M_y_H_i_s');
    $unique_name=$unique_name.'.jpg';
    
    move_uploaded_file($_FILES['imgname']['tmp_name'],$unique_name);
    echo "<img src='$unique_name'>";

    $name=$_POST['name'];
    $details=$_POST['details'];
    $price=$_POST['price'];

    $cmd="insert into products(name,details,price,imgname) values ('$name','$details',$price,'$unique_name')";
    $sql_status=mysqli_query($conn,$cmd);

    if($sql_status)
    {
        header('location:admin_upload_products.html');
    }
    echo $sql_status;
}
else
{
    echo "Unauthorised attempt";
}


?>