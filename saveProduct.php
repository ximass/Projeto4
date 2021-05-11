<?php

    include_once("Connection.php");

    $sku = $_POST['sku'];
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    $query = "INSERT INTO estoque (sku, productName, price, quantity, description) VALUES (
        '$sku', '$productName', '$price', '$quantity', '$description')";

    $sql = mysqli_query($conn, $query);

    if (!mysqli_query($conn, $query))
    header("location:addProduct.html");

?>