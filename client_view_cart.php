<?php

include_once 'connection.php';
session_start();
echo "<div>
    <a href ='client_view_products.php'>
    <button class='p-5 btn btn-primary'>Back to cart</button>
    </a>
    </div>";

if(isset($_SESSION['cart']))
{
    $cart=$_SESSION['cart'];

    if(count($cart)>0)
    {
        $cart_str=implode(",", $cart);
        $q="select * from products where id in($cart_str)";
        $sql_result=mysqli_query($conn,$q);

        echo "<div class='d-flex'>";
        echo "<div class='d-flex flex-wrap'>";
        while($row=mysqli_fetch_assoc($sql_result))
        {
            $pid=$row['ID'];
            $name=$row['name'];
            $details=$row['details'];
            $imgname=$row['imgname'];
           
            echo "<div class='child mt-3 ml-3' style='width:300px'>
                <div class='d-flex justify-content-between'>
                    <h3>$name</h3>
                    <h3>Rs. $price</h3>
                </div>
                <img src='imgname' style='width:100%'>
                <a href='addtocart.php?php=$pid'>
                    <button class='btn btn-warning w-100'>Add to cart</button>
                </a>
            </div>";
        }
        echo "</div>";
        echo "<div class='w-25 border'>
            
            </div>
        <div>";
    }

else
{
    echo "<h1>Cart is Empty</h1>";
}
}
else
{
    echo "unauthorised attempt";
}

?>