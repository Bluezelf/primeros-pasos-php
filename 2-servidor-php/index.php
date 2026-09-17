<?php

$ruta = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if($ruta === "/"){
    echo "Pagina Principal";
}elseif($ruta === "/persona"){
    $nombre = $_GET["nombre"] ?? "Sin nombre";
    $edad = $_GET["edad"] ?? "Sin edad";

    echo "Nombre: " . $nombre;
    echo "<br>";
    echo "Edad: " . $edad;
} elseif ($ruta==="/mesa"){
    $material = $_GET["material"] ?? "Sin material";
    $patas = $_GET["patas"] ?? "Sin patas";

    echo "Material: " . $material;
    echo "<br>";
    echo "Numero de patas: " . $patas;
} elseif ($ruta === "/formulario-persona") {

    echo '
        <form method="POST" action="/crear-persona">
            <label>Nombre:</label>
            <input type="text" name="nombre">

            <br><br>

            <label>Edad:</label>
            <input type="number" name="edad">

            <br><br>

            <button type="submit">
                Crear persona
            </button>
        </form>
    ';
} elseif ($ruta === "/crear-persona") {
    $nombre = $_POST["nombre"] ?? "Sin nombre";
    $edad = $_POST["edad"] ?? "Sin edad";

    echo "Persona recibida";
    echo "<br>";
    echo "Nombre: " . $nombre;
    echo "<br>";
    echo "Edad: " . $edad;
}
else {
    http_response_code(404);
    echo "404 - Página no encontrada";
}