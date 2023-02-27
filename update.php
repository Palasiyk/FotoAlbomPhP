<?php

    include "dbconfig.php";

    $prod_id = $_GET['id'];
    $rec = mysqli_query($connect, query: "SELECT * FROM `addImg` WHERE `id` = $prod_id");
    $prod = mysqli_fetch_array($rec);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleNew.css">
    <title>fotoalbum update</title>
</head>
<body>
    <center>
        <h3>Update Product</h3>
        <form class="text-center" action="vendor/update.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-group" value="<?= $prod['id'] ?>" >
                </div>
                <div class="form-group">
                    <lable>Name</lable><br>
                    <input type="text" name="name" class="form-group" placeholder="Name" value=" <?php echo $prod['name'] ?> " required >
                </div>
                <div class="form-group">
                    <lable>Image</lable><br>
                    <td>
                        <input type="file" name="image" id="images" value=" <?php echo $prod['image'] ?> " class="form-group"><br>
                        <img class="img__update" src="<?php echo $prod['image'] ?>" width="500px">
                    </td>
                    <img src='$prod[image]' alt="">
                </div>

                <button type="submit" name="update" class="btn btn-primary">Save</button>
            </div>
        </form>
    </center>

</body>
</html>
