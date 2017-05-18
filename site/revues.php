<?php
require_once "../src/Class/Connect.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>revues</title>
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
    <h2>Nos<br>revues.</h2>
    <div class="les-revues">
        <div class="col33">

            <?php require_once "../src/Class/RevuesDao.php";

            $stock = new RevuesDao();
            $stockLigne = $stock->selectAll();


            ?>

            <?php
            $count = 0;
            while($count < 4) :
            $ligne = $stockLigne[$count];
            ?>
            <figure>
                <img src="img-content/<?= $ligne['img'] ?>" alt="">
                <p>Revue n°<?= $ligne['numero'] ?> - <?= $ligne['annee'] ?>.<br><?= $ligne['regions'] ?></p>
                <button class="cta" type="button" name="voir"><a href="lecture-revues.php?id=<?= $ligne['id'] ?>">Voir Plus</a></button>
            </figure>
            <?php //endforeach;
            $count++;
            endwhile; ?>

        </div>
        <div class="col33">

            <?php

            while($count < 8 ) :
                $ligne = $stockLigne[$count]; ?>
                <figure>
                    <img src="img-content/<?= $ligne['img'] ?>" alt="">
                    <p>Revue n°<?= $ligne['numero'] ?> - <?= $ligne['annee'] ?>.<br><?= $ligne['regions'] ?></p>
                    <button class="cta" type="button" name="voir"><a href="lecture-revues.php?id=<?= $ligne['id'] ?>">Voir Plus</a></button>
                </figure>
                <?php
                $count++;
            endwhile; ?>


        </div>
        <div class="col33">

            <?php

            while($count < 12 ) :
                $ligne = $stockLigne[$count]; ?>
                <figure>
                    <img src="img-content/<?= $ligne['img'] ?>" alt="">
                    <p>Revue n°<?= $ligne['numero'] ?> - <?= $ligne['annee'] ?>.<br><?= $ligne['regions'] ?></p>
                    <button class="cta" type="button" name="voir"><a href="lecture-revues.php?id=<?= $ligne['id'] ?>">Voir Plus</a></button>
                </figure>
                <?php
                $count++;
            endwhile; ?>


        </div>
        <div class="col33">

            <?php

            while($count < 16 ) :
                $ligne = $stockLigne[$count]; ?>
                <figure>
                    <img src="img-content/<?= $ligne['img'] ?>" alt="">
                    <p>Revue n°<?= $ligne['numero'] ?> - <?= $ligne['annee'] ?>.<br><?= $ligne['regions'] ?></p>
                    <button class="cta" type="button" name="voir"><a href="lecture-revues.php?id=<?= $ligne['id'] ?>">Voir Plus</a></button>
                </figure>
                <?php
                $count++;
            endwhile; ?>


        </div>

        <div class="pagination">
            <span><img src="img-layout/triangle.png" alt=""></span>
            <ul>
                <li class="bulletactive"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <span><img src="img-layout/triangle2.png" alt=""></span>
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
