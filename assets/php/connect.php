<?php define("HOST", "localhost:3306");
	define("USER", "root");
	define("PASSWORD", "");
	define("DATABASE", "3dmodels");

	$connect = new mysqli(HOST,USER,PASSWORD,DATABASE);

	if ($connect->connect_errno) {
	die('Ошибка соединения: ' . $connect->connect_errno);
	}
?>