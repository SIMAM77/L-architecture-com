<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 15:06
 */
require_once "Class/Connect.php";
require_once "Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style/admin.css">
</head>
<body>
<main id="panel-admin">
  <div class="wrapper-admin">
    <h1>Panel Administrateur</h1>
    <div>
        <?php
            echo 'Bienvenue : '.$_SESSION['pseudo']. ' <a href="deconnexion.php">Déconnexion</a>';
        ?>
    </div>
        <a href="Newsletter/NewsIndex.php">Newsletter</a>
        <a href="Revues/RevueIndex.php">Revues</a>
        <a href="Clients/ClientsIndex.php">Clients</a>
      </div>
</main>
</body>
</html>
