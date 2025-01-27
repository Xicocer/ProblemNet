<?php 

session_start();

function redirect(string $path) {
    header("Location: $path");
    die();
}

function getErrorMassage($fileName) {
    $value = $_SESSION['validation'][$fileName] ?? '';
    unset($_SESSION['validation'][$fileName]);
    echo $value;
}

function hasValidationError(string $fileName) {
    return isset($_SESSION['validation'][$fileName]);
}

function addValidationError(string $fileName, string $messege) {
    $_SESSION['validation'][$fileName] = $messege;
}

function addOldValue(string $key, $value) { // Changed from mixed to $value
    $_SESSION['old'][$key] = $value;
}

function old(string $key) {
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

?>