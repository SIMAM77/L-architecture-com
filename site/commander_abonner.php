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

<!---------------------H E A D E R---------------------->
<?php require_once "header2.php";?>



<main id="formulaire">
    <h2 class="main_title">
        Je souhaite
        <!-- <span class="commander-revue">
          commander une revue
          <img src="img-layout/arrow-blue.png" alt="fleche">
        </span>
        <span class="abonnement-revue">
          m'abonner
        </span> -->
        <form class="global-form" id="commander-abonnement-form">
            <div class="box">
                <div class="label-alone">
                    <input type="radio" name="radio" id="commander" class="css-radio" />
                    <label for="commander" class="css-label"><span>commander une revue</span></label>
                    <br/>
                </div>
                <div class="label-alone">
                    <input type="radio" name="radio" id="abonnement" class="css-radio" />
                    <label for="abonnement" class="css-label"><span>m'abonner</span></label>
                    <br/>
                </div>
            </div>
        </form>
    </h2>

    <?php

    /**
     * Created by PhpStorm.
     * User: benchaa
     * Date: 17/05/2017
     * Time: 09:28
     */

    require_once "../src/Class/ClientsDao.php";


    $News = new ClientsDao();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $News->insert($_POST);

        header("Location: commander_abonner.php");
    }

    ?>

    <form method="post" action="" class="clearfix">
        <fieldset class="right">

            <div class="champ">
                <label for="nom">Nom<SUB>*</SUB></label>
                <input type="text" name="nom" id="nom" placeholder="Durand">
            </div>

            <div class="champ">
                <label for="prenom">Prenom<SUB>*</SUB></label>
                <input type="text" name="prenom" id="prenom" placeholder="Pierre">
            </div>

            <div class="champ">
                <label for="adresse">Adresse<SUB>*</SUB></label>
                <input type="text" name="adresse" id="adresse" placeholder="123 rue de l'Elysée">
            </div>

            <div class="champ">
                <label for="ville">Ville<SUB>*</SUB></label>
                <input type="text" name="ville" id="ville" placeholder="Paris">
            </div>

            <div class="champ">
                <label for="code_postal">Code postal <SUB>*</SUB></label>
                <input type="number" name="code_postal" id="code_postal" placeholder="75008">
            </div>

            <div class="champ">
                <label for="pays">Pays<SUB>*</SUB></label>
                <input type="text" name="pays" id="pays" placeholder="France">
            </div>

            <div class="champ">
                <label for="email">Email <SUB>*</SUB></label>
                <input type="email" name="email" id="email" placeholder="francoisdurand@mail.com">
            </div>



        </fieldset>
        <fieldset class="left">

            <div class="champ">
                <label for="telephone">Téléphone (+33)<SUB>*</SUB></label>
                <input type="tel" name="telephone" id="telephone" placeholder="612345678">
            </div>

            <div class="champ">
                <label for="fax">Fax</label>
                <input type="tel" name="fax" id="fax">
            </div>

            <div class="champ">
                <label for="raison_sociale">Raison sociale</label>
                <input type="text" name="raison_sociale" id="raison_sociale" placeholder="Entreprise">
            </div>

            <div class="champ">
                <label for="activites">Activité</label>
                <input type="text" name="activites" id="activite">
            </div>

            <div class="champ">
                <label for="fonction">Fonction</label>
                <input type="text" name="fonction" id="fonction">
            </div>

            <div class="champ">
                <label for="destination">Secteur géographique</label>
                <select class="" name="destination" id="pays">
                    <option value="france">France</option>
                    <option value="dom">DOM</option>
                    <option value="tom">TOM</option>
                    <option value="suisse">Suisse</option>
                    <option value="europe">Europe</option>
                </select>
            </div>

            <div class="champ">
                <label for="quantite">Quantité</label>
                <input type="number" name="quantite" id="quantite" value="1">
            </div>

            <div class="champ">
                <label for="numero">Numéro de la revue</label>
                <input type="number" name="numero" id="numero" value="285">
            </div>

        </fieldset>
    </form>

    <?php require_once "../src/Class/RevuesDao.php";

    $stock = new RevuesDao();
    $stockLigne = $stock->select(1);
    // Penser à mettre $_GET['id'] et renvoyer l'id dans l'URL


    ?>
    <div class="exemple_container">
        <h2>Prévisualisation de la revue</h2>
        <img src="img-content/<?= $stockLigne['img'] ?>" alt="previsualisation de la revue" title="previsualisation" class="previsualisation">
    </div>
    <div class="tarifs clearfix">


        <div class="container_tarif clearfix">
            <h2 class="tarifs_title">Tarif en <span>euros</span></h2>
            <div class="tarif_euro clearfix">
                <div class="case first_case">
                    <p>Quantité
                    <p/>
                    <div>
                        <p class="quantite">5</p><img src="img-layout/arrow-blue.png" alt="fleche"></div>
                </div>
                <div class="case">
                    <p>France
                    <p>
                        <div class="nombre">
                    <p class="prix">75€</p>
                    <p class="frais_de_port">+ 15€ de frais de port</p>
                </div>
            </div>
            <div class="case">
                <p>DOM
                <p>
                    <div class="nombre">
                <p class="prix">75€</p>
                <p class="frais_de_port">+ 30€ de frais de port</p>
            </div>
        </div>
        <div class="case">
            <p>TOM
            <p>
                <div class="nombre">
            <p class="prix">75€</p>
            <p class="frais_de_port">+ 40€ de frais de port</p>
        </div>
    </div>
    <div class="case">
        <p>Europe
        <p>
            <div class="nombre">
        <p class="prix">75€</p>
        <p class="frais_de_port">+ 30€ de frais de port</p>
    </div>
    </div>
    </div>
    </div>

    <div class="container_suisse clearfix">
        <h2 class="tarifs_title franc">Tarif en <span>franc suisse</span></h2>
        <div class="tarif_euro clearfix suisse">
            <div class="case first_case">
                <p>Quantité
                <p/>
                <div>
                    <p class="quantite">5</p><img src="img-layout/arrow-blue.png" alt="fleche"></div>
            </div>
            <div class="case">
                <p>France
                <p>
                    <div class="nombre">
                <p class="prix">75€</p>
                <p class="frais_de_port">+ 15€ de frais de port</p>
            </div>
        </div>
        <div class="case">
            <p>DOM
            <p>
                <div class="nombre">
            <p class="prix">75€</p>
            <p class="frais_de_port">+ 30€ de frais de port</p>
        </div>
    </div>
    <div class="case">
        <p>TOM
        <p>
            <div class="nombre">
        <p class="prix">75€</p>
        <p class="frais_de_port">+ 40€ de frais de port</p>
    </div>
    </div>
    <div class="case">
        <p>Europe
        <p>
            <div class="nombre">
        <p class="prix">75€</p>
        <p class="frais_de_port">+ 30€ de frais de port</p>
    </div>
    </div>
    </div>
    </div>
    <div class="soumettre"><input type="submit" value="Soumettre" /></div>
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
