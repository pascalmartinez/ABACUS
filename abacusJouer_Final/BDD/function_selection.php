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
      $stmt = $connect->prepare("SELECT DISTINCT id, auteur
      FROM infos

      ");
      $stmt->execute();
      return $stmt;
      }
    catch(PDOExeption $e){
        echo "Requete Giveexos fausse : " . $e->getMessage();
    }
  }


// function listauteur($connect, $auteur){
//     try{
//         $req = "INSERT INTO infos (auteur)
//         VALUES ('$auteur')";
//         if(mysqli_num_rows($req)==0)
//         {
//         echo "Aucun auteur saisi existe. Reéssayer";
//         }
//         else
//         {
//          echo $row['auteur'];
//         }
//         $connect->query($req);
//         echo "Nouvel auteur enregistré";
//     }
//     catch(PDOException $e){
//         echo "Request failed : " . $e->getMessage();
//     }
// }

// function listauteurs($connect){
//
//     $select_list = $_POST['auteur'];
//     $reqReponse =$connect->query("SELECT auteur FROM infos or die()");
//     $data=$reqReponse->fetch();
//     $reponse = $data['auteur'];
//     $score = 0;
//
//     if ($select_list == $reponse ) {
//         echo "Bonne réponse";
//         $score = +1;
//     }else {
//         echo "Mauvaise réponse";
//         $score = +0;
//     }
//         // return $score;
// }
//
//
// compareReponse($connect);
//
// function listauteur($connect, $auteur){
//   if(isset($_POST['auteur'])){
//         $auteur = $_POST['auteur'];
//         $query2 = query("SELECT auteur FROM infos WHERE auteur = '$auteur'");
//
//         while($auteur = mysql_fetch_object($query2))
//             {
//             echo "$auteur->infos_id";
//             }
//             $numberOfRows = mysql_num_rows($query2);
//             if ($numberOfRows == 0)
//             {
//               echo "Aucun auteur saisi existe. Reéssayer";
//                 }
//             // else($numberOfRows > 0){
//             //
//             // }
//   }
// };





 ?>
