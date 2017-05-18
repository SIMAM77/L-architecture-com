<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 14:45
 */
require_once "Connect.php";

class Connexion
{
    private $pseudo;
    private $pass;
    private $bdd;

    public function __construct($pseudo, $pass)
    {


        $this->setPseudo(htmlentities($pseudo));
        $this->setPass(htmlentities($pass));
        $this->bdd = Bdd::getPdo();

}

    public function verif()
    {

        $requete = $this->bdd->prepare("SELECT pseudo, pass FROM users WHERE pseudo = :pseudo");

        $requete->execute([
            'pseudo' => $this->pseudo]);

        $reponse= $requete->fetch();
        if($reponse)
        {
            if($_POST['pass'] === $reponse['pass'])
            {
                return "ok";
            }
            else
            {
                return "Mot de passe incorrect";
            }
        }
        else
        {
            return "Le pseudo est inexistant";
        }

    }

    public function session()
    {
        $sql = "SELECT id FROM users WHERE pseudo = :pseudo";
        $requete = $this->bdd->prepare($sql);
        $requete->execute([
            'pseudo'=> $this->pseudo]);
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['pseudo'] = $this->pseudo;

        return 1;
    }
    /*===============================getter `et setter================================*/
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }
}


