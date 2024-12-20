<?php
session_start(); 
if (isset($_SESSION['username'])) {
    echo "Vous êtes déjà connecté en tant que " . $_SESSION['username'];
    echo "<br><a href='logout.php'>Déconnexion</a>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == 'admin' && $password == '1234') {
        $_SESSION['username'] = $username; 
        
        echo "Connexion réussie ! Bienvenue, " . $_SESSION['username'];
        echo "<br><a href='logout.php'>Déconnexion</a>";
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>


<form method="post" action="">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" value="Se connecter">
</form>
