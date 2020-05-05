<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
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

<div class="content">
    <!-- notification message -->

    <!-- logged in user information -->


        <header class="blog-header py-3 px-3">
            <div class="row flex-nowrap justify-content-between align-items-center mx-5">
                <div class="col-4 pt-1">
                    <a class="text-muted" href="form_base.html">Faire son diagnostic</a>
                    <a class="text-muted ml-5" href="camera_upload.html">Test Caméra</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="http://boushoku.alwaysdata.net">ALED</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">

                    <?php  if (isset($_SESSION['username'])) : ?>
                        <strong class="mr-5">Welcome <?php echo $_SESSION['username']; ?></strong>
                        <a class="btn btn-sm btn-outline-secondary" href="index.php?logout='1'" >logout</a>
                    <?php else :?>
                        <a class="btn btn-sm btn-outline-secondary" href="login.php">Login</a>
                    <?php endif ?>

                </div>
            </div>
        </header>

</div>

<?php
    include "base.html";
    include "footer.html";
?>

</body>
</html>
