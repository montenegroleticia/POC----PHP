<?php

namespace Database;

class Database
{
    private static $instance;
    private $db;

    private function __construct()
    {
        // Configurar as informações de conexão com o banco de dados
        $host = 'localhost';
        $dbname = 'banco_de_dados';
        $username = 'usuario';
        $password = 'senha';

        $this->db = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getDb()
    {
        return $this->db;
    }
}
