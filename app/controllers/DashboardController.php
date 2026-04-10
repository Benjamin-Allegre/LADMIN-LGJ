<?php

require_once 'app/models/User.php';
require_once 'app/models/Prospect.php';

class DashboardController
{
    public function index()
    {
        // Récupération utilisateur connecté
        $user = $_SESSION['user'];
        $role = $user['level_access'];

        // Instance du model
        $userModel = new User();
        $prospectModel = new Prospect();

        // Variables par défaut
        $admins = [];
        $commercials = [];
        $clients = [];
        $prospects = [];

        /**
         * Si admin → on charge toutes les données
         */
        if ($role == 1) {
            $admins = $userModel->getAdmins();
            $commercials = $userModel->getCommercials();
            $clients = $userModel->getClients();
            $prospects = $prospectModel->getAll();

        }

        /**
         * Choix du layout + vue
         */
        switch ($role) {

            case 1:
                $layout = 'admin';
                $content = 'app/views/admin/dashboard.php';
                break;

            case 2:
                $layout = 'commercial';
                $content = 'app/views/commercial/dashboard.php';
                break;

            case 3:
                $layout = 'client';
                $content = 'app/views/client/dashboard.php';
                break;

            default:
                die("Rôle inconnu");
        }

        /**
         * Chargement du layout
         * (les variables sont dispo dans la vue)
         */
        require "app/views/layouts/$layout.php";
    }
}