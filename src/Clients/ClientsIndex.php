<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 21:16
 */

require_once "../Class/ClientsDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();


$Clients = new ClientsDao();
$globalClients = $Clients->selectAll();

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>
<body>
<main id="revue-index">
    <table>

        <tr>
            <td>ID</td>
            <td>Raison Sociale</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Fonction</td>
            <td>Adresse</td>
            <td>Code Postal</td>
            <td>Ville</td>
            <td>Pays</td>
            <td>Téléphone</td>
            <td>Fax</td>
            <td>Email</td>
            <td>Destination</td>
            <td>Statut</td>

        </tr>

        <?php foreach ($globalClients as $globalClient): ?>

            <tr>
                <td><?php echo $globalClient['id']; ?></td>
                <td><?php echo $globalClient['raison_sociale']; ?></td>
                <td><?php echo $globalClient['activites']; ?></td>
                <td><?php echo $globalClient['nom']; ?></td>
                <td><?php echo $globalClient['prenom']; ?></td>
                <td><?php echo $globalClient['fonction']; ?></td>
                <td><?php echo $globalClient['adresse']; ?></td>
                <td><?php echo $globalClient['code_postal']; ?></td>
                <td><?php echo $globalClient['pays']; ?></td>
                <td><?php echo $globalClient['telephone']; ?></td>
                <td><?php echo $globalClient['fax']; ?></td>
                <td><?php echo $globalClient['email']; ?></td>
                <td><?php echo $globalClient['destination']; ?></td>
                <td><?php echo $globalClient['statut']; ?></td>

                <td><a href="EditClients.php?id=<?php echo $globalClient['id']; ?>">Éditer</a></td>
                <td><a href="SupprimerClients.php?id=<?php echo $globalClient['id']; ?>">Supprimer</a></td>
            </tr>

        <?php endforeach; ?>
                <pre>
                    <a href="../Interface_admin.php">Retour Acceuil Admin</a>
                </pre>
                <a href="../Clients/AjouterClients.php">Ajouter</a>
    </table>
</main>
</body>
</html>
