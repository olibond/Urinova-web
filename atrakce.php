<?php //session_start();
include "path.php";
include "app/controllers/posts2.php";
?>
<!doctype html>
<html lang="cz">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valleyfair</title>
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font awesome-->
    <script src="https://kit.fontawesome.com/5e9048c062.js" crossorigin="anonymous"></script>
    <!--CSS link-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<!-- Header  (from bootstrap page)-->
<?php include("app/include/header.php"); ?>
<!-- Header END-->
<!--HLAVNI CAST START-->

<div class="container">
    <div class="row">
        <h1 class="slider-tittle">Naše atrakce</h1>
    </div>

<?php foreach ($postedAllPosts as $key => $post): ?>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?="assets/images/posts/" . $post['img'] ?>" class="img-fluid rounded-start" alt="<?=$post['tittle']?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?='single.php?post=' . $post['id'];?>"><?=substr($post['tittle'], 0, 80)  ?></a></h5>
                    <p class="card-text"> <?=mb_substr($post['content'], 0, 200, 'UTF-8'). '...'  ?></p>
                    <p class="card-text"><small class="text-muted"><i class="fa-regular fa-calendar"></i> <?=substr($post['create_date'], 0, 11); ?></small></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

</div>
<!--HLAVNI CAST END-->
<div class="tlacitko">
    <button><a href="reg.php">Registrace</a></button>
</div>
<!--FOOTER-->
<?php include("app/include/footer.php"); ?>
<!-- Bootstarp-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
