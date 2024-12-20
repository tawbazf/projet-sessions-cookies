<?php
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
    echo "Votre langue préférée est : " . $lang;
} else {
    echo "Aucune langue préférée enregistrée.";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lang = $_POST['lang'];
    setcookie('lang', $lang, time() + (86400 * 30), "/"); 
    echo "Préférence de langue enregistrée : " . $lang;
}
?>


<form method="post" action="">
    <label for="lang">Choisissez votre langue préférée:</label>
    <select name="lang" id="lang">
        <option value="fr">Français</option>
        <option value="en">Anglais</option>
        <option value="es">Espagnol</option>
    </select><br>
    <input type="submit" value="Enregistrer la préférence">
</form>
