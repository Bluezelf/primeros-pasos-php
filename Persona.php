<?php

class Persona
{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse(): void
    {
        echo "Hola, soy {$this->nombre} y tengo {$this->edad} años." . PHP_EOL;
    }
}