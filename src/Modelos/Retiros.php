<?php

namespace App\Modelos;

class Retiros
{
    private int $id;
    private float $monto;
    private string $fecha;
    private int $cuentaId;

    public function __construct(int $id, float $monto, string $fecha, int $cuentaId)
    {
        $this->id = $id;
        $this->monto = $monto;
        $this->fecha = $fecha;
        $this->cuentaId = $cuentaId;
    }

    public static function desdeArreglo(array $fila): self
    {
        return new self($fila['id'], $fila['monto'], $fila['fecha'], $fila['cuenta_id']);
    }

    public function rArreglo(): array{
        return [
            'id' => $this->id,
            'monto' => $this->monto,
            'fecha' => $this->fecha,
            'cuenta_id' => $this->cuentaId
        ];
    }
}