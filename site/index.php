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
    <!------------BACKGROUND-----------(n'apparait pas sur toutes les pages)-->
    <div class="background_home_containerHeader">

<?php require_once "header.php";?>

    <!---------------------MAIN---------------------->
    <main id="scroll">
      <div class="container_magazine clearfix">
        <div class="border"></div>
        <div class="last_magazine">
            <?php require_once "../src/Class/RevuesDao.php";

            $stack = new RevuesDao();
            $stackLigne = $stack->select(1);
            //              var_dump($stock); ?>
          <h2><?= $stackLigne['numero'] ?></h2>


          <a href="#"><img class="arrow_left" src="img-layout/arrow-left.svg" alt="fleche_suivante" title="next"></a>
          <div class="acheter_abonner">
            <a href="commander_abonner.php"><span class="acheter">Acheter ce numéro</span></a>
            <a href="commander_abonner.php"><span class="abonner">S’abonner</span></a>
          </div>
          <figure class="couverture_number clearfix">
            <img src="img-content/magazine.png" alt="couverture du magazine">
            <figcaption><?= $stackLigne['annee'] ?></figcaption>
          </figure>
        </div>

      </div>

      <!---------MOBILE-------->
      <section class="mobile_derniere_actu">
        <h2 class="titre_derniere_actu">Les dernières actualités.</h2>
        <img src="img-content/building_nuit.png" alt="building de nuit">
        <p>Projet Astral - Construction d’un ensemble de bureux au Plessis Robinson (92)</p>
        <span><a href="">Découvrir</a></span>

        <img src="img-content/architecture_gris.jpg" alt="architecture_gris">
        <p>Construction du nouveau siège social de la C.A.F. du Gars (30) </p>
        <span><a href="">Découvrir</a></span>

        <img src="img-content/architecture.png" alt="architecture">
        <p>Construction de la délégation régionale du CNFPT à Poitiers (86)</p>
        <span><a href="">Découvrir</a></span>

      </section>
      <section class="mobile_notre_histoire">
        <h2>Notre histoire</h2>
        <p>Depuis 1990, la revue "L'Architecture de votre région" propose un panorama détaillé de l'architecture d'une région, d'un territoire ou d'un pays.</p>
        <div class="voir_plus"><a href="#">Voir plus</a><img src="img-layout/CTA.png" alt=""></div>
      </section>
      <section class="mobile_notre_concept">
        <h2>Le concept.</h2>
        <p>Véritable vitrine de la création architecturale d'une région ou d'un pays, elle est réalisée avec le concours des architectes représentatifs de la construction, du bâtiment, de l'urbanisme, de l'environnement et de l'aménagement du territoire.
        </p>
        <div class="voir_plus"><a href="#">Voir plus</a><img src="img-layout/CTA.png" alt=""></div>
      </section>
      <!----------------------->



      <section class="notre_histoire clearfix">
        <h2>Notre histoire.</h2>
        <div class="paragraphe_notreHistoire">
          <p>Depuis 1990, la revue "L'Architecture de votre région" propose un panorama détaillé de l'architecture d'une région, d'un territoire ou d'un pays. Les sondages réalisés attestent de sa durée de vie et par son aspect référentiel, de sa fréquente
            consultation. Une part prépondérante est laissée à "l'image" - le soin apporté aux reproductions photographiques est la garantie d'une attention particulière des lecteurs. La revue "L'Architecture de votre région" est le témoignage des hommes
            qui construisent aujourd'hui. Elle constitue ainsi la vitrine de leur création. Par sa diffusion ciblée, c'est aussi un support d'une exceptionnelle efficacité et porteur d'image pour tous les partenaires rédacteurs, entreprises, institutionnels
            et sociétés qui y participent.</p>
        </div>
        <img src="img-content/daniel-lozano-valdes.jpg" alt="daniel-lonazo">
      </section>
      <section class="le_concept clearfix">
        <h2>Le concept.</h2>
        <div class="container_paragraphe clearfix">
          <div class="paragraphe_approche">
            <h3>Une approche régionale</h3>
            <p>Véritable vitrine de la création architecturale d'une région ou d'un pays, elle est réalisée avec le concours des architectes représentatifs de la construction, du bâtiment, de l'urbanisme, de l'environnement et de l'aménagement du territoire.
              Pour chaque architecte volontaire et dans chaque région, un reportage complet est publié avec son logo, ses coordonnées, sa raison sociale, 3 à 4 photos par réalisation et un rédactionnel détaillé auxquels s'ajoute une fiche technique comprenant
              maâtre d'ouvrage, maître d'œuvre, surface, durée, coût des travaux, entreprises, fabricants et fournisseurs utilisés.</p>
          </div>
          <div class="paragraphe_presence">
            <h3>Une présence régionale, nationale et international</h3>
            <p>Ce travail de fourmis permet de présenter l'actualité architecturale en région. Chaque revue devient donc un véritable outil de travail pour les professionnels de l'architecture et de la construction appartenant ou non à la région concernée
(architectes, bureaux d'études, bureaux d'ingénierie, professionnels du BTP, conseils régionaux, généraux, mairies, HLM, SEM, Préfectures, DDE, promoteurs, CCI, PME-PMI). Ainsi, la revue est une vitrine pour chaque architecte, quelle que
              soit sa taille et sa situation géographique. De même, l'annonceur peut définir l'étendue de sa campagne : la limiter à une seule région, l'étendre à plusieurs régions ou à un pays. En effet, la présence de la revue dépasse le cadre hexagonal.
              En Outre-mer, la Martinique, la Guadeloupe, la Réunion et la Guyane. En Europe, la Belgique et la Suisse. Sur le site www.larchitecture.com accédez à la plus grande base d'appels d'offres franûais et internationaux, publics et privés. Vous
              pouvez consulter les offres par zones géographiques, types de marché, savoir-faire, matières travaillées, etc. Ce site a pour ambition de devenir le site portail de l'architecture et de la construction.</p>
          </div>
        </div>
        <img class="noir_blanc" src="img-layout/concept01.jpg" alt="illustration concept 1">
        <img class="ciel" src="img-layout/concept02.jpg" alt="illustration concept 2">
      </section>
      <section class="dernirere_actu clearfix">
        <h2>Les<br>	dernières actualités.</h2>
        <div class="news_container">
            <?php require_once "../src/Class/NewsletterDao.php";

            $stock = new NewsletterDao();
            $stockLigne = $stock->selectAll();
            //              var_dump($stock); ?>

          <?php
          $count = 0;
          while($count < 3) :
          $ligne = $stockLigne[$count];
          ?>



          <div class="news">


            <img src="img-content/<?= $ligne['img'] ?>" alt="<?= $ligne['rubriques'] ?>">
            <p><?= $ligne['realisations'] ?></p>
            <a href=""><span>Découvrir</span></a>

          </div>
            <?php
            $count++;
          endwhile; ?>




        </div>
        <div class="border_actu"></div>
      </section>
      <section class="newsletter">
        <div class="border_newsletter clearfix">
          <h2>Notre Newsletter</h2>
          <input type="text" name="Email" placeholder="Entrez votre adresse email">
        </div>
      </section>
    </main>

        <?php require_once "footer.php";?>
