<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 16/05/2017
 * Time: 20:12
 */

require_once "../Class/NewsletterDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();





$News = new NewsletterDao();

$News->delete($_GET['id']);

header("Location: Newsindex.php");
exit();