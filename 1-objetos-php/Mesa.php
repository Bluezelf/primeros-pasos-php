<?php

class Mesa
{
    public string $material;
    public int $numeroPatas;

    public function __construct(string $material, int $numeroPatas)
    {
        $this->material = $material;
        $this->numeroPatas = $numeroPatas;
    }

    public function describir(): void
    {
        echo "La mesa es de {$this->material} y tiene {$this->numeroPatas}." . PHP_EOL;
    }
}