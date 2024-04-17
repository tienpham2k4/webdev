<?php
include "function.php";
if(isset($_GET['id']))
{

    $productId = $_GET['id'];
    addToCart($productId);
    header('Location: ' . $_SERVER['HTTP_REFERER']."?add_to_cart_success=1");

}
