<?php include_once 'include/cabeza.php'; ?>
<?php include_once 'resource/Database.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>T-Regalo</title>
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



<!-- Inicia Cuerpo -->

<body>

<section id="home-section" class="hero">
    <div class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/b1.jpg);">
                    </div>
                    <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">T-Regalo Tienda eCommerce</span>
                            <div class="horizontal">
                                <h3 class="vr" style="background-image: url(images/divider.jpg);">A todo México</h3>
                                <h1 class="mb-4 mt-3">Para ese día tan especial <br><span>Es su cumpleaños</span></h1>
                                <p>No es un día cualquiera, sólo ocurre una vez al año, es una persona especial, no lo dejes pasar.</p>

                                <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Comprar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/b2.jpg);">
                    </div>
                    <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">T-Regalo Tienda eCommerce</span>
                            <div class="horizontal">
                                <h3 class="vr" style="background-image: url(images/divider.jpg);">A todo México</h3>
                                <h1 class="mb-4 mt-3">Para esa persona <span>que es especialmente</span> sofisticada</h1>
                                <p>Un toque de buen gusto con regalos para gente muy especial.</p>

                                <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Comprar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/lateral.jpg);">
                <a href="https://www.youtube.com/wath?v=4mHi0L490gQ" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">La mejor manera de enviar sus productos</h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>Podemos entregar sus productos con un mensaje personalizado y dirigido a esa persona tan especial a la cuál queremos festejar con un delicado regalo. La entrega la realizamos como si usted la estuviera haciendo en persona.</p>
                    <div class="row ftco-services">
                        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="icon d-flex justify-content-center align-items-center mb-4">
                                    <span class="flaticon-002-recommended"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading">Política de Reembolsos</h3>
                                    <p>Su satisfacción está garantizada al 100%, tenemos una política de reembolsos si por nuestra causa esa ocasión especial no es lo que esperaba.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="icon d-flex justify-content-center align-items-center mb-4">
                                    <span class="flaticon-001-box"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading">Empaquetado Seguro</h3>
                                    <p>En caso de requerir que su regalo sea enviado por mensajería le aseguramos que viajará correctamente empaquetado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="icon d-flex justify-content-center align-items-center mb-4">
                                    <span class="flaticon-003-medal"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading">Calidad</h3>
                                    <p>Nuestros productos están hechos con las materias de mayor calidad posible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Inicia PROMOCIONES -->

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Promociones</h2>
                <p>Visita nuestras promociones especiales</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

                <?php
                $sqlPromo = "SELECT * FROM items order by descuento DESC Limit 4";
                try {
                    $SPromo = $db->prepare($sqlPromo);
                    $SPromo->execute();
                    $datos=$SPromo->fetchAll();

                foreach($datos as $reg) {
                    $id = $reg['id'];
                    $producto = $reg['producto'];
                    $imagen = $reg['imagen'];
                    $precio = $reg['precio'];
                    $descuento = $reg['descuento'];
                    $stars=$reg['stars'];
                    $preciodesc = $precio - ($precio*$descuento/100);
                    $productohtml= "product.php?ide=".$id;

                    echo '<div class="col-sm col-md-6 col-lg ftco-animate">';
                        echo '<div class="product">';
                            echo '   <a href='.$productohtml.' class="img-prod"><img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $reg['imagen'] ).'" alt="Colorlib Template">';
                            echo '        <span class="status">'.$descuento."%".'</span>';
                            echo '        <div class="overlay"></div>';
                            echo '    </a>';
                            echo '    <div class="text py-3 px-3">';
                            echo '        <h3><a href="#">'.$producto.'</a></h3>';
                            echo '        <div class="d-flex">';
                            echo '            <div class="pricing">';
                            echo '                <p class="price"><span class="mr-2 price-dc">'."$".$precio.'</span><span class="price-sale">'."$".$preciodesc.'</span></p>';
                            echo '            </div>';
                            echo '            <div class="rating">';
                            echo '                <p class="text-right">';
                        for( $i = 1; $i<=$stars; $i++ ) {
                            echo '                    <a href="#"><span class="ion-ios-star"></span></a>';}
                        for( $i = $stars; $i<5; $i++ ) {
                            echo '                    <a href="#"><span class="ion-ios-star-outline"></span></a>';}
                            echo '                </p>';
                            echo '            </div>';
                            echo '        </div>';
                            echo '        <p class="bottom-area d-flex px-3">';
                            echo '            <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Agregar al carrito <i class="ion-ios-add ml-1"></i></span></a>';
                            echo '            <a href="#" class="buy-now text-center py-2">Comprar ahora<span><i class="ion-ios-cart ml-1"></i></span></a>';
                            echo '        </p>';
                            echo '    </div>';
                        echo '</div>';
                    echo '</div>';
                }
                } catch (PDOException $e) {
                    print $e->getMessage();
                }

                ?>

        </div>
    </div>
