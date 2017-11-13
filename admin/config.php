<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Configs
define("HOST", "127.0.0.1");
define("USER", "root");
define("PASS", "root");
define("NAME", "test");
//SIDER
if(isset($_GET['admin_page'])){
	$admin_page = $_GET['admin_page'];
}else{
	$admin_page = '';
}
define('HOME', 'pages/forside.php');
define('PAGE_ROUTE', 'pages/' . $admin_page . '.php');
define('PAGE_404', 'pages/404.php');

//DB CONNECTION

try {
	$handler = new PDO('mysql:host=localhost;dbname=lions', 'root', 'root');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Fanger fejl og DIE efter fejlen er outputtet.
} catch (PDOExeption $e) {
	echo $e->getMessage();
	die();
}
