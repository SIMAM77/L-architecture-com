<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 21:16
 */

require_once "../Class/RevuesDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();


$Revues = new RevuesDao();
$revue = $Revues->selectAll();

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
            <td>Numéro</td>
            <td>Annee</td>
            <td>Régions</td>
            <td>Couverture</td>
            <td>Lien Calaméo</td>
        </tr>

        <?php foreach ($revue as $revues): ?>

            <tr>
                <td><?php echo $revues['id']; ?></td>
                <td><?php echo $revues['numero']; ?></td>
                <td><?php echo $revues['annee']; ?></td>
                <td><?php echo $revues['regions']; ?></td>
                <td><?php echo $revues['img']; ?></td>
                <td><?php echo $revues['lien_calameo']; ?></td>
                <td><a href="EditerRevues.php?id=<?php echo $revues['id']; ?>">Éditer</a></td>
                <td><a href="SupprimerRevues.php?id=<?php echo $revues['id']; ?>">Supprimer</a></td>
            </tr>

        <?php endforeach; ?>

                <pre>
                    <a href="../Interface_admin.php">Retour Acceuil Admin</a>
                </pre>
                <a href="../Revues/AjouterRevues.php">Ajouter</a>
    </table>
</main>
</body>
</html>
