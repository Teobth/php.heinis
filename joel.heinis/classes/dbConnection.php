<?php

class dbConnection {
    private $host = 'localhost';
    private $db = 'adwfull';
    private $user = 'root';
    private $pass = '';

    public function getConnection() {
        $dsn = "mysql:host={$this->host};dbname={$this->db}";
        return new PDO($dsn, $this->user, $this->pass);
    }
}

?>