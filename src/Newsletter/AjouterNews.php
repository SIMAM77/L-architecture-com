<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 17/05/2017
 * Time: 09:28
 */

require_once "../Class/NewsletterDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

$News = new NewsletterDao();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $file_name = $News->uploadImg($_FILES);
    $News->insert([
        'date' => $_POST['date'],
        'nom_architectes' => $_POST['nom_architectes'],
        'realisations' => $_POST['realisations'],
        'rubriques' => $_POST['rubriques'],
        'lieu' => $_POST['lieu'],
        'departement' => $_POST['departement'],
        'img' => $file_name
    ]);

   header("Location: Newsindex.php");
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
<form action="" method="post" id="revue-editer" enctype="multipart/form-data">

    <p>
    <label for="date">Date<span>*</span></label>
    <input type="text" name="date" required="required">
    </p>

    <p>
    <label for="nom_architectes">Nom de l'architecte'<span>*</span></label>
    <input type="text" name="nom_architectes" required="required">
    </p>

    <p>
    <label for="realisations">Les réalisations<span>*</span></label>
    <input type="text" name="realisations" required="required">
    </p>

    <p>
    <label for="rubriques">Rubriques<span>*</span></label>
    <input type="text" name="rubriques" required="required">
    </p>

     <p>
    <label for="lieu">Lieu<span>*</span></label>
    <input type="text" name="lieu" required>
    </p>

     <p>
    <label for="departement">Département<span>*</span></label>
    <input type="text" name="departement" required>
    </p>

    <p>
        <label for="img">Illustration<span>*</span></label>
        <input type="file" name="img" required>
    </p>

    <p>
    <input type="submit" id="valider" value="Envoyer">
    </p>


</form>


</body>
</html>
