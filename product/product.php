<?php
    $id = $_POST["idProduct"];
    $name = $_POST["nameProduct"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $img = $_POST["image"];
    $idCategory = $_POST["idCategory"];

    $fileProduct = fopen("../files/product.txt", "a") or die("Unable to open file!");
    $inforProduct = $id . "\t" . $name . "\t" . $quantity . "\t" .$price . "\t" . "http://localhost:8088/TH3/images/".$img . "\t" . $idCategory . "\n";
    fwrite($fileProduct, $inforProduct);
    header("location:javascript://history.go(-1)");
    fclose($fileProduct);
?>