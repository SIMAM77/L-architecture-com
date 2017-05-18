<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 21:16
 */

require_once "../Class/NewsletterDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();


$News = new NewsletterDao();
$newsletters = $News->selectAll();

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
            <td>Date</td>
            <td>Nom architecte</td>
            <td>Réalisation</td>
            <td>Rubriques</td>
            <td>Lieu</td>
            <td>Départements</td>
            <td>Illustration</td>

        </tr>

        <?php foreach ($newsletters as $newsletter): ?>

            <tr>
                <td><?php echo $newsletter['id']; ?></td>
                <td><?php echo $newsletter['date']; ?></td>
                <td><?php echo $newsletter['nom_architectes']; ?></td>
                <td><?php echo $newsletter['realisations']; ?></td>
                <td><?php echo $newsletter['rubriques']; ?></td>
                <td><?php echo $newsletter['lieu']; ?></td>
                <td><?php echo $newsletter['departement']; ?></td>
                <td><?php echo $newsletter['img']; ?></td>
                <td><a href="EditerNews.php?id=<?php echo $newsletter['id']; ?>">Éditer</a></td>
                <td><a href="SupprimerNews.php?id=<?php echo $newsletter['id']; ?>">Supprimer</a></td>
            </tr>

        <?php endforeach; ?>
                <pre>
                    <a href="../Interface_admin.php">Retour Acceuil Admin</a>
                </pre>
                <a href="AjouterNews.php">Ajouter</a>
    </table>
</main>
</body>
</html>
