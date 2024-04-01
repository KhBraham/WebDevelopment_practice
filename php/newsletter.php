<?php
$title = "Ajouter votre email";
$nav = 'newslitter';
$error = null;
$success = null;
$email = null;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d');
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        $success = "Votre email a bien été enregistré";
        $email = null;
    } else {
        $error = "Email invalide";
    }
}
require 'element/header.php';
?>

<h1>S'inscrire à la newsletter</h1>

<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium doloremque dignissimos est dolores modi similique ullam iste delectus, architecto quisquam commodi. Veritatis ipsam ipsa harum maxime. Unde magni atque quam.
</p>
<?php if ($error): ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif; ?>

<?php if ($success): ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
<?php endif; ?>

<div class="row">
    <form action="/php/newsletter.php" method="post" class="form-inline">
        <div class="form-group">
            <input type="email" name="email" placeholder="Entrer votre email" required class="form-control" value="<?= htmlentities($email) ?>">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>





<?php require 'element/footer.php'; ?>