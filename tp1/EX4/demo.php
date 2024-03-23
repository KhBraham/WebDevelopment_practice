<?php
function age($dateNaissance) {
    // Créer un objet DateTime avec la date de naissance fournie
    $dateNaissance = date_create($dateNaissance);
    
    // Obtenir la date actuelle
    $dateActuelle = new DateTime();

    // Calculer la différence entre la date actuelle et la date de naissance
    $difference = date_diff($dateNaissance, $dateActuelle);
    echo  
    // Obtenir l'âge en années
    $age = $difference->format('%y');

    // Vérifier si la personne est majeure (âge >= 18)
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}

// Exemple d'utilisation
$dateNaissance = "2000-05-15"; // Date de naissance au format "YYYY-MM-DD"
if (age($dateNaissance)) {
    echo "La personne est majeure.";
} else {
    echo "La personne est mineure.";
}
?>
