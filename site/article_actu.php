<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>L'architecture de votre région</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">

</head>

<body>

<!---------------------H E A D E R---------------------->
<?php require_once "header2.php";?>

<?php require_once "../src/Class/NewsletterDao.php";

$stock = new NewsletterDao();
$stockLigne = $stock->select($_GET['id']);
// Penser à mettre $_GET['id'] et renvoyer l'id dans l'URL


?>

<main id="article_actu">
    <img class="intro_img" src="img-content/<?= $stockLigne['img'] ?>">
    <div class="information_article">
        <h3><span><?= $stockLigne['rubriques'] ?>:</span> <?= $stockLigne['realisations'] ?></h3>
        <p class="first_paragraph">
            Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor l’immeuble tertiaire "Astrale" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires. D’une capacité d'accueil de 1 500 personnes, avec une surface
            de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts. Le parti d'implantation est de créer un bâtiment urbain périmétrique permettant de dégager un parc végétal de la
            plus grande dimension possible en son centre. Le restaurant tout en courbe devient lui même une partie de ce jardin en s'agrémentant d'une terrasse végétalisée et l’ensemble des bâtiments s'articule autour de ce parc où plateaux, paliers, escaliers,
            rue intérieure et restaurant ont des vues.
        </p>
        <p class="second_paragraph">
            Deux halls principaux ponctuent l’édifice en marquant fortement la volumétrie de l’ensemble. Au Nord une faille entièrement vitrée accompagnée par un voile en béton blanc courbe offre une transparence entre l’avenue et le jardin intérieur et au Sud, un
            totem vitré lumineux visible depuis l’A86 englobe les salles de réunion rouges afin de former un signal identitaire. L’organisation en plan résulte d’une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d’une optimisation
            de l’éclairage naturel, y compris pour l’ensemble des circulations verticales et horizontales. les systèmes environnementaux développés sont le traitement de toiture végétalisée avec récupération des eaux de pluies, la mise en place de pompes
            à chaleur individuelles réversibles raccordées sur une boucle thermodynamique, un système de gestion technique centralisé.
        </p>
        <div class="auteur">
            <img class="auteur_img" src="img-content/TomNook.png">
            <p class="auteur_nom">Par Tom Nook, <span>journaliste l’architecture.com</span></p>
        </div>
    </div>
    <div class="autres_articles clearfix">
        <div class="border_ clearfix">
            <div class="border_right"></div>
            <p class="clearfix">ces articles peuvent aussi vous interesser</p>
            <div class="border_left"></div>
        </div>

        <?php require_once "../src/Class/NewsletterDao.php";

        $stock = new NewsletterDao();
        $stockLigne = $stock->selectAll();
        ?>
        <!-- Attention il faut redéfinir les classes !! -->
        <?php foreach ($stockLigne as $lagne) :?>
        <a href="article_actu.php?id=<?= $lagne['id'] ?>"><div class="could_interest">
            <img src="img-content/<?= $lagne['img'] ?>"></a>
            <p><span><?= $lagne['rubriques'] ?> :</span> <?= $lagne['realisations'] ?></p>
        </div>
        <?php endforeach; ?>

    </div>
</main>

<section class="newsletter">
    <div class="border_newsletter clearfix">
        <h2>Notre Newsletter</h2>
        <input type="text" name="Email" placeholder="Entrez votre adresse email">
    </div>
</section>

<!---------------------F O O T E R---------------------->

<?php require_once "footer.php";?>