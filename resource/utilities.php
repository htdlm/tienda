<?php

function check_empty_fields($required_fields_array){
    //Inicializa arreglo para guardar los errores
    $form_errors = array();

    //loop en el arreglo despliega la lista de errores
    foreach($required_fields_array as $name_of_field){
        if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
            $form_errors[] = $name_of_field . " es campo requerido";
        }
    }

    return $form_errors;
}

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

function check_email($data){
    //Inicializa arreglo para guardar los errores
    $form_errors = array();
    $key = 'email';
    //Valida email
    if(array_key_exists($key, $data)){

        //email tiene algo
        if($_POST[$key] != null){

            // Quita lo que no sirve del mail
            $key = filter_var($key, FILTER_SANITIZE_EMAIL);

            //Valida si el mail es valido
            if(filter_var($_POST[$key], FILTER_VALIDATE_EMAIL) === false){
                $form_errors[] = $key . " No es una dirección válida de correo";
            }
        }
    }
    return $form_errors;
}


function show_errors($form_errors_array){
    $errors = "<p><ul style='color: red;'>";

    //loop en el arreglo despliega la lista de errores
    foreach($form_errors_array as $the_error){
        $errors .= "<li> {$the_error} </li>";
    }
    $errors .= "</ul></p>";
    return $errors;
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




