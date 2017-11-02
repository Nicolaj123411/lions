<?php

//Opret forbindelse til databasen med PDO 
//Der kan nemt skiftes database ved at ændre MYSQL HOST og DBNAME
try {
	$handler = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Fanger fejl og DIE efter fejlen er outputtet.
} catch (PDOExeption $e) {
	echo $e->getMessage();
	die();
}

/*
//Få resultat fra databasen
$query = $handler->query('SELECT * FROM users');

//Eksempel 1 med array. 
// 	r er for row. 
while ($r = $query->fetch()) {
	echo 'Username: ' . $r['username'] . '<br>';
}
*/

///////////////////////////////////////////////////////////////
/*
//Eksempel 2  med 
$query = $handler->query('SELECT * FROM users');

while ($r = $query->fetch(PDO::FETCH_OBJ)) {
	echo $r->password . '<br>';
}
*/
/////////////////////////////////////////////////////////////////
//Eksemepl 3 med CLASS

/*
class usernameList {
	public $id, $username, $password, $entry;

	public function __construct(){
		$this->entry = "{$this->username} Har koden: {$this->password}";
	}
}

$query = $handler->query('SELECT * FROM users');
$query->setFetchMode(PDO::FETCH_CLASS, 'usernameList');
while ($r = $query->fetch()) {
	echo $r->entry, '<br>';
}
*/
////////////////////////////////////////////////////////////////
//Fetch all data

/*
$query = $handler->query('SELECT * FROM users');


$results = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($results)) {
	echo "Der er resultat";
} else {
	echo "Der er ikke resultat";
}
*/


/////////////////////////////////////////////////////////////
/*
//Indsæt fra user med forberedt data
$username = 'Lenes';
$password = 'Jensen';

$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$query = $handler->prepare($sql);

$query->execute(array(
	':username' => $username,
	':password' => $password
));
*/
////////////////////////////////////////////////////////////
/*
//Sidst indsat id
echo $handler->lastInsertId();


//////////////////////////////////////////////////////////////
//ROW count

/*
$query = $handler->query('SELECT * FROM users LIMIT 0');
if($query->rowCount()){
	while ($r = $query->fetch(PDO::FETCH_OBJ)) {
		echo $r->username, '<br>';
	}
}else{
	echo "No results";
}


*/













