<?php 

function listPages (){

	$pages = getData();

	$output = '';

	foreach ($pages as $page) {
		$output .= '<li><a href=>' . $page['title'] . '</a></li>';
	}
	return $output;
}

function singlePage(){


}

function savePage(){

	$title = $_POST['title'];
	$content = $_POST['content'];
}

function getData(){

	$json = file_get_contents('data.json');
	$data = json_decode($json, true);
	return $data;
}

function putData(){


}