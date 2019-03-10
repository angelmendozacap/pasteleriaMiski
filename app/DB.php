<?php

class DB
{
    private $host = DB["host"];
    private $port = DB["port"];
    private $user = DB["user"];
    private $password = DB["password"];
    private $database = DB["database"];
    private $charset = DB["charset"];

    private function getConnection()
    {
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->database}";
            $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "set names {$this->charset}"];
            $db = new PDO($dsn,$this->user,$this->password,$options);
            return $db;
        } catch (PDOException $e) {
            die("Error -> ".$e->getMessage());
        }
        
    }
    public function db_query($sql,$data,$is_search = false,$search_one = false)
    {
        try {
            $con = $this->getConnection();
            $stmt = $con->prepare($sql);
            $stmt->execute($data);
            if ($is_search) {
                if ($search_one) {
                    $response = $stmt->fetch(PDO::FETCH_ASSOC);
                } else {
                    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                $con = null;
                return $response;
            } else {
                $con = null;
                return true;
            }
        } catch (PDOException $e) {
            die("Error -> ".$e->getMessage());
        }
        
    }
}