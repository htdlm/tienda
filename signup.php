<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
include_once 'include/cabeza.php';

if(isset($_POST['signupBtn'])){

        $email = $_POST['upemail'];
        $username = $_POST['upname'];
        $password = $_POST['uppassword'];
        $phone = $_POST['upphone'];

        $hashed_password = sha1($password);

        //Con Archivos Planos

        //add_user($username,$password,$email);

        try{

            $sqlInsert = "INSERT INTO users (username, email, phone, password, join_date)
              VALUES (:username, :email, :phone, :password, now())";

            //Usa PDO
            $statement = $db->prepare($sqlInsert);

            $statement->execute(array(':username' => $username, ':email' => $email, ':phone' => $phone, ':password' => $hashed_password));

            //Valida si el registro se creo
            if($statement->rowCount() == 1){
                echo "<script> swal({title: '¡Listo!',text: 'Usuario Registrado',type: 'success',});</script>";
                print "<meta http-equiv=Refresh content=\"2 ; url=index.php\">";
            }
        }catch (PDOException $ex){
            echo "<script> swal({title: '¡ERROR!',text: 'El usuario no pudo ser agregado' ,type: 'error',});</script>";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<body>

<div class="hero-wrap hero-bread" style="background-image: url('images/fondo.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Registrar</h1>
            </div>
        </div>
    </div>
</div>


<section class ="ftco-section signup-section bg-light mx-auto order-md-last d-flex justify-content-center">
    <form method="POST" action="" class="bg-white p-5 form-signup">
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <span class="icon-envelope">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name= "upemail" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <span class="icon-key">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="uppassword" class="form-control" id="inputPassword4" placeholder="Password" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                    <span class="icon-user">
                    <label for="inputName">Nombre</label>
                    <input type="text" name= "upname" class="form-control" id="inputName" placeholder="Juan Pérez" required>
                </div>
                <div class="form-group col-md-10">
                    <span class="icon-phone2">
                    <label for="inputPhone">Teléfono</label>
                    <input type="tel" name="upphone" class="form-control" id="inputPhone" placeholder="+52 5510101010" required>
                </div>
            </div>
        <button type="submit" name="signupBtn" class="btn btn-primary">Registrar</button>
        <form>
</section>

<?php include_once 'include/pie.php'; ?>

</body>
</html>