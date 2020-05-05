<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Static/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="Static/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>ALED - Medecine interventions</title>
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-3/vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">

    <!-- owl carousel-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-3/vendor/owl.carousel/assets/owl.carousel.css">
    <!-- Ekko Lightbox-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-3/vendor/ekko-lightbox/ekko-lightbox.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-3/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-3/css/custom.css">
    <!-- Favicon-->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="Static/images/doctor.png"/>
    <link rel="stylesheet" href="Static/css/style.css">
    <link rel="stylesheet" href="Static/css/normalize.css">
    <link href="/Static/css/blog.css" rel="stylesheet">

</head>
<body>
<style type="text/css">
    .form-signin{
        padding-left: 500px;
        padding-right: 500px;
        /*padding-top: 100px;*/
    }
</style>
<?php
    include "header.html";
?>

<form class="form-signin text-center mt-5">
    <img class="mb-4" src="Static/images/doctor.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
    <label>Username</label>
    <input type="text" name="username" >

        <label class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="username" required autofocus>

        <label class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-lg btn-primary btn-block" name="login_user">Login</button>
    <p><a class="p-2 text-dark" href="#">Forgot password</a> ?</p>
    <p>Pas encore de compte ?<a class="p-2 text-dark" href="register.php">Inscrivez-vous</a> !</p>
    <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
</form>

</body>
</html>


