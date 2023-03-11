<?php

$dsn = 'mysql:dbname=elite_auto_selection;host=localhost';
$user = 'root';
$password = '';

try {
	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "PDO error" . $e->getMessage();
	die();
}
?>
