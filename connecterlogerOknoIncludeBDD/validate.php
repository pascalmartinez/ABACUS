<?php
require_once ('../BDD/ConnectBDD.php');
require_once ('../includes/header.php');
$connect; //= connectDB();

$mypseudo = $_POST['pseudo'];
$myprenom = $_POST['prenom'];
$mynom = $_POST['nom'];
$mypassword = $_POST['password'];
$myclasse = $_POST['classe'];
$myemail = $_POST['email'];

// $mypseudo = "manu87";
// $myprenom = "emma";
// $mynom = "mem";
// $mypassword = "12345";
// $myclasse = "10+";
// $mymail = "purple.aformac@gmail.com";


if(isset($_POST['login'])) {
      $pseudo = $_POST['pseudo'];
      $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $password = $_POST['password'];
      $classe = $_POST['classe'];
      $email = $_POST['email'];
      if($pseudo == $mypseudo and $prenom == $myprenom and $nom == $mynom and $password == $mypassword and $classe == $myclasse and $email == $myemail) {
          if(isset($_POST['remenber'])) {
            setcookie('pseudo', $pseudo, time()+60*60*7);
            setcookie('prenom', $prenom, time()+60*60*7);
            setcookie('nom', $nom, time()+60*60*7);
            setcookie('password', $password, time()+60*60*7);
            setcookie('classe', $classe, time()+60*60*7);
            setcookie('email', $email, time()+60*60*7);
          }
          session_start();
          $_SESSION['prenom'] = $prenom;
          $_SESSION['nom'] = $nom;
          $_SESSION['pseudo'] = $pseudo;
          $_SESSION['classe'] = $classe;
          $_SESSION['email'] = $email;
          header("location: welcome.php");
      } else {
        echo 'Un champ ou plusieurs champs sont manquants.</ br> cliquez ici pour <a
        href="login.php">se reconnecter</a>';
        // echo 'A field or several fields are missing.</ br> click here to <a
        // href="login.php">try again</a>';
        // <a href="login.php" target="_blank">try again</a>
      }

} else {
  header("location: login.php");
}


 ?>
