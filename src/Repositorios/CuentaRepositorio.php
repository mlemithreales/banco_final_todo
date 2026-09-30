<?php

namespace App\Repositorios;

use App\Modelos\Cuenta;
use PDO;

require __DIR__ . '/../Nucleo/Conexion.php';

class CuentaRepositorio
{
    private PDO $pdo;

    public function __construct()
    {
        global $pdo;

        $this->pdo = $pdo;
    }

    public function obtenerTodos(): array
    {
        $sql = "SELECT id, saldo, cliente_id FROM cuentas";

        $stmt = $this->pdo->query($sql);

        $cuentas = [];

        while ($fila = $stmt->fetch()) {
            $cuentas[] = new Cuenta(
                $fila['id'],
                $fila['saldo'],
                $fila['cliente_id']
            );
        }

        return $cuentas;
    }
}

