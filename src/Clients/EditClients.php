<?php

require_once "../Class/ClientsDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

$Clts = new ClientsDao();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Clts->update($_POST);
    header("Location: Clientsindex.php");
    exit();

}
$row = $Clts->select($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editer</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>
<body>
<h1>Editer</h1>
<form action="" method="post" id="revue-editer">

    <p>

        <input type="hidden" name="id" value="<?= $row['id'] ?>">
    </p>

    <p>
        <label for="raison_sociale">Raison Sociale<span>*</span></label>
        <input type="text" name="raison_sociale" value="<?= $row['raison_sociale'] ?>" required="required">
    </p>

    <p>
        <label for="activites">Activités<span>*</span></label>
        <input type="text" name="activites" required="required" value="<?= $row['activites'] ?>">
    </p>

    <p>
        <label for="nom">Régions<span>*</span></label>
        <input type="text" name="nom" required="required" value="<?= $row['nom'] ?>">
    </p>

    <p>
        <label for="prenom">Couverture<span>*</span></label>
        <input type="text" name="prenom" required="required" value="<?= $row['prenom'] ?>">
    </p>

    <p>
        <label for="fonction">Fonction<span>*</span></label>
        <input type="text" name="fonction" required="required" value="<?= $row['fonction'] ?>">
    </p>

    <p>
        <label for="adresse">Adresse<span>*</span></label>
        <input type="text" name="adresse" required="required" value="<?= $row['adresse'] ?>">
    </p>

    <p>
        <label for="code_postal">Code Postal<span>*</span></label>
        <input type="text" name="code_postal" required="required" value="<?= $row['code_postal'] ?>">
    </p>

    <p>
        <label for="ville">Ville<span>*</span></label>
        <input type="text" name="ville" required="required" value="<?= $row['ville'] ?>">
    </p>

    <p>
        <label for="pays">Pays<span>*</span></label>
        <input type="text" name="pays" required="required" value="<?= $row['telephone'] ?>">
    </p>

    <p>
        <label for="telephone">Telephone<span>*</span></label>
        <input type="text" name="telephone" required="required">
    </p>


    <p>
        <label for="fax">Fax<span>*</span></label>
        <input type="text" name="fax" required="required" value="<?= $row['fax'] ?>">
    </p>

    <p>
        <label for="email">Email<span>*</span></label>
        <input type="text" name="email" required="required" value="<?= $row['email'] ?>">
    </p>

    <p>
        <label for="destination">Zone Géographique<span>*</span></label>
        <input type="text" name="destination" required="required" value="<?= $row['destination'] ?>">
    </p>

    <p>
        <label for="statut">Statut<span>*</span></label>
        <input type="text" name="statut" required="required" value="<?= $row['statut'] ?>">
    </p>

    <p>
        <input type="submit" id="valider" value="Envoyer">

</form>


</body>
</html>
<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editer</title>
</head>
<body>
<h1>Editer </h1>
    <form action="" method="get"></form>

</body>
</html>
