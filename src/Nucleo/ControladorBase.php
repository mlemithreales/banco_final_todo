<?php

namespace App\Nucleo;

class ControladorBase
{
    protected function vista(string $vista, array $datos = []): void
    {
        Vista::renderizar($vista, $datos);
    }

    protected function redirigir(string $ruta): never
    {
        header('Location: ' . url($ruta));
        exit;
    }

    protected function requiereSesion(): int
    {
        if (!isset($_SESSION['cuenta_id'])) {
            $this->redirigir('/');
        }

        return (int) $_SESSION['cuenta_id'];
    }
}
