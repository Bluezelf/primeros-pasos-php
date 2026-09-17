<?php

function validarPersona(string $nombre, int $edad) : array
{
    $errores = [];

    if ($nombre === ""){
        $errores[] = "El nombre es obligatorio";
    }

    if($edad <= 0){
        $errores[] = "La edad debe ser mayor que 0";
    }

    return $errores;
}