<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 17/05/2017
 * Time: 09:28
 */

require_once "../Class/ClientsDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

$News = new ClientsDao();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $News->insert($_POST);

    header("Location: Clientsindex.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>
<body>
<h1>Ajouter</h1>
<form action="" method="post" id="revue-editer">

    <p>
        <label for="raison_sociale">Raison Sociale<span>*</span></label>
        <input type="text" name="raison_sociale" required="required">
    </p>

    <p>
        <label for="activites">Activités<span>*</span></label>
        <input type="text" name="activites" required="required">
    </p>

    <p>
        <label for="nom">Nom<span>*</span></label>
        <input type="text" name="nom" required="required">
    </p>

    <p>
        <label for="prenom">Prénom<span>*</span></label>
        <input type="text" name="prenom" required="required">
    </p>

    <p>
        <label for="fonction">Fonction<span>*</span></label>
        <input type="text" name="fonction" required="required">
    </p>

    <p>
        <label for="adresse">Adresse<span>*</span></label>
        <input type="text" name="adresse" required="required">
    </p>

    <p>
        <label for="code_postal">Code Postal<span>*</span></label>
        <input type="text" name="code_postal" required="required">
    </p>

    <p>
        <label for="ville">Ville<span>*</span></label>
        <input type="text" name="ville" required="required">
    </p>

    <p>
        <label for="pays">Pays<span>*</span></label>
        <input type="text" name="pays" required="required">
    </p>

    <p>
        <label for="telephone">Telephone<span>*</span></label>
        <input type="text" name="telephone" required="required">
    </p>


    <p>
        <label for="fax">Fax<span>*</span></label>
        <input type="text" name="fax" required="required">
    </p>


    <p>
        <label for="email">Email<span>*</span></label>
        <input type="text" name="email" required="required">
    </p>


    <p>
        <label for="destination">Zone Géographique<span>*</span></label>
        <input type="text" name="destination" required="required">
    </p>


    <p>
        <label for="statut">Statut<span>*</span></label>
        <input type="text" name="statut" required="required">
    </p>

    <p>
        <input type="submit" id="valider" value="Envoyer">
    </p>
</form>


</body>
</html>
