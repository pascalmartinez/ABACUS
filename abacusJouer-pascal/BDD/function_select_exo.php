
<?php

//Permet la selection du niveau
    function selectNiveau($connect){
      try{
        $stmt = $connect->prepare("SELECT Difficulte.niveau,Difficulte.classe
        FROM Difficulte
        
        ");
        $stmt->execute();
        return $stmt;
        }
      catch(PDOExeption $e){
          echo "Requete GiveExo fausse : " . $e->getMessage();
      }
    }
//Permet d'afficher l'exercice en fonction du niveau
    function selectExo($connect){
      try{
        $stmt = $connect->prepare("SELECT Exo.id, Exo.id_difficulte, titre, enonce, url_img, Difficulte.niveau, Info.auteur
        FROM Exo
        INNER JOIN Difficulte ON Difficulte.niveau=Exo.id_Difficulte
        INNER JOIN Info ON Exo.id_Info=Info.id
        WHERE Exo.id_Difficulte=Difficulte.niveau
        ");

        $stmt->execute();
        return $stmt;
        }
      catch(PDOExeption $e){
          echo "Requete GiveExo fausse : " . $e->getMessage();
      }
    }

// // Affiche le numéro de l'exercice
//     function selectNumExo($connect){
//       try{
//         $stmt = $connect->prepare("SELECT Exo.id FROM Exo");
//         $stmt->execute();
//         return $stmt;
//         }
//       catch(PDOExeption $e){
//           echo "Requete GiveExo fausse : " . $e->getMessage();
//       }
//     }






 ?>
