<?php

namespace Model;

use PDO;
use PDOException;


class ConnectionDB
{
    protected $server;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->server = "mysql:host=localhost;dbname=library";
        $this->username = "root";
        $this->password = "774111@Tvt";
    }

    public function connect()
    {
        $conn = null;

        try {
            $conn = new PDO($this->server, $this->username, $this->password);
        } catch (PDOException $e) {
            $e->getMessage();
            exit();
        }

        return $conn;
    }
}