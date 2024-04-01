<?php
    $title = "Page d'accueil";
    $nav = 'index';
    require 'element/header.php';
?>
<!-- <pre>
    <?php
        print_r($_SERVER);
    ?>
</pre> -->
<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Sticky footer with fixed navbar</h1>
    <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code class="small">main &gt; .container</code>.</p>
  </div>
</main>

<?php
    require 'element/footer.php';
?>