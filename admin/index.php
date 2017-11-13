<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="admin-body">
	<div class="wrapper">
	<section class="main-content flex">
	
<?php
	require_once 'config.php';
	include 'includes/functions.php';
	include 'includes/menu.php';
?>
<section id="main-area"><?php
		if (isset($_GET['admin_page'])) { 
			require PAGE_ROUTE;
		}elseif (!file_exists(PAGE_ROUTE) && isset($_GET['admin_page'])){
			require_once PAGE_404;
		}else{
			require_once HOME;
		}	
	?>
	
	</section>
</section>
	</div>
</body>
</html>