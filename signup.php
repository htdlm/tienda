<?php
//Permite la conexión de la Base de Datos o el Archivo Plano
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

//Procesa el formato
if(isset($_POST['signupBtn'])){
    //Inicializa el arreglo de errores
    $form_errors = array();

    //Valida el formato
    $required_fields = array('email', 'username', 'password');

    //Llama a la función para ver si no hay campos vacíos
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    //Longitud mínima de campos
    $fields_to_check_length = array('username' => 4, 'password' => 6);

    //Llama a la función para validar longitud mínima
    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

    //Validación del email
    $form_errors = array_merge($form_errors, check_email($_POST));

    //Valida si no hay errores
    if(empty($form_errors)){
        //Lee datos
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //encripta el password con sha1

        $hashed_password = sha1($password);

        //Con Archivos Planos

        add_user($username,$password,$email);

        /*   CON BASE DE DATOS

        try{

            //create SQL insert statement
            $sqlInsert = "INSERT INTO users (username, email, password, join_date)
              VALUES (:username, :email, :password, now())";

            //Usa PDO
            $statement = $db->prepare($sqlInsert);

            //Agrega Datos en la BD
            $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password));

            //Valida si el registro se creo
            if($statement->rowCount() == 1){
                $result = "<p style='padding:20px; border: 1px solid gray; color: green;'> Registrado correctamente</p>";
            }
        }catch (PDOException $ex){
            $result = "<p style='padding:20px; border: 1px solid gray; color: red;'> Ocurrio un error: ".$ex->getMessage()."</p>";
        }

        */

    }
    else{
        if(count($form_errors) == 1){
            $result = "<p style='color: red;'> Hay un error en el formato<br>";
        }else{
            $result = "<p style='color: red;'> Hay " .count($form_errors). " errores <br>";
        }
    }

}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register Page</title>
</head>
<body>
<h2>UNIR Proyecto 1 Autentificación de usuarios </h2><hr>

<h3>Forma de Registro</h3>

<?php if(isset($result)) echo $result; ?>
<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
<form method="post" action="">
    <table>
        <tr><td>Email:</td> <td><input type="text" value="" name="email"></td></tr>
        <tr><td>Username:</td> <td><input type="text" value="" name="username"></td></tr>
        <tr><td>Password:</td> <td><input type="password" value="" name="password"></td></tr>
        <tr><td></td><td><input style="float: right;" type="submit" name="signupBtn" value="Entrar"></td></tr>
    </table>
</form>
<p><a href="index.php">Regresar</a> </p>
</body>
</html>