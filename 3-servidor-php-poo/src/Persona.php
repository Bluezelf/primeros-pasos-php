<?php

class Persona{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse() :string{
        return "Hola me llamo {$this->nombre} y tengo {$this->edad}";
    }
}
