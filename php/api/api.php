<?php

require_once "../database.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

if (isset($uri[2]) && $uri[2] == 'users') {
  $test = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($test);
  exit();
}

?>