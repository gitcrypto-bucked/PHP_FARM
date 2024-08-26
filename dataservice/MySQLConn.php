<?php


namespace dataservice;

class MySQLConn
{
    public function __construct($host, $port, $database ,$user, $password)
    {
            try 
            {
                $dsn = "mysql:host=$host;port=$port;dbname=$database;";
                // make a database connection
                $conn = new \PDO($dsn, $user, $password, [\PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION]);
            } 
            catch (\Exception $e)
            {
                echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
            }
            return $conn; exit;
    }
}