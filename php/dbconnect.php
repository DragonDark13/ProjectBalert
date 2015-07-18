<?php

Class DbConnect
{
	protected $servername = "localhost";
    protected $dbName = "Balert";
    protected $dbUsername;
    protected $dbPassword;
    public $conn;

    public function __construct()
    {
        $this->getConfigData();
        $this->conn = new mysqli(
            $this->servername, 
            $this->dbUsername, 
            $this->dbPassword, 
            $this->dbName
            );
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    protected function getConfigData()
    {
        $confArray = parse_ini_file('../config.ini');
        $this->dbUsername = $confArray['username'];
        $this->dbPassword = $confArray['password'];
    }

    public function runQuery($query)
    {
        return $this->conn->query($query);
    }
}