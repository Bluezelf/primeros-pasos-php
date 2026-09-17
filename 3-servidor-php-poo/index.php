<?php

require_once __DIR__ . "/controllers/PersonaController.php";

$ruta = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); //indica que va a dividir la ruta y solo quiere la dirección
$metodo = $_SERVER["REQUEST_METHOD"]; // recopila el metodo HTTP que se va a usar

if ($ruta === "/" && $metodo === "GET"){

    require __DIR__ . "/views/formulario-persona.php";
    echo "YA TODO SEPARADO";

}elseif($ruta === "/crear-persona" && $metodo === "POST"){
    
    crearPersona();
    
} else {
    http_response_code(404);
    echo "pagina no encontrada - 404 error";
}