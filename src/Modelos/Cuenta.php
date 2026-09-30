<?php

namespace App\Modelos;

class Cuenta
{
    private int $id;
    private float $saldo;
    private int $clienteId;

    public function __construct(int $id, float $saldo, int $clienteId)
    {
        $this->id = $id;
        $this->saldo = $saldo;
        $this->clienteId = $clienteId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getClienteId(): int
    {
        return $this->clienteId;
    }
}
