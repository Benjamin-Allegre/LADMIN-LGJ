<?php

class Database
{
    /**
     * Connexion PDO à la base de données
     */
    public static function connect()
    {
        try {
            return new PDO(
                "mysql:host=localhost;dbname=ladmin_lgj;charset=utf8",
                "root",
                "",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (PDOException $e) {
            die("Erreur DB : " . $e->getMessage());
        }
    }
}

?>