<?php

    //CONTROL DE CABECERAS Y PETICIONES
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: POST, GET");
    header("Access-Control-Allow-Headers: Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");

    //CONFIGURACIÓN PARA AXIOS
    $_POST = json_decode(file_get_contents("php://input"),true);

    $_POST['nombre'] != '' ? $nombre = $_POST['nombre'] : $nombre = '';

    if(!emprty($nombre)){

        $json = array(
            [
                "ID" => 1,
                "Nombre" => 'Juan',
                "Edad" => 72,
            ],
            [
                "ID" => 2,
                "Nombre" => 'Pepe',
                "Edad" => 56,
            ],
            [
                "ID" => 3,
                "Nombre" => 'Adrian',
                "Edad" => 19,
            ],
            [
                "ID" => 4,
                "Nombre" => 'Verónica',
                "Edad" => 25,
            ],
            [
                "ID" => 5,
                "Nombre" => 'Sara',
                "Edad" => 32,
            ],
            
        );
    
        echo json_encode($json);

    }
    else{
        echo 'Error. Por favor tu petición.';
    }

?>