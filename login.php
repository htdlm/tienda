<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
include_once 'include/cabeza.php';

if(isset($_POST['loginBtn'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = sha1($password);

    $sqlQuery = "SELECT * FROM users WHERE email = :email and password = :password";
    $statement = $db->prepare($sqlQuery);
    $statement->execute(array(':email' => $email, ':password' => $hashed_password));

    if ($statement->rowCount() > 0) {

        $row = $statement->fetch();
        $id = $row["id"];
        $username = $row["username"];
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        echo "<script> swal({title: '¡Bienvenido!',text: 'Acceso Correcto',type: 'success',});</script>";
        print "<meta http-equiv=Refresh content=\"2 ; url=index.php\">";
    } else {
        echo "<script> swal({title: '¡ERROR!',text: 'Email o Password Incorrecto',type: 'error',});</script>";
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
                <h1 class="mb-0 bread">Login</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section singin-section bg-light">
    <div class="container">
        <div class="row block-10">
            <div class="mx-auto col-md-4 order-md-last d-flex">
                <form method="POST" action="" class="bg-white p-5 form-sigin">
                     <div class="form-group">
                         <input name= "email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Recuerdame
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" name="loginBtn" type="submit">Login</button>
                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            ¿No tienes cuenta? <a href="#" class="ml-2">Registrarme  <br> <br> </a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <span class="icon-key">
                            <a href="#">¿Olvidaste tú Password?<br> <br> </a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <span class="icon-envelope">
                            <a href="#">¿Deseas validar tu email?<br> <br> </a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <span class="icon-phone2">
                            <a href="#">¿Deseas validar tu móvil?<br> <br> </a>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</section>

<?php include_once 'include/pie.php'; ?>

</body>
</html>