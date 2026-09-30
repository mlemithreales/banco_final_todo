<?php

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=db_banco_adso;charset=utf8mb4',
        'root',
        '1208',

        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());          
    die('No fue posible conectar con la base de datos.');
}
