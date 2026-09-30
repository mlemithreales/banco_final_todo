<?php

namespace App\Modelos;

class Usuario
{
    private int $id;
    private string $nombre;
    private string $email;
    private string $contrasena;

    public function __construct(int $id, string $nombre, string $email, string $contrasena)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contrasena = $contrasena;
    }

    public static function desdeArreglo(array $fila): self
    {
        return new self($fila['id'], $fila['nombre'], $fila['email'], $fila['contrasena']);
    }

    public function uArreglo(): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'email' => $this->email,
            'contrasena' => $this->contrasena,
        ];
    }
}