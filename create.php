<?php

include ('dbconfig.php');

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/" . $img_name;

    move_uploaded_file($img_loc, "uploadImage/" . $img_name);

    mysqli_query($connect, "INSERT INTO `addImg` (`id`, `name`, `image`) 
                                    VALUES (NULL, '$name', '$img_des')");

    header('Location: index.php');
}

