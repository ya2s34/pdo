<?php

$dsn = "mysql:host=localhost;dbname=ma_collection_jeux;charset=utf8";
$username = "root"; //A changer si besoin
$password = "";//A changer si besoin

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}

?>