<?php
	$host = 'localhost';
	$db = 'ucl_database';
	$user = 'root';
	$pass = 'root';
	$charset = 'utf8';
	
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$options = [PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_EMULATE_PREPARES => false
	];
	$pdo = new PDO($dsn, $user, $pass, $options);
?>