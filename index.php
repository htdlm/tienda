<?php include_once 'resource/session.php' ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
<h2>UNIR Proyecto 1 Sistema de autentificación </h2><hr>

<?php if(!isset($_SESSION['username'])): ?>
<P>No estás conectado <a href="login.php">Login</a> Aún no te has suscrito? <a href="signup.php">Signup</a> </P>
<?php else: ?>
<p>Ya estás conectado como <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a> </p>
<?php endif ?>

</body>
</html>