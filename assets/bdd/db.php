<?php
$host = "localhost";
$dbname = "livreor";
$username = "root";  // Nom d'utilisateur par défaut pour XAMPP
$password = "";      // Mot de passe par défaut pour XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

