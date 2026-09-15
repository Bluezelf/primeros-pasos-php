<?php

require_once 'Persona.php';
require_once 'Mesa.php';

$persona1 = new Persona("Fabricio", 24);
$mesa1 = new Mesa("madera", 4);

$persona1->presentarse();
$mesa1->describir();