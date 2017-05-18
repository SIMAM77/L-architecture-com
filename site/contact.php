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

<main id="page-contact">
    <div class="formulaire-contact clearfix">

        <h2>Contact</h2>
        <h3>N’hésitez pas à nous contacter en remplissant le formulaire ci-dessous</h3>

        <form class="contact-form clearfix" action="" method="post" class="clearfix">
            <fieldset class="right">
                <div class="champ">
                    <label for="prénom nom">Prénom Nom</label>
                    <input type="text" name="prénom nom" id="prénom nom">
                </div>
                <div class="champ">
                    <label for="société">Société</label>
                    <input type="text" name="société" id="société">
                </div>
                <div class="champ">
                    <label for="email">Email<sub>*</sub></label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="champ">
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" id="telephone">
                </div>
            </fieldset>

            <fieldset class="left">
                <div class="champ">
                    <label for="message">Votre message</label>
                    <input type="text" name="message" id="message">
                </div>
            </fieldset>
        </form>

        <div class="soumettre"><input type="submit" value="Soumettre" /></div>


    </div>

    <div class="map-contact clearfix">
        <figure class="map">
            <img src="img-content/map.png">
        </figure>
        <div class="contact-architecture">
            <p><img src="img-layout/home.svg">9/11, rue Jaquard 93315 Le Pré Saint Gervais</p>
            <p><img src="img-layout/phone.svg">+33 (1) 49 91 93 99</p>
            <p><img src="img-layout/mail.svg">architecturemag@gmail.com</p>
        </div>
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
