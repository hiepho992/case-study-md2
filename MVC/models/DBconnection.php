<?php
class DBconnection{
  
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=buybooks;charset=utf8', 'root', 'dinhhiep123', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}


?>