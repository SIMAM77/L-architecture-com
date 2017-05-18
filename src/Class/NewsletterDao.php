<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 20:19
 */

require_once "Connect.php";

class NewsletterDao
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Bdd::getPdo();
    }

    public function uploadImg($file)

    {
        $targetDir = "/Applications/MAMP/htdocs/CRUD_SI/site/img-content/";
        if (isset($file['img']))
        {
            $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
            $extension = pathinfo($file['img']['name'], PATHINFO_EXTENSION);
            if (($file["img"]["type"] == "image/jpeg"
                || $file["img"]["type"] == "image/gif"
                || $file["img"]["type"] == "image/png")
                && $file["img"]["size"] < 100000
                && in_array($extension, $allowedExts))
            {
                if ($file["img"]["error"] > 0)
                {
                    throw new Exception($file["img"]["error"]);
                }
                else
                {
                    if (file_exists($targetDir . $file["img"]["name"]))
                    {

                    }
                    else
                    {
                        if (false === $returnedValue = move_uploaded_file($file["img"]["tmp_name"], $targetDir . $file["img"]["name"])                      )
                        {
                            throw new Exception($file["img"]["name"]);
                        }
                        else
                        {
                            if (!file_exists($targetDir . $file["img"]["name"]))
                            {

                            }
                        }

                    }
                }
            }
            else
            {

            }
            return $file["img"]["name"];
        }
    }


    public function select($id)
    {
        $sql = "SELECT 
	              id,
	              date,
	              nom_architectes,
	              realisations,
	              rubriques,
	              lieu,
	              departement,
	              img
                FROM
	              newsletter
                WHERE
                id = :id";

        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'id' => $id
        ]);
        return $requete->fetch();
       // return $dato;
       //return $requete->fetch();

    }


    public function selectAll()
    {
        $sql = "SELECT
	              id,
	              date,
	              nom_architectes,
	              realisations,
	              rubriques,
	              lieu,
	              departement,
	              img
                FROM
	              newsletter";

        $requete = $this->pdo->prepare($sql);
        $requete->execute();

        return $requete->fetchAll();
       // $data = $requete->fetchAll();
        //return $data;
    }

    public function insert($param)
    {
        $sql = "INSERT INTO newsletter(
	                date, nom_architectes, realisations,
	                rubriques, lieu, departement, img)
                VALUES
               (:date,:nom_architectes,:realisations,:rubriques, :lieu, :departement, :img)";


        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            ':date'            => $param['date'],
            ':nom_architectes' => $param['nom_architectes'],
            ':realisations'    => $param['realisations'],
            ':rubriques'       => $param['rubriques'],
            ':lieu'            => $param['lieu'],
            ':departement'     => $param['departement'],
            ':img'             => $param['img']
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM newsletter WHERE id = :id";
        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'id' => $id
        ]);
    }

    // update modifié par Souli selon le point de 18h avec Yann. à tester avec Base de données

    public function update($param)
    {
        $sql = "UPDATE
                newsletter
                SET
                date = :date,
                nom_architectes = :nom_architectes,
                realisations = :realisations,
                rubriques = :rubriques,
                lieu = :lieu,
                departement = :departement,
                img = :img
                WHERE
                id = :id";

        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'id'              => $param['id'],
            'date'            => $param['date'],
            'nom_architectes' => $param['nom_architectes'],
            'realisations'    => $param['realisations'],
            'rubriques'       => $param['rubriques'],
            'lieu'            => $param['lieu'],
            'departement'     => $param['departement'],
            'img'             => $param['img']
        ]);
    }
}

