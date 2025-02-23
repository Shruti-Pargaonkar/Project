<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .cart-parent
        {
            position:relative;
        }
        .cart-count
        {
            position:absolute;
            background-color:tomato;
            font-size:20px;
            color:white;
            border-radius:50%;
            height:30px;
            width:30px;
            left:90px;
            bottom:40px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php  
session_start();

    
    $cart = $_SESSION['cart'];
    $cart_count = count($cart);


include_once "connection.php";

$cmd="select * from products";
$sql_res=mysqli_query($conn,$cmd);
$row_count=mysqli_num_rows($sql_res);

echo "<div class='jumbotron bg-primary'>
        <h1 class='jumbotron-text  text-center text-white'>View Products </h1>
        <div class='d-flex justify-content-end'>
        <a class='px-4 cart-parent' href='client_view_cart.php'>
                <button class='btn bg-warning'><i class='fa fa-shopping-cart fa-3x'></i></button>
                <span class='cart-count text-center'><div>$cart_count</div></span>
        </a>
        <a class='href='logout.php''>
            <button class='btn bg-danger'><i class='fa fa-3x fa-power-off'></i></button>
        </a>
        
    </div>
    </div>";
        


echo"<div class='d-flex flex-wrap'>";
for($i=0;$i<$row_count;$i++)
{
    $row=mysqli_fetch_assoc($sql_res);
    $pid=$row['ID'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $imgname=$row['imgname'];

    echo "<div class='child mt-3 ml-3' style='width:300px'>
    <div class='d-flex justify-content-between'>
        <h3>$name</h3>
        <h3>Rs.$price</h3>
    </div>
    <img src='$imgname' style='width:100%'>
    <a href='addtocart.php?pid-$pid'>
        <button class='btn btn-warning w-100'>Add to cart</button>
    </a>
    </div>";
}
echo "</div>";
?>