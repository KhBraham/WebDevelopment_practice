<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=ensam-casa;charset=utf8', 'root', '');
    echo "<div class='title'><h2>la connexion a ete etablie!</h2></div>";
} catch (PDOException $error) {
    echo "<h2>la connexion a echoué : " . $error->getMessage() . "</h2>";
}

if (isset($_POST['enregister'])) {
    $cne = $_POST['cne'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $dateInscription = $_POST['dateInscription'];
    $adresse = $_POST['adresse'];
    $sexe = $_POST['sexe'];
    $moyenne = $_POST['moyenne'];
    try {
        $sql = "INSERT INTO etudiant (CNE, Nom, Age, DateInscription, Adresse, Sexe, Moyenne)" . 
            " VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(1, $cne);
        $stmt->bindParam(2, $nom);
        $stmt->bindParam(3, $age);
        $stmt->bindParam(4, $dateInscription);
        $stmt->bindParam(5, $adresse);
        $stmt->bindParam(6, $sexe);
        $stmt->bindParam(7, $moyenne);
        $stmt->execute();
        echo "the data inserted successfully!";
    }catch (PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM etudiant WHERE CNE = ?";
    $cne = $_POST['cne'];
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(1, $cne);
        $stmt->execute();
        echo "Data deleted successfully!";
    } catch (PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
}

if (isset($_POST['update'])) {
    $sql = "UPDATE etudiant SET Nom = ?, Prenom = ?, Age = ?, DateInscription = ?, Adresse = ?, Sexe = ?, Moyenne = ? WHERE CNE = ?";
    $cne = $_POST['cne'];
    $newNom = $_POST['nom'];
    $newPrenom = $_POST['prenom'];
    $newAge = $_POST['age'];
    $newDateInscription = $_POST['dateInscription'];
    $newAdresse = $_POST['adresse'];
    $newSexe = $_POST['sexe'];
    $newMoyenne = $_POST['moyenne'];
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(8, $cne);
        $stmt->bindParam(1, $newNom);
        $stmt->bindParam(2, $newPrenom);
        $stmt->bindParam(3, $newAge);
        $stmt->bindParam(4, $newDateInscription);
        $stmt->bindParam(5, $newAdresse);
        $stmt->bindParam(6, $newSexe);
        $stmt->bindParam(7, $newMoyenne);
        $stmt->execute();
        echo "Data updated successfully";
    } catch (PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
}

$stmt = null;
$db = null;
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Étudiant</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class='title'>
        <h1>Formulaire Étudiant</h1>
    </div>
    <form action="" method="post">
        <label for="cne">CNE :</label>
        <input type="number" id="cne" name="cne" required><br><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" maxlength="25" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" maxlength="25" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="dateInscription">Date d'inscription :</label>
        <input type="datetime-local" id="dateInscription" name="dateInscription" required><br><br>

        <label for="adresse">Adresse :</label>
        <textarea id="adresse" name="adresse" rows="4" cols="50"></textarea><br><br>

        <label for="sexe">Sexe :</label>
        <select id="sexe" name="sexe" required>
            <option value="M">Masculin</option>
            <option value="F">Féminin</option>
        </select><br><br>

        <label for="moyenne">Moyenne :</label>
        <input type="number" id="moyenne" name="moyenne" step="0.01" required><br><br>

        <input type="submit" name="enregister" value="Envoyer"><br>
        <input type="submit" name="delete" value="Supprimer"><br>
        <input type="submit" name="update" value="Modifier"><br>
        
    </form>
</body>
</html>
