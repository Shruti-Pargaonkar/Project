<?php
$pdt_id=$_POST['pdt_id'];

if(isset($_POST['name']) && isset($_POST['details']) && isset($_POST['price']) && isset($_POST['ptd_id']))
{
    include_once 'connection.php';

    date_default_timezone_set("Asia/Kolkata");
    $unique_name=date('d_M_y_H_i_s');
    $unique_name=$unique_name.'.jpg';

    move_uploaded_file($_FILES['imgname']['tmp_name'],$unique_name);

    $name=$_POST['name'];
    $details=$_POST['details'];
    $price=$_POST['price'];
    $ptd_id=$_POST['ptd_id'];

    //$cmd="insert into products(name,details,price,imgname) values ('$name','$details',$price,'$unique_name')";
    $cmd="update products set name='$name', details='$details', price=$price,imgname='$unique_name' where id=$pdt_id";
    echo "cmd-$cmd";
    $sql_status=mysqli_query($conn,$cmd);

    if($sql_status)
    {
        header('location:admin_view_products.php');
    }
    echo "Error-$sql_status";
    
}

else
{
    echo "unauthorised attempt";
    
}
?>