<?php
session_start(); // Démarrer la session

$users = [
    ["email" => "user1@example.com",
        "password" => "password123",
        "name" => "Jean",
        "surname" => "Dupont",
        "role" => "Admin"],
    ["email" => "user2@example.com",
        "password" => "pass456",
        "name" => "Marie",
        "surname" => "Durand",
        "role" => "User"],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            // Stocker les informations de l'utilisateur dans la session
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['role'] = $user['role'];

            // Rediriger vers la page d'accueil après connexion réussie
            header("Location: welcome.php");
            exit;
        }
    }
    // Si les informations ne correspondent pas
    echo "Email ou mot de passe incorrect.";
}
