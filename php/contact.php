<?php
    $tiltle = 'Nous contacter';
    $nav = 'contact';
    require_once 'data/config.php';
    require_once 'function.php';
    date_default_timezone_set('Africa/Casablanca');
    $heure = (int)($_GET['heure'] ?? (int)date('G'));
    $jour = (int)($_GET['jour'] ?? date('N') - 1);
    $creneaux = CRENEAUX[$jour];
    $ouvert = in_creneux($heure, $creneaux);
    $color = ($ouvert)? 'green' : 'red';
    
    require 'element/header.php';
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
                        Le magasin sera ouvert
                    </div>
                <?php else :?>
                    <div class="alert alert-danger">
                        Le magasin sera fermé
                    </div>
                <?php endif; ?>
                <form action="" method="get">
                    <div class="form-group">
                        <?= select('jour', $jour, JOURS) ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="number" class="form-control" name="heure" value="<?= $heure ?>">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Voir si le magasin est ouvert</button>
                </form>
                <br>
                <ul>
                    <?php foreach(JOURS as $key => $jour) :?>
                        <li>
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
    require 'element/footer.php';
?>