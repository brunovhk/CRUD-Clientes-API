<?php

namespace App\Model;

use PDO;

class Conexao
{
    private static $instance;

    public static function getConexao()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=crud_clientes', 'MYSQL_USERNAME', 'MYSQL_PASSWORD');
        }

        return self::$instance;
    }
}