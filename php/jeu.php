<?php 
session_start();
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
require_once 'function.php';
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
$tilte = "Composer votre glace";
$ingredients = [];
$total = 0;

foreach(['parfum', 'supplement', 'cornet'] as $name) {
    
    if (isset($_GET[$name])) {
        $liste = $name . 's';
        $choix = $_GET[$name];
        if (is_array($choix)) {
            foreach($choix as $value) {
                if(isset($$liste[$value])) {
                    $ingredients[] = $value;
                    $total += $$liste[$value];
                }
            }
        } else {
            if(isset($$liste[$choix])) {
                $ingredients[] = $choix;
                $total += $$liste[$choix];
            }
        }
        
    }
}

setcookie('pseudo', "sekkate", time() + 300000);
require 'element/header.php';
?>

<main class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Votre glace</h5>
                        <ul>
                            <?php foreach($ingredients as $ingredient) : ?>
                                <li><?= $ingredient ?></li>
                            <?php endforeach ?>
                        </ul>
                        <p>
                            <strong>Prix : </strong> <?= $total ?> £
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h1>Composer votre glace</h1>
                <form action="/php/jeu.php" method="get">
                    <div class="form-group">
                        <!-- <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>"> -->
                        <h2>Choisissez votre parfum</h2>
                        <?php foreach($parfums as $parfum => $prix): ?>
                            <div class="checkbox">
                                <label>
                                    <?= checkbox('parfum', $parfum, $_GET) ?> 
                                    <?= $parfum ?> - <?= $prix ?> £
                                </label>
                            </div>
                        <?php endforeach ?>
                        <h2>Choisissez votre cornet</h2>
                        <?php foreach($cornets as $cornet => $prix): ?>
                            <div class="radio">
                                <label>
                                    <?= radio('cornet', $cornet, $_GET) ?> 
                                    <?= $cornet ?> - <?= $prix ?> £
                                </label>
                            </div>
                        <?php endforeach ?>
                        <h2>Choisissez votre supplement</h2>
                        <?php foreach($supplements as $supplement => $prix): ?>
                            <div class="checkbox">
                                <label>
                                    <?= checkbox('supplement', $supplement, $_GET) ?> 
                                    <?= $supplement ?> - <?= $prix ?> £
                                </label>
                            </div>
                        <?php endforeach ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Composer ma glace</button>
                </form>
            </div>
        </div>
        
    </div>
    <br>
    <h2>$_SESSION</h2>
    <?php
    $_SESSION['name'] = '1000';
    var_dump($_SESSION);
    ?>
</main>


<?php require 'element/footer.php' ?>