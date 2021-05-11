<?php

    include_once("Connection.php");

    $categoryName = $_POST['categoryName'];
    $categoryId = $_POST['categoryCod'];


    $query = "INSERT INTO category (categoryName, categoryCod) VALUES (
        '$categoryName', '$categoryCod')";

    $sql = mysqli_query($conn, $query);

    if (!mysqli_query($conn, $query))
    header("location:addCategory.html");

?>