<?php
class Database {
    private $db;

    private $host;
    private $port;
    private $database;
    private $user;
    private $password;

    function __construct($host, $port, $database, $user, $password) {
        $this->host = $host;
        $this->port = $port;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
        $this->db = new mysqli($host, $user, $password, $database);
    }

    function getDb() {
        return $this->db;
    }
}