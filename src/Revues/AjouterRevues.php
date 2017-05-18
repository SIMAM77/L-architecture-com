<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 17/05/2017
 * Time: 09:28
 */

require_once "../Class/RevuesDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

$Rev = new RevuesDao();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Rev->insert($_POST);

    $file_name = $Rev->uploadImg($_FILES);
    $Rev->insert([
        'date' => $_POST['date'],
        'nom_architectes' => $_POST['nom_architectes'],
        'realisations' => $_POST['realisations'],
        'rubriques' => $_POST['rubriques'],
        'lieu' => $_POST['lieu'],
        'departement' => $_POST['departement'],
        'img' => $file_name
    ]);

    header("Location: RevueIndex.php");
    die();

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
        <label for="numero">Numéro<span>*</span></label>
        <input type="text" name="numero" required="required">
    </p>

    <p>
        <label for="annee">Année de Parution<span>*</span></label>
        <input type="text" name="annee" required="required">
    </p>

    <p>
        <label for="regions">Régions<span>*</span></label>
        <input type="text" name="regions" required="required">
    </p>

    <p>
        <label for="img">Couverture<span>*</span></label>
        <input type="file" name="img" required="required">
    </p>

    <p>
        <label for="lien_calameo">Lien PDF<span>*</span></label>
        <input type="text" name="lien_calameo" required="required">
    </p>


    <p>
        <input type="submit" id="valider" value="Envoyer">


</form>


</body>
</html>
