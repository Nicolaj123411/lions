<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>Velkommen til Lions</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	
	<?php
	require_once 'config/config.php';

		if (isset($_GET['page']) && file_exists(PAGE_ROUTE)) { 
			require_once PAGE_ROUTE;
		}elseif (!file_exists(PAGE_ROUTE) && isset($_GET['page'])){
			require_once PAGE_404;
		}else{
			require_once HOME;
		}	
	?>

	<script src="js/js.js"></script>
</body>
</html>