<?php
session_start();
print_r($_SESSION);

//On vérifie si la personne a bien posté des élements et on vérie que ce n'est pas vide :
if (isset($_POST) && !empty($_POST['pseudo']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']) && !empty($_POST['classe']) && !empty ($_POST['mail'])) {
  // extraire les données du tableau, pour pouvoir les travailler en var
  extract($_POST);
  $password = sha1($password);
  connectDB('calculBddMichel3');
  $sql = "SELECT id FROM users WHERE pseudo='$pseudo', nom='$nom', prenom='$prenom', classe='$classe', mail='$mail' AND password='$password'";
  $connect->query($sql) or die('Erreur : '.$e->getMessage());
  // echo mysql_num_rows($connect);
  // $sql->rowCount();
}

 ?>
 <html>
   <head>
     <title>Ma page</title>
     <?php

         include 'includes/header.php';
         include 'BDD/ConnectBDD.php';
     ?>
   </head>

   <body>
     <form class="" action="login.php" method="post">
       <fieldset>
         <legend>Vos coordonnées</legend>
           <div>
             Pseudo : <input type="text" name="pseudo" value=""/><br/>
             Nom : <input type="text" name="nom" value=""/>
             Prénom : <input type="text" name="prenom" value=""/><br/>
             Password : <input type="password" name="password" value=""/><br/>
             Classe : <input type="text" name="classe" value=""/>
             Mail : <input type="email" name="mail" value=""/>
           </div>
       </fieldset>
      <div class="button">
        <input type="submit" value="SE CONNECTER"/>
      </div>

     </form>
   </body>
