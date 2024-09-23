<?php
session_start(); // Démarrer la session

// Détruire toutes les données de la session
session_unset(); // Efface les variables de session
session_destroy(); // Détruit la session

// Rediriger vers la page de connexion après déconnexion
header("Location: index.php");
exit;
