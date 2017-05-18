<?php
require_once "../src/Class/Connect.php";
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>L'architecture de votre région</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">

</head>

<body>

<?php require_once "header2.php";?>

<main id="toutes-actualites">
    <h2>Notre sélection</h2>
    <div class="actu-images">

        <?php require_once "../src/Class/NewsletterDao.php";

        $stock = new NewsletterDao();
        $stockLigne = $stock->selectAll();
        ?>

        <?php
        $count = 0;
        while($count < 2) :
            $ligne = $stockLigne[$count];
            ?>
            <a href="article_actu.php?id=<?=$ligne['id'] ?>"><figure>
                <img src="img-content/<?= $ligne['img']?>" alt="<?= $ligne['lieu'] ?> (<?= $ligne['departement'] ?>)">
                <h3><?= $ligne['rubriques']?></h3>
                <span><figcaption><?= $ligne['realisations'] ?></figcaption></span>
            </figure></a>
            <?php //endforeach;
            $count++;
        endwhile; ?>


    </div>
    <div class="actu-images">
        <?php

        while($count < 5) :
            $ligne = $stockLigne[$count];
            ?>
        <a href="article_actu.php?id=<?=$ligne['id'] ?>"><figure>
                <img src="img-content/<?= $ligne['img']?>" alt="<?= $ligne['lieu'] ?> (<?= $ligne['departement'] ?>)">
                <h3><?= $ligne['rubriques']?></h3>
                <span><figcaption><?= $ligne['realisations'] ?></figcaption></span>
            </figure></a>
            <?php //endforeach;
            $count++;
        endwhile; ?>
    </div>
    <h2>Toutes les actualités</h2>

    <?php foreach ($stockLigne as $lagne) :?>
    <div class="actu-rapides clearfix">
        <p><?= $lagne['date'] ?></p>
        <span><?= $lagne['rubriques']?></span>
        <p><?= $lagne['realisations'] ?></p>
    </div>
    <?php endforeach; ?>



    <span class="voir-actu"><a href="#">Voir les actualités<img class="triangleactu" src="img-layout/triangle2.png"><img class="plus-actu" src="img-layout/cta.png"></a></span>

</main>
<section class="newsletter">
    <div class="border_newsletter clearfix">
        <h2>Notre Newsletter</h2>
        <input type="text" name="Email" placeholder="Entrez votre adresse email">
    </div>
</section>

<!---------------------F O O T E R---------------------->

<?php require_once "footer.php";?>
