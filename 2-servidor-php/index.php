<?php

$metodo = $_SERVER["REQUEST_METHOD"];
$ruta = $_SERVER["REQUEST_URI"];

if ($ruta === "/"){
    echo "Página principal";
}elseif($ruta === "/persona"){
    echo "Página de persona";
}elseif($ruta === "/mesa"){
    echo "Página de mesa";
}else{
    http_response_code(404);
    echo "404 - Página no encontrada";
}