<?php
session_start();
session_unset();
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 16:05
 */


//sert à detruire les cookies dans la session
if (ini_get("session.use_cookies"))
{
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
header('Location: Connexion.php');
exit();
