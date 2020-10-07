<?php
/**
 * Created by: Jake 2020
 * WIFFX
 */

class BaseModel
{
    protected PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME,
                DB_USERNAME,
                DB_PASSWORD,
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            die(var_dump($e->getMessage()));
        }
    }
}