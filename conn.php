<?php
$host="localhost";
$db="auth_book";
$user="root";
$password="";
$dsn ="mysql:host=$host;dbname=$db;charset=UTF8";

try {
    return new PDO($dsn,$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}catch(PDOException $e) {
    echo $e->getMessage();
}