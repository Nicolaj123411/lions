<?php
//SIDER
define('HOME', 'pages/forside.php');
define('PAGE_ROUTE', 'pages/' . $_GET['page'] . '.php');
define('PAGE_404', 'pages/404.php');

//SETTING DATABASE LOGIN
 try {
	$handler = new PDO('mysql:host=localhost;dbname=lions', 'root', 'root');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Fanger fejl og DIE efter fejlen er outputtet.
} catch (PDOExeption $e) {
	echo $e->getMessage();
	die();
}