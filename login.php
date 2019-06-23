<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if(isset($_POST['loginBtn'])) {
    //array to hold errors
    $form_errors = array();

//validate
    $required_fields = array('username', 'password');
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    if (empty($form_errors)) {

        //collect form data
        $user = $_POST['username'];
        $password = $_POST['password'];


        /* BASE DE DATOS

        //Valida si el usuario existe en la base de datos
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));

       while($row = $statement->fetch()){
           $id = $row['id'];
           $hashed_password = $row['password'];
           $username = $row['username'];

           if(sha1($password) == $hashed_password){
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               header("location: index.php");
           }else{
               $result = "<p style='padding: 20px; color: red; border: 1px solid gray;'> Invalid username or password</p>";
           }
       }

         Fin de BASE DE DATOS  */

        if (check_pass($user, $password) == 1) {
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            header("location: added.php");
        } else {
            $result = "<p style='padding: 20px; color: red; border: 1px solid gray;'> Usuario o password inválido</p>";
        }
    } else {
        if (count($form_errors) == 1) {
            $result = "<p style='color: red;'>Hay un error en la forma </p>";
        } else {
            $result = "<p style='color: red;'>Hay  " . count($form_errors) . " errores en la forma </p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<h2>UNIR Proyecto 1 Autentificación de usuarios </h2><hr>

<h3>Forma de login</h3>

<?php if(isset($result)) echo $result; ?>
<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
<form method="post" action="">
    <table>
        <tr><td>Username:</td> <td><input type="text" value="" name="username"></td></tr>
        <tr><td>Password:</td> <td><input type="password" value="" name="password"></td></tr>
        <tr><td></a></td><td><input style="float: right;" type="submit" name="loginBtn" value="Entrar"></td></tr>
    </table>
</form>
<p><a href="index.php">Regresar</a> </p>
</body>
</html>

