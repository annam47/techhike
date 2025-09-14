<?php 
    include './config.php';

    $name = $_POST['name'];
    $color = $_POST['color'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];

    $file = $_FILES['image'];
    echo "<pre>";
    print_r($file);
    echo "</pre>";
    


?>