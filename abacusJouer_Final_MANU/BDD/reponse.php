<?php

  function selectRepAdmin($connect){
    try{
      $selectRepAdmin = $connect->prepare("SELECT id,reponse
      FROM exos
      ");
      $selectRepAdmin->execute();
      $row = $connect->fetchAll();
      // $returnResult = $connect->rowCount();
      // return $selectRepAdmin;

    // if($returnResult = 1){
    //
    //     $result =
    //
    // }
    catch(PDOExeption $e){
        echo "Requete Givereponse fausse : " . $e->getMessage();
  }
}


function afficherReponse($connect, $selectRepAdmin){
  if($reponse = $selectRepAdmin){
    echo 'bonne reponse'
  }else if ($reponse != $selectRepAdmin){
    echo 'mauvaise réponse'
  }
}




//fonction qui fait le diagnostic
function reponseUser($connect, $reponse){
    //si le reste de la division est zéro, c'est pair
    if ($reponse = $selectRepAdmin){
        //on initialise les deux valeurs de verdict
        $verdict='bonne reponse';
    }
    else($reponse != $selectRepAdmin){
        $verdict='mauvaise réponse';
    }
    //on renvoie le verdict, tout à la fin
    return $verdict;
}
?>
