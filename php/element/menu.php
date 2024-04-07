<?php
if (!function_exists('nav_item')) {
    function nav_item (string $lien, string $titre, string $class = '') : string {
        $page = $_SERVER['SCRIPT_NAME'];
        $html = <<<html
        <li class="nav-item"><a class="$class" href="$lien">$titre</a></li>
        html;
        if ($page === $lien) {
            $html = <<<html
            <li class="nav-item"><a class="$class active" href="$lien">$titre</a></li>
html;
        }
        return $html;
    }
}
?>
<?= nav_item('/php/index.php', 'Accueil', $class) ?>
<?= nav_item('/php/contact.php', 'Contact', $class) ?>
<?= nav_item('/php/jeu.php', 'Jeu', $class) ?>
<?= nav_item('/php/newsletter.php', 'newsletter', $class) ?>
<?= nav_item('/php/nsfw.php', 'nsfw', $class) ?>
<?= nav_item('/php/dashboard.php', 'dashboard', $class) ?>
