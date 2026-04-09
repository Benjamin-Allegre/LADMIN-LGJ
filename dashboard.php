<?php
session_start();

// Vérifier connexion
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

// Récupération du rôle
$role = $_SESSION['user']['level_access'];

// Choix du layout + contenu
switch ($role) {

    case 1: // Admin
        $layout = 'admin';
        $content = 'app/views/admin/dashboard.php';
        break;

    case 2: // Commercial
        $layout = 'commercial';
        $content = 'app/views/commercial/dashboard.php';
        break;

    case 3: // Client
        $layout = 'client';
        $content = 'app/views/client/dashboard.php';
        break;

    default:
        die("Rôle inconnu");
}

// Chargement du bon template
require "app/views/layouts/$layout.php";

?>