<?php

// Inclusion du modèle utilisateur
require_once 'app/models/User.php';

class AuthController
{
    /**
     * Affiche la page de connexion
     */
    public function showLogin()
    {
        require 'app/views/auth/login.php';
    }

    /**
     * Traite le formulaire de connexion
     */
    public function login()
    {
        // Récupération sécurisée des données
        $email = htmlspecialchars($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        // Instance du modèle
        $userModel = new User();

        // Recherche utilisateur en base
        $user = $userModel->findByEmail($email);

        // Vérification du mot de passe
        if ($user && password_verify($password, $user['password'])) {

            // Stockage des infos utilisateur en session
            $_SESSION['user'] = $user;

            header('Location: dashboard.php');

            exit;

        } else {
            // Message d'erreur
            $error = "Email ou mot de passe incorrect";

            // Réaffichage de la vue avec erreur
            require 'app/views/auth/login.php';
        }
    }
}

?>