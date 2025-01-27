<?php
$connect = new mysqli("127.0.0.1", "hapat", "123123AzAz", "ufanet");

$connect->set_charset("utf8");

if ($connect->connect_error)
	die("Ошибка подключения: " . $connect->connect_error);
