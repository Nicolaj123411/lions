<?php
require 'config.php';
$description = $_GET['desc'];
$id = $_GET['id'];
$title = $_GET['headline'];
$sql = "UPDATE news SET title='$title',`content`='$description' WHERE id=$id";
$query = $handler->prepare($sql);
$query->execute();
header('Location: ' . $_SERVER['HTTP_REFERER']);
