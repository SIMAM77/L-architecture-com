<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 21:44
 */
require_once "Connect.php";

class ClientsDao
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Bdd::getPdo();
    }

    public function select($id)
    {
        $sql = "SELECT
	               id,
	               raison_sociale,
	               activites,
	               nom,
	               prenom,
	               fonction,
	               adresse,
	               code_postal,
	               ville,
	               pays,
	               telephone,
	               fax,
	               email,
	               destination,
	               statut
                FROM 
	              clients
                WHERE
                id = :id";

        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'id' => $id
        ]);
        return $requete->fetch();
    }

    public function selectAll()
    {
        $sql = "SELECT
	               id,
	               raison_sociale,
	               activites,
	               nom,
	               prenom,
	               fonction,
	               adresse,
	               code_postal,
	               ville,
	               pays,
	               telephone,
	               fax,
	               email,
	               destination,
	               statut
                FROM
	              clients";

        $requete = $this->pdo->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    // insert modifié par Souli selon le point de 18h avec Yann. à tester avec Base de données

    public function insert($param)
    {
        $sql = "INSERT INTO clients(
	                  raison_sociale, activites,
	                  nom, prenom, fonction, adresse,
	                  code_postal, ville, pays, telephone,
	                  fax, email, destination, statut)
                VALUES
                 (:raison_sociale,:activites,:nom,:prenom,:fonction,:adresse,:code_postal,:ville,:pays,:telephone,:fax,:email,:destination, :statut)";


        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'raison_sociale'  => $param['raison_sociale'],
            'activites'       => $param['activites'],
            'nom'             => $param['nom'],
            'prenom'          => $param['prenom'],
            'fonction'        => $param['fonction'],
            'adresse'         => $param['adresse'],
            'code_postal'     => $param['code_postal'],
            'ville'           => $param['ville'],
            'pays'            => $param['pays'],
            'telephone'       => $param['telephone'],
            'fax'             => $param['fax'],
            'email'           => $param['email'],
            'destination'     => $param['destination'],
            'statut'          => $param['statut']
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM clients WHERE id = :id";
        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'id' => $id
        ]);

    }

    public function update($param)
    {
        $sql = "UPDATE
	               clients
                SET 
	              raison_sociale = :raison_sociale,
	              activites = :activites,
	              nom = :nom,
	              prenom = :prenom,
	              fonction = :fonction,
	              adresse = :adresse,
	              code_postal = :code_postal,
	              ville = :ville,
	              pays = :pays,
	              telephone = :telephone,
	              fax = :fax,
	              email = :email,
	              destination = :destination,
	              statut = :statut
                WHERE
                  id = :id";

        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'id'              => $param['id'],
            'raison_sociale'  => $param['raison_sociale'],
            'activites'       => $param['activites'],
            'nom'             => $param['nom'],
            'prenom'          => $param['prenom'],
            'fonction'        => $param['fonction'],
            'adresse'         => $param['adresse'],
            'code_postal'     => $param['code_postal'],
            'ville'           => $param['ville'],
            'pays'            => $param['pays'],
            'telephone'       => $param['telephone'],
            'fax'             => $param['fax'],
            'email'           => $param['email'],
            'destination'     => $param['destination'],
            'statut'          => $param['statut']
        ]);
    }
}
