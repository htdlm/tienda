<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
include_once 'include/cabeza.php';

?>

<!DOCTYPE html>
<html lang="en">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<body class="goto-here">
<div class="hero-wrap hero-bread" style="background-image: url('images/fondo.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">de</a></span> <span>Productos</span></p>
                <h1 class="mb-0 bread">Producto Seleccionado</h1>
            </div>
        </div>
    </div>
</div>

<?php

$gid=$_GET["ide"];
$sqlProd = "SELECT * FROM items where id=".$gid;
try {
    $SProd = $db->prepare($sqlProd);
    $SProd->execute();
    $reg = $SProd->fetch();

    $id = $reg['id'];
    $producto = $reg['producto'];
    $imagen = $reg['imagen'];
    $precio = $reg['precio'];
    $descuento = $reg['descuento'];
    $caracteristicas = $reg['caracteristicas'];
    $stars=$reg['stars'];
    $vendidos = $reg['vendidos'];
    $ratings = $reg['ratings'];
    $existencia = $reg['existencia'];

    $preciodesc = $precio - ($precio*$descuento/100);
    $productohtml= "product.php?ide=".$id;
} catch (PDOException $e) {
    print $e->getMessage();
}

?>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <?php echo '<a href='.$productohtml.' class="img-prod"><img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $reg['imagen'] ).'" alt="Colorlib Template">'; ?>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <?php
                echo '<h3>'.$producto.'</h3>';
    			echo '<div class="rating d-flex">';
    			echo '<p class="text-left mr-4">';
    			echo '<a href="#" class="mr-2">'.$stars.'.0</a>';
                    for( $i = 1; $i<=$stars; $i++ ) {
                            echo '<a href="#"><span class="ion-ios-star"></span></a>';}
                    for( $i = $stars; $i<5; $i++ ) {
                            echo '<a href="#"><span class="ion-ios-star-outline"></span></a>';}
                echo '<p class="text-left mr-4">';
                echo '<a href="#" class="mr-4" style="color: #000;">'.$ratings. ' <span style="color: #bbb;">Calificaciones</span></a>';
                echo '</p>';
                echo '<p class="text-left mr-4">';
                echo '<a href="#" class="mr-4" style="color: #000;">'.$vendidos. ' <span style="color: #bbb;">Vendidos</span></a>';
                echo '</p>';
                echo '</p>';
                echo '</div>';
                echo '<p class="price"><span>$'.$preciodesc.'</span></p>';
                echo '<p> '.$caracteristicas.' </p>';
                ?>
                <div class="row mt-4">
                    <div class="w-100"></div>
                    <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                        <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                    <?php echo '<p style="color: #000;">'.$existencia.' Disponibles</p>'; ?>
                    </div>
                </div>
                <p><a href="cart.html" class="btn btn-black py-3 px-5">Agregar al carrito</a></p>
            </div>
        </div>
    </div>
</section>



<script>
    $(function(){

        var quantitiy=0;
        $('.quantity-right-plus').click(function(e){

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);

            // Increment

        });

        $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>

<?php include_once 'include/pie.php'; ?>

</body>
</html>