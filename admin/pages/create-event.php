<?php
$sql = "INSERT INTO users (username, password, permission) VALUES ('ssssss', 'password', '1')";
$query = $handler->prepare($sql);
if($query->execute()){
	echo "der er indsat i databasen!";
}else{
	echo "Det virkede ikke!";
}
?>	