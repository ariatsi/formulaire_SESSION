<?php
session_start(); // Démarrer la session

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['name'])) {
    echo "Bonjour, " . $_SESSION['name'] . " " . $_SESSION['surname'] . " ! <br/>Vous êtes connecté en tant que " . $_SESSION['role'] . ".";
} else {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header("Location: index.php");
    exit;
}