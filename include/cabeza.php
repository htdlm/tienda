<?php include_once 'resource/session.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>T-Regalo Tú Tienda de Regalos en Línea</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert2.min.css">
    <script type="text/javascript" src="sweetalert/sweetalert2.all.min.js" ></script>

</head>

<body class="goto-here">
<div class="py-1 bg-black">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">7717780780 / 79</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">t-regalo@de2.mx</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">L-V 10:00-18:00 y Sab 10:00-15:00</span>
                    </div>

                    <?php if(!isset($_SESSION['username'])): ?>
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-user"></span></div>
                        <a class="btn btn-success mr-sm-4" href="login.php" role="button"> Login </a>
                        <a class="btn btn-info mr-sm-4" href="signup.php" role="button"> Registrar </a>
                    <?php else: ?>
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-user"></span></div>
                        <span class="text"> <?php echo $_SESSION['username'] ?> </>
                        <a class="btn btn-danger mr-sm-4" href="logout.php" role="button"> Logout </a>
                    <?php endif ?>

                </div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="/tregaloweb.png" width="200" height="130" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tienda</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="shop.html">Arreglos Florales y Frutales</a>
                        <a class="dropdown-item" href="product-single.html">Dulcería</a>
                        <a class="dropdown-item" href="cart.html">Peluches</a>
                        <a class="dropdown-item" href="checkout.html">Globos</a>
                        <a class="dropdown-item" href="checkout.html">Desayunos Sorpresa</a>
                        <a class="dropdown-item" href="checkout.html">Regalos Gourmet</a>
                        <a class="dropdown-item" href="checkout.html">Regalos Ocasiones Especiales</a>
                        <a class="dropdown-item" href="checkout.html">Empresariales</a>
                        <a class="dropdown-item" href="checkout.html">Carrito</a>
                        <a class="dropdown-item" href="checkout.html">Pagar</a>
                    </div>
                </li>
                <li class="nav-item"><a href="about.html" class="nav-link">Nosotros</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contactanos</a></li>
                <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->


</body>
</html>


