<?php
//namespace \mysql;

class Connection 
{
    private $dsn; 
    private $username;
    private $password;
    private $pdo = null;
 
    public function __construct($dsn, $username, $password, $database)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;        
    }
 
    protected function createConnection()
    {
        try {
            $pdo = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $exception) {

        }
        return $pdo;
    }
 
    public function getConnection()
    {
        if ($this->pdo == null) {
            $this->pdo = $this->createConnection();
        }
        return $this->pdo;
    }
}