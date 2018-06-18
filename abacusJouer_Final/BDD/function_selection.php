<?php

function selectNiveau($connect){

  try{
    $stmt = $connect->prepare("SELECT id, classe
    FROM difficultes

    ");
    $stmt->execute();
    return $stmt;
    }
  catch(PDOExeption $e){
      echo "Requete Giveexos fausse : " . $e->getMessage();
  }
}




function SelectAuteur($connect){
    try{
      $stmt = $connect->prepare("SELECT DISTINCT auteur
      FROM infos

      ");
      $stmt->execute();
      return $stmt;
      }
    catch(PDOExeption $e){
        echo "Requete Giveexos fausse : " . $e->getMessage();
    }
  }

  // function selectReponse($connect){
  //   try{
  //     $stmt = $connect->prepare("SELECT id,reponse
  //     FROM exos
  //     ");
  //   }
  // }


 ?>
