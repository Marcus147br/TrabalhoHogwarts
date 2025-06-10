<?php
$host = 'localhost';
$db = 'hogwarts';
$user = 'root';
$pass = ''; // ajuste conforme necessário

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>