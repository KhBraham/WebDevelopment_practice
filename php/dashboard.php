<?php
require_once 'functions/auth.php';
forcer_utilisateur_connecte();
$tilte = 'Votre visites';
$nav = 'dashboard';
require_once 'functions/compteur.php';
$annee = (int)date('Y');
$annee_selection = empty($_GET['annee']) ? null : (int)$_GET['annee'];
$mois_selection = empty($_GET['mois']) ? null : (int)$_GET['mois'];
if ($annee_selection && $mois_selection) {
    $total = nombre_vues_mois($annee_selection, $mois_selection);
    $detail = nombre_vues_details_mois($annee_selection, $mois_selection);
} else {
    $total = nombre_vues();
}
$mois = array(
    1 => "Janvier",
    2 => "Février",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Août",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Décembre"
);
require_once 'element/header.php';
?>
<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for($i = 0; $i < 5; $i++): ?>
                <a class="list-group-item <?=($annee_selection == ($annee - $i))? 'active' : '' ?>" href="dashboard.php?annee=<?= $annee - $i ?>"><?= $annee - $i ?></a>
                <?php if ($annee_selection == ($annee - $i)): ?>
                    <div class="list-group">
                        <?php foreach ($mois as $j => $nom): ?>
                            <a href="dashboard.php?annee=<?= $annee_selection ?>&mois=<?= $j ?>" class="list-group-item <?=($mois_selection == $j)? 'active' : '' ?>">
                                <?= $nom ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?> 
            <?php endfor; ?>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                <strong style="font-size: 3em;"><?= $total ?></strong><br>
                Visite<?= ($total > 1)? 's' : ''?> total
            </div>
        </div>
        <?php if (isset($detail)): ?>
            <h2>Détails des visites pour le mois</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nombre de visite</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($detail as $ligne): ?>
                        <tr>
                            <td><?= $ligne['jour'] ?></td>
                            <td><?= $ligne['total'] ?> visite<?= ($ligne['total'] > 1)? 's' : '' ?></td>
                        </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>



<?php require 'element/footer.php';?>