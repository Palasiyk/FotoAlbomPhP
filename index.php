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
    <title>fotoalbum</title>
</head>
<body>

    <?php
        // Connect DataBaseSQL
        include('dbconfig.php');
    ?>

    <header>
        <h1 class="header__logo">My Family</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#demo">
            Add Foto
        </button>
    </header>

    <div class="wraper ">
        <main class="product">
            <div class="example">

                <?php
                $prd = mysqli_query($connect, query: "SELECT * FROM `addImg`");
                while ($prod = mysqli_fetch_array($prd)){
                ?>

                        <div class="product__body">
                            <div class="product__id"> <?= $prod['id'] ?> </div>
                            <div class="product__content">
                                <div class="product__image">
                                    <img src='<?= $prod['image'] ?>'>
                                </div>
                            </div>
                            <h2 class="product__tittle">
                                <?= $prod['name'] ?>
                            </h2>
                            <div class="product__details">
                                <a href='update.php? id= <?= $prod['id'] ?>' class='btn btn-primary'>UPDATE</a>
                                <a href='delete.php? id= <?= $prod['id'] ?>' class='btn btn-danger'>DELETE</a>
                            </div>
                        </div>

                <?php } ?>

            </div>
        </main>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="demo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Foto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form class="text-center" action="create.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <lable>Name</lable><br>
                            <input type="text" name="name" class="form-group" placeholder="Name" required >
                        </div>
                        <div class="form-group">
                            <lable>Image</lable><br>
                            <input type="file" name="image" class="form-group" required >
                        </div>
                        <button type="submit" name="create" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
