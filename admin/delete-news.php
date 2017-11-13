<?php
require 'config.php';
$id = $_GET['news-id'];
$sql = "DELETE FROM news WHERE id = $id";	
$query = $handler->prepare($sql);
$query->execute();
header('Location: ' . $_SERVER['HTTP_REFERER']);