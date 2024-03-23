<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des Étudiants</h1>
    <?php
    // Database connection
    $serveur = "localhost";
    $utilisateur = "root";
    $motdepasse = "";
    $basededonnees = "ENSAM-CASA";
    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

    // Check connection
    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }

    // Fetch all records from Etudiant table
    $sql = "SELECT * FROM etudiant";
    $result = $connexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>CNE</th><th>Nom</th><th>Prénom</th><th>Âge</th><th>Date d'inscription</th><th>Adresse</th><th>Sexe</th><th>Moyenne</th><th>Action</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["cne"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["prenom"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["dateInscription"] . "</td>";
            echo "<td>" . $row["adresse"] . "</td>";
            echo "<td>" . $row["sexe"] . "</td>";
            echo "<td>" . $row["moyenne"] . "</td>";
            echo '<td><a href="modify_etudiant.php?cne=' . $row["cne"] . '">Modifier</a></td>';
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 résultats";
    }
    $connexion->close();
    ?>
</body>
</html>
