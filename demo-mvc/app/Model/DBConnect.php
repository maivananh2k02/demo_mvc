<?php

namespace App\Model;
use PDO;
use PDOException;

class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=my_database;charset=utf8";
        $this->username = "root";
        $this->password = "Vanh2k02@";
    }

    public function connect()
    {
        try {
        return new PDO($this->dsn, $this->username,$this->password);
        }catch (PDOException $exception){
            die($exception->getMessage());
        }
    }
}