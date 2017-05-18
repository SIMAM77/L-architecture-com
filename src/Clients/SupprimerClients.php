<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 16/05/2017
 * Time: 20:12
 */

require_once "../Class/ClientsDao.php";
require_once "../Class/CheckAuth.php";
$auth = new CheckAuth();
$auth->check();

$News = new ClientsDao();

$News->delete($_GET['id']);

header("Location: Clientsindex.php");
exit();