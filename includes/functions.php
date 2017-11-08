<?php

function listPages()
{
	$pages = getData();

	$output = '';

	foreach($pages as $id => $page)
	{
		$output .='<li><a href="?id='. $id . '">' . $page['title'] . '</a></li>';
	}

	return $output;

}

function singlePage()
{
	$id =0;

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}

	$pages = getData();
	return $pages[$id];
}

function savePage()
{
	$title = $_POST['title'];
	$content = $_POST['content'];

	$data= [
		'title'=> $title,
		'content' => $content
	];
	$pages = getData();
	$pages[] = $data;

	putData($pages);
}

function updatePage()
{
	$title = $_POST['title'];
	$content = $_POST['content'];

	$data= [
		'title'=> $title,
		'content' => $content
	];

	$id = $_GET['id'];

	$pages = getData();
	$pages[$id] = $data;

	putData($pages);
}

function getData()
{
	$json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/lions/json/json.json');
	$data = json_decode($json, true);
	return $data;
}

function putData($pages)
{
$json = json_encode($pages);
file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/lions/json/json.json', $json);
}