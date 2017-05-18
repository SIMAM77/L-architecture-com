<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 22:11
 */

require_once "Connect.php";

class RevuesDao
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
	            numero,
	            annee,
	            regions,
	            img,
	            lien_calameo
                FROM
	            revues
                WHERE
	            id =  :id";

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
	            numero,
	            annee,
	            regions,
	            img,
	            lien_calameo
                FROM
	            revues";

        $requete = $this->pdo->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function insert($param)
    {
        $sql = "INSERT INTO revues(
	            numero, annee, regions,
	            img, lien_calameo)
                VALUES
	            (:numero,:annee,:regions,:img,:lien_calameo)";


        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'numero'       => $param['numero'],
            'annee'        => $param['annee'],
            'regions'      => $param['regions'],
            'img'          => $param['img'],
            'lien_calameo' => $param['lien_calameo']
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM revues WHERE id = :id";
        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'id' => $id
        ]);

    }

    public function update($param)
    {
        $sql = "UPDATE
	              revues
                SET
	              numero = :numero,
	              annee = :annee,
	              regions = :regions,
	              img = :img,
	              lien_calameo = :lien_calameo
                WHERE
                  id = :id";


        $requete = $this->pdo->prepare($sql);
        $requete->execute([
            'id'           => $param['id'],
            'numero'       => $param['numero'],
            'annee'        => $param['annee'],
            'regions'      => $param['regions'],
            'img'          => $param['img'],
            'lien_calameo' => $param['lien_calameo']
        ]);
    }
}