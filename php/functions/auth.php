<?php
function est_connects (): bool {
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function forcer_utilisateur_connecte (): void {
    if (!est_connects()) {
        header('Location: /php/login.php');
        exit();
    }
}