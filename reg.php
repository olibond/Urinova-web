<?php include("path.php");
include("app/controllers/users_main.php");
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
<!-- Header -->
<?php include("app/include/header.php"); ?>
<!-- Header END-->
<!--FORMA START-->

<div class="container reg_form">
    <h2>Forma registrace</h2>
    <div class="col-md-6 offset-md-3 err">
        <?php include("app/helps/errinfo.php") ?>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="row justify-content-center" method="post" action="reg.php">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jméno a příjmení</label>
                    <input name="username" value="<?= $username ?>" type="text" class="form-control"
                           id="formGroupExampleInput"
                    >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input name="email" value="<?= $email ?>" type="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">E-mailová adresa nebude předána 3. osobě</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Zadejte heslo</label>
                    <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Zadejte heslo ještě jednou</label>
                    <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <button type="submit" class="btn btn-secondary" name="button-reg">Potvrdit</button>
                    </div>
                    <div class="col-4">
                        <a href="log.php">Přihlásit se</a>
                    </div>
                    <p></p>
                </div>

            </form>
        </div>
    </div>
</div>

<!--FORMA END-->
<!--FOOTER-->
<?php include("app/include/footer.php"); ?>
<!-- Bootstarp-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>

