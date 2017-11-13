<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Velkommen til Lions</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<?php
		include 'includes/footer.php';
	?>
	
	<script src="js/js.js"></script>

</body>
</html>