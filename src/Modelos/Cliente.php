<?php

namespace App\Modelos;

class Cliente
{
    private int $id;
    private string $nombre;

    public function __construct(int $id, string $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

   public static function clienteArreglo(array $filas): self
   {
        return new self($filas['id'], $filas['nombre']);
   }

    public function cArreglo(): array
    {
          return [
                'id' => $this->id,
                'nombre' => $this->nombre,
          ];
    }
}   

