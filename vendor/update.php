<?php

include "../dbconfig.php";
//$connect = mysqli_connect("localhost", "root", "root", "addImg");

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/" .$img_name;

    move_uploaded_file($img_loc, "uploadImage/" .$img_name);

    $rec = mysqli_query($connect, query:
        "UPDATE `addImg` SET `name` = '$name', `image` = '$img_des' WHERE `addImg`.`id` = '$id'");

    header('Location: ../index.php');
}
?>

