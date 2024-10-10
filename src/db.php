<?php

$servername = "bffdzpw3xje4vdtqxarn-mysql.services.clever-cloud.com";
$username = "uaycbbbfc71gubam";
$password = "XswspZv1gRXDDv0joCw1";
$dbname = "bffdzpw3xje4vdtqxarn";
$port = "3306";

$conn = new mysqli(
    $servername, 
    $username, 
    $password, 
    $dbname, 
    $port
);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}