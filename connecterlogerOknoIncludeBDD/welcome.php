<?php
require_once ('../BDD/ConnectBDD.php');
require_once ('../includes/header.php');

$connect; //= connectDB();

session_start();
echo " Bienvenue : " . $_SESSION['pseudo']. "<br />";
echo " Votre prenom " . $_SESSION['prenom'] . "<br />";
echo "Votre nom : ". $_SESSION['nom']. "<br />";
echo " Votre classe : " . $_SESSION['classe']. "<br />";
echo " Votre email : " . $_SESSION['email']. "<br />";
echo "<a href='logout.php'>logout</a>";


 ?>
