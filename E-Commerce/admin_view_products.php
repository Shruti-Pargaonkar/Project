<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <style>  

            
            .pdt-img 
            {
                width:100%;
                height:200px;
            }
            .parent
            {
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(205,115,203,1) 0%, rgba(0,212,255,0.9699230033810399) 96%);
                margin-top:10px;
                height:350px;
                width:300px;
                padding:10px;
                margin:5px;
            }
        </style>

    </head>
</html>

<?php

include_once 'connection.php';

$sql_result=mysqli_query($conn,'select * from products');
$total_rows=mysqli_num_rows($sql_result);

echo "<div class='d-flex flex wrap'>";
for($i=0;$i<$total_rows;$i++)
{
    $row=mysqli_fetch_assoc($sql_result);
    $pdt_id=$row['ID'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];

    $imgname=$row['imgname'];
    echo "
    <div class='ml-4 parent'>
    <div class='d-flex justify-content-between'>
    <h3 class='text-white'>$name</h3>
    <h4 class='text-white'>Rs.$price</h4>
    </div>
    <img class='pdt-img w-100' src='$imgname'>
    <p class='text-white'>$details</p>
    
        <div class='d-flex justify-content-around'>
        <a href='admin_update_products.php?pdt_id=$pdt_id'> 
            <button class='btn btn-primary'>
                <i class='text-white fa fa-edit'></i>
            </button>
        </a>
            <a href='admin_delete_pdt.php?pdt_id=$pdt_id'>

                <button class='btn bg-danger'> 
                    <i class='text-white fa fa-trash'></i>
                </button>
            </a>
        </div>
    </div>
    ";
}
    echo "</div>";



?>