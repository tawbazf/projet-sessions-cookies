<?php
session_start();

if (isset($_COOKIE['remember_me'])) {
    $_SESSION['username'] = $_COOKIE['remember_me'];
    
    echo "Bienvenue de nouveau, " . $_SESSION['username'];
    echo "<br><a href='logout.php'>Déconnexion</a>";
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username == 'admin' && $password == '1234') {
        $_SESSION['username'] = $username; 
        if (isset($_POST['remember_me'])) {
            setcookie('remember_me', $username, time() + (86400 * 30), "/"); // Durée de 30 jours
        }
        
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
    <label for="remember_me">Se souvenir de moi:</label>
    <input type="checkbox" name="remember_me" id="remember_me"><br>
    <input type="submit" value="Se connecter">
</form>
