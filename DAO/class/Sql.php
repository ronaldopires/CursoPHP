<?php

class Sql extends PDO
{
    private $conn;

    public function __construct() //Ao estanciar a classe Sql sera executado automáticamente o método construtor
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }

    private function setParams($statement, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value) //Método para deixar mais inteligente o uso do bindParams
    {
        $statement->bindParam($key, $value);
    }

    public function defaultQuery($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()): array
    {
        $stmt = $this->defaultQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
