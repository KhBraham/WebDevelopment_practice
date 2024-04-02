<?php require 'style.php' ?>

        <footer class="footer mt-auto py-3 bg-body-tertiary">
            <div class="container">
                <div class="col">
                    <?php
                        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
                        ajouter_vue();
                    ?>
                    <p>Il y a <?= nombre_vues() ?> visites sur le site</p>
                    <div class="row">
                    <form action="/php/newsletter.php" method="post" class="form-inline">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Entrer votre email" required class="form-control">
                        </div>
                        
                        <button style="margin: 10px 0;" type="submit" class="btn btn-primary">S'inscrire</button>
                    </form>
                </div>
                </div>

                <div class="col">
                    <div class="row">
                        <h5>Navigation</h5>
                        <span class="text-body-secondary">
                            <ul class="list-unstyled text-small">
                                <?php 
                                    $class = '';
                                    require 'menu.php'; 
                                ?>
                            </ul>
                        </span> 
                    </div>
                </div>
                    
            </div> 

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>