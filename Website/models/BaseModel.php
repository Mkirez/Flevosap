<?php
/**
 * Created by: Jake 2020
 * WIFFX
 */



class BaseModel
{
    protected $pdo;

    public function __construct()
    {
        try {
            $host = 'localhost';
            $user = 'root';
            $password = 'root';
            $dbname = 'flevodb';
            
            $this->pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname,
                $user, $password,
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $e) {
            die(var_dump($e->getMessage()));
        }
    }
}