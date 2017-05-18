<?php
require_once "../src/Class/Connect.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>revues lecture</title>
    <link rel="stylesheet" href="style/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php require_once "header2.php"; ?>

<div class="recherche">
    <h2 class="une-recherche">Une Recherche ?</h2>
    <div class="une-recherche-borders">
        <label>
            <input type="text" name="" value="Entrer un numéro, une région...">
            <img src="img-layout/loupe.svg" alt="" onclick="">
        </label>
    </div>
    <span class="scrollrevues"><img src="img-layout/trianglescrollnoir.png" alt="">Scroll.</span>
</div>
<div class="revues">
    <div class="les-revues">
        <div class="col33" id="col33-alone">
            <button class="cta retour" type="button" name="voir"><a href="revues.php"> < retour</a></button>
            <?php require_once "../src/Class/RevuesDao.php";

            $stock = new RevuesDao();
            $stockLigne = $stock->select($_GET['id']);
            // Penser à mettre $_GET['id'] et renvoyer l'id dans l'URL


            ?>
            <figure>
                <img src="img-content/<?= $stockLigne['img'] ?>" alt="">
                <p>Revue n°<?=  $stockLigne['numero'] ?> - <?=  $stockLigne['annee'] ?>.<br><?=  $stockLigne['regions'] ?></p>
            </figure>
        </div>
        <div class="partenairescol">
            <h3>Entreprises Partenaires Web de la Région <?= $stockLigne['regions'] ?></h3>
            <p>Désolé, pour le moment, aucune entreprise partenaire n'est présente dans cette régions.</p>
        </div>

    </div>

</div>
<section class="newsletter">
    <div class="border_newsletter clearfix">
        <h2>Notre Newsletter</h2>
        <input type="text" name="Email" placeholder="Entrez votre adresse email">
    </div>
</section>
<!---------------------F O O T E R---------------------->

<?php require_once "footer.php";?>