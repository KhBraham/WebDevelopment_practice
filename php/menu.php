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
<?= nav_item('/php/index.php', 'Accueil', $class); ?>
<?= nav_item('/php/blog.php', 'Blog', $class); ?>
<?= nav_item('/php/contact.php', 'Contact', $class) ?>