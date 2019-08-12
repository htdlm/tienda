<?php

//Conexión usando base de datos


$username = 'root';
$dsn = 'mysql:host=localhost; dbname=bd';
$password = '';

try{
    $db = new PDO($dsn, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $ex){

    echo "Fallo la conexión ".$ex->getMessage();
}


//Conexión usando archivo plano


//$password_file = "pass.txt";

