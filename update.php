<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votre_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données envoyées depuis le client
$nomf = $_POST['nomf'];
$col = $_POST['col'];
$value = $_POST['value'];

// Préparer la requête SQL
$sql = "UPDATE administrateur SET $col = '$value' WHERE nomf = '$nomf'";

// Exécuter la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
