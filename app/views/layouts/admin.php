<?php
// Vérification sécurité
if (!isset($_SESSION['user']) || $_SESSION['user']['level_access'] != 1) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>

    <h1>Dashboard Admin</h1>
    
    <!-- Inclusion du contenu -->
    <?php require $content; ?>

</body>
</html>