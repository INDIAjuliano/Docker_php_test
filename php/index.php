<!-- ./php/index.php -->

<html>
    <head>
        <title>Hello World</title>
    </head>

    <body>
    <?php
$servername = "db";  // Le nom du service MySQL dans Docker Compose
$username = "devuser";
$password = "devpass";
$dbname = "test_db";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
} else {
    echo "Connexion à la base de données réussie!";
}

// Vous pouvez maintenant exécuter vos requêtes MySQL ici

// Fermer la connexion à la base de données lorsque vous avez terminé
$conn->close();
?>

    </body>
</html>