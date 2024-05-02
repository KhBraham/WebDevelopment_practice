<?php
$erreur = null;
$password = '$2y$12$Ta0ppQ5VyHU5BK4KovZ.YOEJDRSyrGJHtgYvsirUnFTjHjeAAi1S6';
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'John' && password_verify($_POST['motdepasse'], $password)) {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /dashboard.php');
    } else {
        $erreur = "Identifiants incorrecrts";
    }
}

require 'functions/auth.php';
if (est_connects()) {
    header('Location: /php/dashboard.php');
    exit();
}

require 'element/header.php';
?>

<div class="container">
    <?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="pseudo" placeholder="Votre mot de passe">
        </div>
        <div class="form-group mb-3">
            <input type="password" class="form-control" name="motdepasse" placeholder="Votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>




<?php
require 'element/footer.php';
?>