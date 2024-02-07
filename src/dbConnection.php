<?php
$servername = "mysql_db";
$username = "user";
$password = "test";
$dbname = "my_database";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

echo "Connexion à la base de données réussie";
