<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 17/05/2017
 * Time: 18:13
 */
class CheckAuth
{
    /**
     * CheckAuth constructor.
     */
    public function __construct()
    {
        session_start();
        return $this;
    }

    public function check()
    {
        if (!isset($_SESSION["pseudo"]))
        {
            header("Location: Connexion.php");
        }
    }
}