<?php

namespace App\Repositorios;

use App\Modelos\Cliente;
use PDO;

require __DIR__ . '/../Nucleo/Conexion.php';

class ClienteRepositorio
{
    private PDO $pdo;

    public function __construct()
    {
        global $pdo;

        $this->pdo = $pdo;
    }

    public function obtenerTodos(): array
    {
        $sql = "SELECT id, nombre FROM clientes";

        $stmt = $this->pdo->query($sql);

        $clientes = [];

        while ($fila = $stmt->fetch()) {
            $clientes[] = new Cliente(
                $fila['id'],
                $fila['nombre']
            );
        }

        return $clientes;
    }
}