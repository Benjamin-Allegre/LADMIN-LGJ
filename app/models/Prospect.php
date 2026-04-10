<?php

require_once 'core/Database.php';

class Prospect
{
    private $db;

    public function __construct()
    {
        // Connexion DB
        $this->db = Database::connect();
    }

    /**
     * Récupérer tous les prospects
     */
    public function getAll()
    {
        $stmt = $this->db->prepare("
            SELECT p.*, t.name as type_name
            FROM prospects p
            LEFT JOIN types_prospect t ON p.type_id = t.id
            ORDER BY p.id DESC
        ");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}