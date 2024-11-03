<?php
    session_start();
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }else{
        $cart = [];
    }
    $id = $_GET("id");
    $name = $_GET("name");
    $quantity = $_GET("quantity");
    $price = $_GET("price");

    if(array_key_exists($id, $cart)){
        $cart[$id]['quantity']++;
    }else{
        $cart[$id] = array("name" => $name, "quantity" => $quantity, "price" => $price);
    }
    $_SESSION['cart'] = $cart;
    header("location: viewCart.php");
?>