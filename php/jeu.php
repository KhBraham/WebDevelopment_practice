<?php 
$aDeviner = 150;
require 'header.php';
?>

<main class="flex-shrink-0">
    <div class="container">
        <form action="/php/jeu.php" method="get">
            <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="
            <?php if (isset($_GET['chiffre'])) : ?>
                <?= htmlentities($_GET['chiffre']) ?>
            <?php endif ?>
            "><br>
            <div class="mg-10">
                <?php if(isset($_GET['chiffre'])) : ?>
                    <?php if ($_GET['chiffre'] > $aDeviner) :?> 
                        <p>votre chiffre est trop grand</p>
                    <?php elseif ($_GET['chiffre'] < $aDeviner) : ?>
                        <p>votre chiffre est trop petit</p>
                    <?php else : ?>
                        <p>Bravo! vous avez deviné le chiffre : </p> <?= $aDeviner ?>
                    <?php endif ?>
                <?php endif ?>
            </div>
            <input type="text" name="demo" value="test">
            <br><br>
            <button type="submit">Deviner</button>
            <button type="reset">Restorer</button>
        </form>
        <br>
        
        
    </div>
</main>


<?php require 'footer.php' ?>