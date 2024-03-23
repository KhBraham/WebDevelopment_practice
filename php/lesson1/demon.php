<?php
/*$chiffre = null;
while( $chiffre !== 10){
    $chiffre = (int) readline("Entrez un chiffre :");
}
echo 'Bravo vous avez gagné!';
for ($i = 0; $i < 10; $i++){
    echo "- $i \n";
}
$notes = [10, 15, 16];
$ecole = [
    'cm3' => ['Jean', 'Marc', 'Jane', 'Marion'],
    'cm1' => ['Enilis', 'Marcelin'] 
];
foreach ($ecole as $key => $eleves) {
    echo "la classe $key :\n";
    foreach ($eleves as $elev) {
        echo "\t - $elev \n";
    }
}

$notes = [];
$action = null;
while (true) {
    $action = readline('entrez une note (ou tapez \'fin\' pour areter : ');
    if ($action === 'fin') {
        break;
    } else {
        $notes[] = (double) $action;
    }
}

foreach ($notes as $note) {
    echo ("- $note \n");
}
$creneaux = [];
while (true) {
    $debut = (int) readline("heure d'entre : ");
    $fin = (int) readline("heure du fin : ");
    if ($debut >= $fin) {
        echo "il existe des erreur dans la partie d'entrer les donnees!\n";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("si vous voulez d'entrer des une nouvelle creneau tapez (o/n)");
        if ($action === "n") {
            break;
        }
    }
}
echo "le magasin est ouvert ";
foreach ($creneaux as $key => $creneau) {
    if ($key > 0) {
        echo "et ";
    }
    echo "de {$creneau[0]}h à {$creneau[1]}h ";
}
$mot = readline("veuillez entrer un mot :");
$reverce = strtolower(strrev($mot));
if (strtolower($mot) === $reverce) {
    echo 'ce mot est palyndrome';
} else {
    echo "ce mot n'est pas un palyndrome";
}
$notes = [10, 20, 13];
$moy = array_sum($notes) / count($notes);
echo 'la moynne est : ' . round($moy, 2);
$insultes = ['merde', 'con'];
$phrase = readline('entrez une phrase : ');
foreach ($insultes as $insulte) {
    $astirique[] = substr($insulte, 0, 1) . str_repeat('*', strlen($insulte) - 1);
}
$phrase = str_replace($insultes, $astirique, $phrase);
foreach ($insultes as $insulte) {
    $taille = strlen($insulte);
    $phrase = str_replace($insulte, str_repeat('*',$taille), $phrase);
}
echo $phrase;*/

