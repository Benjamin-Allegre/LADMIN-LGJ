<?php
session_start();

// Vérification connexion
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

// Appel du controller
require_once 'app/controllers/DashboardController.php';

$controller = new DashboardController();
$controller->index();

?>