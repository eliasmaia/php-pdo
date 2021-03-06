<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{

    public static function createConnection(): PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';

        $connection = new PDO('sqlite:' . $databasePath);
        
        /* Se fosse usar outro SGBD, s? precisaria alterar isso
        $connection = new PDO(
            'mysql:host=172.17.0.2;dbname=banco',
            'root',
            'senhalura'
        ); */

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}