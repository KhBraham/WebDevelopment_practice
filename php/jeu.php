<?php 
// $aDeviner = 150;
// $erreur = null;
// $succes = null;
// $value = null;
// if (isset($_GET['chiffre'])) {
//     if ($_GET['chiffre'] > $aDeviner) {
//         $erreur = "votre chiffre est trop grand";
//     } elseif ($_GET['chiffre'] < $aDeviner) {
//         $erreur = "votre chiffre est trop petit";
//     } else {
//         $succes = "Bravo! vous avez deviné le chiffre : $aDeviner";
//     }
//     $value = $_GET['chiffre'];
// }
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
$supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];
require 'header.php';
?>

<main class="flex-shrink-0">
    <div class="container">
        <form action="/php/jeu.php" method="get">
            <div class="form-group">
                <!-- <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>"> -->
                <input type="checkbox" name="parfum[]" value="fraise" id="fraise">
                <label for="fraise">Fraise</label><br>
                <input type="checkbox" name="parfum[]" value="vanille" id="vanille">
                <label for="vanille">vanille</label><br>
                <input type="checkbox" name="parfum[]" value="chocolat" id="chocolat">
                <label for="chocolat">chocolat</label>
            </div>
            <input type="text" name="demo[]">
            <input type="text" name="demo[]">
            <br>
            <!-- <div class="mg-10">
                <?php if ($erreur) :?> 
                        <div class="alert alert-danger">
                            <?= $erreur ?>
                        </div>
                <?php elseif ($succes) : ?>
                        <div class="alert alert-success">
                            <?= $succes ?>
                        </div>
                <?php endif ?>
            </div> -->
            <button type="submit" class="btn btn-primary">Deviner</button>
        </form>
    </div>
    <br>
    <h2>$_GET</h2>
    <pre>
        <?= var_dump($_GET) ?>
    </pre>
    <h2>$_POST</h2>
    <pre>
        <?= var_dump($_POST) ?>
    </pre>
</main>


<?php require 'footer.php' ?>