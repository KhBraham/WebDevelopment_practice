<?php
function remplacerLettres($chaine) {
    $chaine = str_replace('e', '3', $chaine);
    $chaine = str_replace('i', '1', $chaine);
    $chaine = str_replace('o', '0', $chaine);
    return $chaine;
}

$chaine = "Hello World";
$resultat = remplacerLettres($chaine);
echo $resultat; // Output: H3ll0 W0rld
?>
