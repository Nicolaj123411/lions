<?php 

$time = date ('G');

if($time < 5){
	echo "Sleep whell";
}elseif ($time < 10){
	echo "Good Morning";
}elseif($time < 12){
	echo "Good Later Morning";
}else{
	echo "Whatever";
 }
 ?>
