<?php


function check_min_length($fields_to_check_length){
    //Inicializa arreglo para guardar los errores
    $form_errors = array();

    foreach($fields_to_check_length as $name_of_field => $minimum_length_required){
        if(strlen(trim($_POST[$name_of_field])) < $minimum_length_required && $_POST[$name_of_field] != NULL){
            $form_errors[] = $name_of_field . " demasiado corto debe medir mínimo {$minimum_length_required} caracteres de largo";
        }
    }
    return $form_errors;
}


function add_user($adduser, $addpass, $addemail)
{
    global $password_file;
    if(!$fh = fopen($password_file, "a+")) { die("<P>No se puede abrir el archivo de claves"); }
    rewind($fh);
    while(!feof($fh))
    {
        $line = fgets($fh, 4096);
        $user_pass = explode(":", $line);
        if($user_pass[0] == $adduser)
        {
            echo "<h2>Ya existe el usuario!</h2>";
            return 0;
        }
    }
    $add = $adduser . ":" . sha1($addpass) . ":" . $addemail . "\n";
    if(!fwrite($fh, $add)) { die("<P>No puedo escribir en el archivo de usuarios"); }
    fclose($fh);
    echo"<h2>Usuario agregado!</h2>";
}


function check_pass($login, $password) {
    global $password_file;
    if(!$fh = fopen($password_file, "r")) {die("<P>No se puede abrir el archivo de usuarios");}
    $match = 0;
    $password = sha1($password);
    while(!feof($fh)) {
        $line = fgets($fh, 4096);
        $user_pass = explode(":", $line);
        if($user_pass[0] == $login) {
            if(rtrim($user_pass[1]) == $password) {
                $match = 1;
                break;
            }
        }
    }
    if($match) {
        return 1;
    } else {
        return 0;
    }
    fclose($fh);
}



function abortar(){
    echo "Quieres salir? escribe si para continuar: ";
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);
    if(trim($line) != 'si'){
        echo "Saliendo!\n";
        exit;
    }
    fclose($handle);
    echo "\n";
    echo "ok continuamos...\n";
}
