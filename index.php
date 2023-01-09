<?php include("path.php");
//include ("app/database/db.php");
include "app/controllers/posts2.php";
?>

<!doctype html>
<html lang="cz">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valleyfair</title>
    <!-- Bootstarp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font awesome-->
    <script src="https://kit.fontawesome.com/5e9048c062.js" crossorigin="anonymous"></script>
    <!--CSS link-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
</head>
<body>
<!-- Header  (from bootstrap page)-->
<?php include("app/include/header.php"); ?>
<!-- Header END-->
<!--Carousel START-->
<div class="container">
    <div class="row">
        <h1 class="slider-tittle">Sleva 30% na všechny vstupenky po registraci</h1>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php foreach ($newPosts as $key => $post): ?>
                <div class="carousel-item active">
                    <a href="<?= 'single.php?post=' . $post['id']; ?>"><img
                                src="<?= "assets/images/posts/" . $post['img'] ?>" class="d-block w-100"
                                alt="<?= $post['tittle'] ?>"></a>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</div>
<!--Carusel cast END-->
<p></p>
<div class="tlacitko">
    <button><a href="reg.php">Registrace</a></button>
</div>

<!--FOOTER START-->
<?php include("app/include/footer.php"); ?>
<!--FOOTER END-->
<!-- Bootstarp-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
