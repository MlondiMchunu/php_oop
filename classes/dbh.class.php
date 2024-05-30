<?php

class Dbh{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "php_oop";
    
    protected function connect(){
        $dsn = 'mysql:host=' . $this->host .';'.'dbname=' . $this->dbName; //data source name
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }
    
}
?>