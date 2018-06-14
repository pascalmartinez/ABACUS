
<?php

// function ExoList($connect, $offset){
//     try{
//         $limit = 10;
//
//         $stmt = $connect->prepare("SELECT exos.id, exos.titre, exos.enonce, exos.url_img, exos.id_Info, exos.id_difficulte, infos.auteur
//         FROM exos
//         INNER JOIN users ON users.classe=exos.id_difficulte
//         INNER JOIN difficultes ON difficultes.id=exos.id_difficultes
//         INNER JOIN infos ON exos.id_Info=infos.id
//         LIMIT
//             :limit
//         OFFSET
//             :offset");
//
//         $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
//         $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
//
//         $stmt->execute();
//
//         return $stmt;
//     }
//     catch(PDOExeption $e){
//         echo "Request failed : " . $e->getMessage();
//     }
// }


//Permet d'afficher l'exercice en fonction du niveau
function selectExo($connect, $classe=null){
    //null part défaut, évite que ça explose si rien
    if (isset($classe)) {
        //si set faire la fonction qui cherche par niveau
       try{
            $stmt = $connect->prepare("SELECT exos.id, exos.titre, exos.enonce, exos.url_img, infos.auteur
                FROM exos
                INNER JOIN infos ON exos.id_info=infos.id
                INNER JOIN difficultes ON exos.id_difficulte=difficultes.niveau
                WHERE difficultes.niveau=$classe");

            $stmt->execute();
            return $stmt;
        }
        catch(PDOExeption $e){
            echo "Request failed : " . $e->getMessage();
        }
    }else{
        //si pas set, celle sans where, sans niveau
        try{
            $stmt = $connect->prepare("SELECT exos.id, exos.titre, exos.enonce, exos.url_img, infos.auteur
                FROM exos INNER JOIN infos ON exos.id_info=infos.id
                INNER JOIN difficultes ON exos.id_difficulte=difficultes.niveau");

            $stmt->execute();
            return $stmt;
        }
        catch(PDOExeption $e){
            echo "Request failed : " . $e->getMessage();
        }
    }

}

//Permet la selection du niveau
    function selectNiveau($connect){
        echo "haaaaaa";
      try{
        $stmt = $connect->prepare("SELECT id, niveau
        FROM difficultes

        ");
        $stmt->execute();
        return $stmt;
        }
      catch(PDOExeption $e){
          echo "Requete Giveexos fausse : " . $e->getMessage();
      }
    }






 ?>
