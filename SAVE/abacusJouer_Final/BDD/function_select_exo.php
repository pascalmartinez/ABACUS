
<?php

//Permet la selection du niveau
    function selectNiveau($connect){
        // echo "haaaaaa";
      try{
        $stmt = $connect->prepare("SELECT id, niveau
        FROM difficultes
        WHERE niveau
        ");
        $stmt->execute();
        return $stmt;
        }
      catch(PDOExeption $e){
          echo "Requete Giveexos fausse : " . $e->getMessage();
      }
    }



//Permet d'afficher l'exercice en fonction du niveau
function selectExo($connect, $classe=null){
    //null part défaut, évite que ça explose si rien

    if (isset($classe)) {
        //si set faire la fonction qui cherche par niveau
        
       try{
            $stmt = $connect->prepare("SELECT exos.id, exos.titre, exos.enonce,exos.reponse, exos.url_img, infos.auteur
                FROM exos
                INNER JOIN infos ON exos.id_info=infos.id
                INNER JOIN difficultes ON exos.id_difficulte=difficultes.niveau
                WHERE difficultes.niveau=$classe
                ORDER BY RAND()
                LIMIT 1 ");

            $stmt->execute();
            return $stmt;
        }
        catch(PDOExeption $e){
            echo "Request failed : " . $e->getMessage();
        }
    }
    else{
        //si pas set, celle sans where, sans niveau
        try
        {
            $stmt = $connect->prepare("SELECT exos.id, exos.titre, exos.enonce,exos.reponse, exos.url_img, infos.auteur
                FROM exos INNER JOIN infos ON exos.id_info=infos.id
                INNER JOIN difficultes ON exos.id_difficulte=difficultes.niveau
                ORDER BY RAND()
                LIMIT 1 ");
            $stmt->execute();
            return $stmt;
        }
        catch(PDOExeption $e){
            echo "Request failed : " . $e->getMessage();
        }
    }

}









 ?>
