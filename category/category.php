<?php
    $id = $_POST["idCategory"];
    $name = $_POST["nameCategory"];
    $des = $_POST["description"];

    $fileCategory = fopen("../files/category.txt", "a") or die("Unable to open file!");
    $inforCategory = $id . "\t" . $name . "\t" . $des . "\n";
    fwrite($fileCategory, $inforCategory);
    header("location: index.html");
    fclose($fileCategory);
?>