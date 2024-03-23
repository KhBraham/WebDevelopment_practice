<?php
$cne = $_POST['cne'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$dateInscription = $_POST['dateInscription'];
$adresse = $_POST['adresse'];
$sexe = $_POST['sexe'];
$moyenne = $_POST['moyenne'];

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "ENSAM-CASA";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}

// Préparer la requête SQL d'insertion
$stmt = $connexion->prepare("INSERT INTO Etudiant(cne, nom, prenom, age, dateInscription, adresse, sexe, moyenne) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

// Liaison des paramètres avec les valeurs du formulaire


// Récupérer les valeurs du formulaire

$stmt->bind_param("ississsd", $cne, $nom, $prenom, $age, $dateInscription, $adresse, $sexe, $moyenne);
// Exécuter la requête
if ($stmt->execute()) {
    echo "Enregistrement ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout de l'enregistrement : " . $stmt->error;
}

// Fermer la connexion
$stmt->close();
$connexion->close();
?>
