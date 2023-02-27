<?php

    include "dbconfig.php";


    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `addImg` WHERE `addImg`.`id` = '$id'");

    header('Location: index.php');