<?php
include 'function.php'

connectDB();

    $array = array("titre" => $_POST['titre'], "enonce" => $_POST['enonce'], "img" => $_POST['img'], "id_difficulte" => $_POST['id_difficulte']);
    $cpt = 0;
    $error = 0;
    foreach ($array as $key => $value) {
      $cpt++;
      if($value == NULL){
        $error++;
      }
    }
    $titre = $_POST['titre'];
    $enonce = $_POST['enonce'];
    $img = $_POST['img'];
    $id_difficulte = $_POST['id_difficulte'];

    if ($cpt == sizeof($array) && $error > 0) {

      echo	"<script type=\"text/javascript\">
        window.alert('veuillez remplir toute les champs pour envoyer le formulaire');
        window.location.href = 'formulaire_AddExo.php?var=$key&titre=$titre&enonce=$enonce&img=$img&id_difficulte=$id_difficulte';
        </script>";
    exit;
    }else if ($cpt == sizeof($array) && $error == 0){
  		$connect = mySqli();
  		$Exo= addExo($connect, $titre, $id_difficulte $enonce, $img);

  		echo	"<script type=\"text/javascript\">
  					window.alert('formulaire valide !');
  					window.location.href = 'formulaire_AddExo.php';
  					</script>";
  			exit;
    }









 ?>
