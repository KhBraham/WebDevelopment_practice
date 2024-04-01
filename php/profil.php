<?php
$nom = null;
if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
    unset($_COOKIE['utilisateur']);
    setcookie('utilisateur', '', time() - 10);
    setcookie('pseudo', '', time() - 10);
}
if (!empty($_POST['nom'])) {
    setcookie('utilisateur', $_POST['nom']);
    $nom = $_POST['nom'];
}
if (!empty($_COOKIE['utilisateur'])) {
    $nom = $_COOKIE['utilisateur'];
}
require 'element/header.php';

?>

<div class="container">
    <div class="row">
        <?php if ($nom): ?>
            <h1>Bonjour <?= htmlentities($nom) ?></h1>
            <a href="profil.php?action=deconnecter" style="width: 140px;" class="btn btn-primary">Se déconnecter</a>
        <?php else: ?>
            <form action="" method="post">
                <div class="form-group">
                    <input class="form-control" name="nom" placeholder="Entrer votre nom">
                </div><br>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        <?php endif ?>
    </div>
</div>

<?php require 'element/footer.php' ?>