</section>


<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8 d-flex align-items-stretch">
                <div class="img" style="background-image: url(images/regaloElla.jpg);"></div>
            </div>
            <div class="col-md-4 py-md-5 ftco-animate">
                <div class="text py-3 py-md-5">
                    <h2 class="mb-4">Regalos para Ella</h2>
                    <p>El regalo que ella está esperando.</p>
                    <p><a href="#" class="btn btn-white px-4 py-3">Comprar Ahora</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 order-md-last d-flex align-items-stretch">
                <div class="img img-2" style="background-image: url(images/regaloEl.jpeg);"></div>
            </div>
            <div class="col-md-7 py-3 py-md-5 ftco-animate">
                <div class="text text-2 py-md-5">
                    <h2 class="mb-4">Regalos para Él</h2>
                    <p>El regalo perfecto para el hombre moderno y sofisticado.</p>
                    <p><a href="#" class="btn btn-white px-4 py-3">Comprar Ahora</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Los más vendidos</h2>
                <p>Esta es nuestra selección de productos que han sido más seleccionados por nuestros clientes</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

    <?php
    $sqlVenta = "SELECT * FROM items order by vendidos DESC Limit 4";
    try {
        $SVenta = $db->prepare($sqlVenta);
        $SVenta->execute();
        $datos=$SVenta->fetchAll();

        foreach($datos as $reg) {
            $id = $reg['id'];
            $producto = $reg['producto'];
            $imagen = $reg['imagen'];
            $precio = $reg['precio'];
            $descuento = $reg['descuento'];
            $stars=$reg['stars'];
            $preciodesc = $precio - ($precio*$descuento/100);

            echo '<div class="col-sm col-md-6 col-lg ftco-animate">';
            echo '<div class="product">';
            echo '   <a href="#" class="img-prod"><img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $reg['imagen'] ).'" alt="Colorlib Template">';
            echo '        <span class="status">'.$descuento."%".'</span>';
            echo '        <div class="overlay"></div>';
            echo '    </a>';
            echo '    <div class="text py-3 px-3">';
            echo '        <h3><a href="#">'.$producto.'</a></h3>';
            echo '        <div class="d-flex">';
            echo '            <div class="pricing">';
            echo '                <p class="price"><span class="mr-2 price-dc">'."$".$precio.'</span><span class="price-sale">'."$".$preciodesc.'</span></p>';
            echo '            </div>';
            echo '            <div class="rating">';
            echo '                <p class="text-right">';
            for( $i = 1; $i<=$stars; $i++ ) {
                echo '                    <a href="#"><span class="ion-ios-star"></span></a>';}
            for( $i = $stars; $i<5; $i++ ) {
                echo '                    <a href="#"><span class="ion-ios-star-outline"></span></a>';}
            echo '                </p>';
            echo '            </div>';
            echo '        </div>';
            echo '        <p class="bottom-area d-flex px-3">';
            echo '            <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Agregar al carrito <i class="ion-ios-add ml-1"></i></span></a>';
            echo '            <a href="#" class="buy-now text-center py-2">Comprar ahora<span><i class="ion-ios-cart ml-1"></i></span></a>';
            echo '        </p>';
            echo '    </div>';
            echo '</div>';
            echo '</div>';
        }
    } catch (PDOException $e) {
        print $e->getMessage();
    }

    ?>

    </div>
    </div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/fondo.jpg);">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="10000">0</strong>
                                <span>Clientes Contentos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Distribuidores</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="1000">0</strong>
                                <span>Socios</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Premios</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4">Lo que opinan nuestros clientes satisfechos</h2>
                <p>Ustedes nos permiten mantenernos en este negocio, su satisfacción es vital para nosotros</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">Excelentes Regalos, siempre adecuados para la ocasión.</p>
                                <p class="name">Gerardo Torres</p>
                                <span class="position">Mercadeo</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">Entregan el día que se les solicita sin excepción.</p>
                                <p class="name">Juan López</p>
                                <span class="position">Diseñador</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">La calidad de los productos es insuperable.</p>
                                <p class="name">Pedro Zamora</p>
                                <span class="position">Gerente</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5 pl-4 line">La selección de vinos de lo mejor.</p>
                                <p class="name">Pablo Rodriguez</p>
                                <span class="position">Profesional independiente</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2>Suscribirse para recibir noticias</h2>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Escriba su dirección Email">
                                    <input type="submit" value="Suscribir" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Fin Cuerpo -->

<?php include 'include/pie.php'; ?>

</body>
</html>




