<?php

require "../src/fuctions.php";
require '../connect.php';

$email = $_POST['email'] ?? null;
$name = $_POST['name'] ?? null;

$_SESSION['validation'] = [];

addOldValue('name', $name);
addOldValue('email',$email);

if (empty($name)){
    addValidationError('name', 'Неверное имя');
}

if (!empty($_SESSION['validation'])){
    redirect('../index.php');
}

if (empty($name)){
    echo 'Название организации отсутствует';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    addValidationError('email', 'Указана неправильная почта '); 
}

$query = "INSERT INTO `application` (`id`, `email`, `name`) VALUES ('', '$email', '$name') ";

mysqli_query($connect,$query) or die (mysqli_error('Ошибка подключения'));

header('Location:http://user9195.royal-hosting.ru/login.php');