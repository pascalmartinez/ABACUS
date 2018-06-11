<?php

function addExo($connect){
  try{
    $req = $connect->prepare(
        'SELECT Exo.titre, Exo.id_difficulte, Exo.enonce, Exo.img
         FROM Exo');
      return $req;
  }catch (Exception $e){
    die("Oh noes! There's an error in the query categorie! ($Exo)");
  }
}

//Préparation de la requête d'insertion (SQL)
function addInfo ($connect){
  $pdoStat = $connect->prepare('INSERT INTO Info VALUES (NULL, :id, :auteur, :codecapacite, :fichetechnique, :etape, :secteur, :codenaf)')
}
?>
