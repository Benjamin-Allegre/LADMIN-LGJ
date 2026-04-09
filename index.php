<?php
// Démarre la session pour gérer l'utilisateur connecté
session_start();

// Chargement du contrôleur
require_once 'app/controllers/AuthController.php';

// Création d'une instance du contrôleur
$authController = new AuthController();

// Routing simple (GET = afficher / POST = traiter)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $authController->login(); // Traitement du formulaire
} else {
    $authController->showLogin(); // Affichage du formulaire
}

?>