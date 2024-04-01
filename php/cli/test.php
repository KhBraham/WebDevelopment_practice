<?php
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.csv'; 
// $size = @file_put_contents($fichier, "\nmarc comment ça va?", FILE_APPEND);
// if ($size === false) {
//     echo 'Imposible d\'écrire dans le fichier';
// } else {
//     echo 'Ecriture réussie';
// }
$resource = fopen($fichier, 'r+');
$k = 0;
while ($line = fgets($resource)) {
    $k++;
    if ($k == 1) {
        fwrite($resource, 'Salut les gens');
        break;
    }
}
fclose($resource);
