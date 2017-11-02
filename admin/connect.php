<?php
// Connect to database
try {
  $db = new PDO("mysql:host=".HOST.";dbname=".NAME.";charset=utf8", "".USER."", "".PASS."");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // PDO fetch docs: http://php.net/manual/en/pdostatement.fetch.php
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo $e->getMessage();
}