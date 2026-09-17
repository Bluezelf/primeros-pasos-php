<?php

require_once __DIR__ . "/../src/Persona.php";
require_once __DIR__ . "/../src/validaciones.php";

function crearPersona() :void{
    $nombre = trim($_POST["nombre"] ?? "");
    $edad = (int)($_POST["edad"] ?? 0);

    $errores = validarPersona($nombre, $edad);

    if (!empty($errores)){
        foreach($errores as $error){ // recorre el array de errores
            echo $error;
            echo "<br>";
        }
        exit;
    }

    $persona = new Persona(
        $nombre,
        $edad
    );
    require __DIR__ . "/../views/resultado-persona.php";
}