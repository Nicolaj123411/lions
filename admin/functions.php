<?php
// Simple function to handle PDO prepared statements
function sql($db, $q, $params, $return) {
  // Prepare statement
  $stmt = $db->prepare($q);
  // Execute statement
  $stmt->execute($params);
  // Decide whether to return the rows themselves, or just count the rows
  if ($return == "rows") {
    return $stmt->fetchAll();
  }
  elseif ($return == "count") {
    return $stmt->rowCount();
  }
}