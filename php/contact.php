<?php
    $tiltle = 'Nous contacter';
    $nav = 'contact';
    require_once 'config.php';
    require_once 'function.php';
    date_default_timezone_set('Africa/Casablanca');
    $heure = (int)date('G');
    $creneaux = CRENEAUX[date('N') - 1];
    $ouvert = in_creneux($heure, $creneaux);
    $color = ($ouvert)? 'green' : 'red';
    
    require 'header.php';
?>
<main class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mt-5">Nous contacter</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam doloremque reprehenderit eius alias hic excepturi numquam, vitae consectetur dolorem iste sed necessitatibus eaque officiis. Reiciendis dolorum debitis ex doloremque quidem.</p>
            </div>
            <div class="col-md-5">
                <h2>Horaire d'ouvertures</h2>
                <?php if ($ouvert): ?>
                    <div class="alert alert-success">
                        Le magasin est ouvert
                    </div>
                <?php else :?>
                    <div class="alert alert-danger">
                        Le magasin est fermé
                    </div>
                <?php endif; ?>
                <ul>
                    <?php foreach(JOURS as $key => $jour) :?>
                        <li <?php if ($key + 1 === (int)date('N')): ?> style="color:<?= $color; ?>"<?php endif ?>>
                            <strong><?= $jour . ' : ' ?></strong>
                            <?= creneaux_html(CRENEAUX[$key])?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php
    require 'footer.php';
?>