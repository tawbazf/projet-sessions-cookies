<?php
session_start();
session_destroy(); 
echo "Vous êtes maintenant déconnecté.";
echo "<br><a href='login.php'>Se reconnecter</a>";
?>
