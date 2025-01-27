<?php
include "../connect.php";

$sql = sprintf(
	"INSERT INTO `suspensions` (`name`, `post`, `adress`) VALUES('%s', '%s', '%s')",
	$_POST["name"],
	$_POST["post"],	
	$_POST["adress"]
);

if (!$connect->query($sql)) {
	die("Ошибка добавления данных: " . $connect->error);
} 

return header("Location:../form.php?message=Успешно");