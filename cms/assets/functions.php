<?php 

function listPages (){


}

function singlePage(){


}

function savePage(){

	$title = $_POST['title'];
	$content = $_POST['content'];
}

function getData(){

	$json = file_get_contents('data.json', true);
	$data = json_decode($json);
	return $data;
}

function putData(){


}