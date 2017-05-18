<?php
require_once "../Class/RevuesDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

$Revs = new RevuesDao();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $Revs->update($_POST);
    header("Location: RevueIndex.php");
}
$row = $Revs->select($_GET['id']);

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
<form action="" method ="post" id="revue-editer">

    <p>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <p>
        <label for="numero">Numéro<span>*</span></label>
        <input type="text" name="numero" value="<?= $row['numero'] ?>" required>
    </p>

    <p>
        <label for="annee">Année de Parution<span>*</span></label>
        <input type="text" name="annee" value="<?= $row['annee'] ?>" required>
    </p>

    <p>
        <label for="regions">Régions<span>*</span></label>
        <input type="text" name="regions"  value="<?= $row['regions']?>" required >
    </p>

    <p>
        <label for="img">Couverture<span>*</span></label>
        <input type="text" name="img"  value="<?= $row['img'] ?>" required >
    </p>

    <p>
        <label for="lien_calameo">Lien PDF<span>*</span></label>
        <input type="text" name="lien_calameo" value="<?= $row['lien_calameo'] ?>" required >
    </p>

    <p>
        <input type="submit" id="valider" value="Envoyer">
    </p>

</form>
</body>
</html>
