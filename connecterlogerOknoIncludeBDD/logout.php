<?php
require_once ('../BDD/ConnectBDD.php');
require_once ('../includes/header.php');
$connect; //= connectDB();

session_start();
session_destroy();
 if(isset($_COOKIE['pseudo']) and isset($_COOKIE['prenom']) and isset($_COOKIE['nom']) and isset($_COOKIE['password']) and isset($_COOKIE['classe']) and isset($_COOKIE['email'])) {
    $pseudo = $_COOKIE['pseudo'];
    $prenom = $_COOKIE['prenom'];
    $nom = $_COOKIE['nom'];
    $password = $_COOKIE['password'];
    $classe = $_COOKIE['classe'];
    $email = $_COOKIE['email'];
    setcookie('pseudo', $pseudo, time()-1);
    setcookie('prenom', $prenom, time()-1);
    setcookie('nom', $nom, time()-1);
    setcookie('password', $password, time()-1);
    setcookie('classe', $classe, time()-1);
    setcookie('email', $email, time()-1);
}
echo "Vous vous déconnectez avec succès. cliquez ici pour <a href='login.php'>se reconnecter</a>";
// echo "You successfully logout. click here to <a href='login.php'>login again</a>";
?>
