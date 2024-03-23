<?php
function mettreEnMaj($tab) {
    $result = array();
    foreach ($tab as $mot) {
        $longueur = strlen($mot);
        if ($longueur > 1) {
            $nouveauMot = strtoupper($mot[0]) . strtolower(substr($mot, 1, $longueur - 3)) . strtoupper($mot[$longueur - 2]).strtolower($mot[$longueur - 1]);
        } else {
            $nouveauMot = strtoupper($mot);
        }
        $result[] = $nouveauMot;
    }
    return $result;
}

$tab = ['madrId', 'PaRis', 'casablanca'];
$tab = mettreEnMaj($tab);
print_r($tab);

?>
