<?php
function longueurMax($tab) {
    $element = "";
    $max = strlen($tab[0]);
    foreach ($tab as $mot) {
        $length = strlen($mot);
        if ($length >= $max) {
            $element = $mot;
            $max = $length; // Mettre à jour la longueur maximale trouvée
        }
    }
    return $element;
}

$tab = ['madrId', 'PaRissssssssssss', 'casablanca'];
echo longueurMax($tab); // Affichera "PaRissssssssssss"
?>
