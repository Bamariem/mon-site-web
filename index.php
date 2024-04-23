<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients acceptés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "inscription";

$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Requête SQL pour sélectionner les demandes acceptées
$query_demandes_acceptees = "SELECT * FROM client WHERE status='acceptee'";
$result_demandes_acceptees = mysqli_query($connexion, $query_demandes_acceptees);

// Affichage de la liste des clients acceptés
echo "<h1>Liste des clients acceptés</h1>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Email</th><th>Profession</th><th>Choix de formation</th></tr>";
while ($row = mysqli_fetch_assoc($result_demandes_acceptees)) {
    echo "<tr>";
    echo "<td>{$row['nom']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['prof']}</td>";
    echo "<td>{$row['choix']}</td>";
    echo "</tr>";
}
echo "</table>";

// Fermer la connexion
mysqli_close($connexion);
?>

</body>
</html>
