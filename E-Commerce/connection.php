<?php

$conn = new mysqli('localhost','root','','acme_feb');
if($conn->connect_error)
{
    echo "SQL Connection Failed";
    die;
}

?>