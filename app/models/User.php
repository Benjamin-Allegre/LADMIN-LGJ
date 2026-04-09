<?php

// Inclusion de la connexion DB
require_once 'core/Database.php';

class User
{
    private $db;

    public function __construct()
    {
        // Initialisation de la connexion
        $this->db = Database::connect();
    }

    /**
    * Retourne utilisateur avec toutes ses infos
    */
    public function findByEmail($email)
    {
        // Préparation de la requête pour éviter les injections SQL
        $stmt = $this->db->prepare("
            SELECT id, email, password, firstname, lastname, level_access 
            FROM users 
            WHERE email = :email
        ");

        // Bind des paramètres
        $stmt->bindParam(':email', $email);

        // Exécution
        $stmt->execute();

        // Retourne l'utilisateur
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    /**
     * Récupérer tous les admins (level_access = 1)
     */
    public function getAdmins()
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE level_access = 1");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Récupérer tous les commerciaux (level_access = 2)
     */
    public function getCommercials()
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE level_access = 2");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Récupérer tous les clients (level_access = 3)
     */
    public function getClients()
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE level_access = 3");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>