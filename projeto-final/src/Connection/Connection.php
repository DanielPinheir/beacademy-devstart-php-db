<?php

declare(strict_types=1);

namespace App\Connection;

//Isolando a classe Connection para chamar de onde precisar
abstract class Connection
{
    //chamada de metodo estatico
    //sem instanciar classe
    public static function getConnection(): \PDO
    {
        $database = 'db_store';
        $username = 'root';
        $password = '24108739';

        return new \PDO('mysql:host=localhost;dbname='.$database, $username, $password);
    }
}