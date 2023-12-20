<?php

echo $_GET['id'];

$host = 'localhost';
$db   = 'briefaftercolab';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass); 
    echo "Connected successfully";

    $stmt = $pdo->prepare("DELETE FROM tickets WHERE ticket_id = :id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
}catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}