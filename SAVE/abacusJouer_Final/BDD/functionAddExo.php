<?php

function formulaireAuteur($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf){
    try{
        $reqAuteur = "INSERT INTO infos (auteur, fichetechnique, codecapacite, etape, secteur, codenaf)
        VALUES ('$auteur', '$fichetechnique', '$codecapacite', '$etape', '$secteur', '$codenaf')";

        $connect->query($reqAuteur);
        echo "Nouvel auteur enregistré";
    }
    catch(PDOException $e){
        echo "Request formulaireAuteur failed : " . $e->getMessage();
    }
}

// function formulaireAuteur($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf){
//     try{
//         $req = "INSERT INTO infos (auteur, fichetechnique, codecapacite, etape, secteur, codenaf)
//         VALUES ('$auteur', '$fichetechnique', '$codecapacite', '$etape', '$secteur', '$codenaf')";
//
//         $connect->query($req);
//         echo "Nouvel auteur enregistré";
//     }
//     catch(PDOException $e){
//         echo "Request failed : " . $e->getMessage();
//     }
// }

function formulaireExo($connect, $titreExo, $enonce, $reponse, $fichier, $id_info, $id_difficulte){
    try{

        $reqExo = "INSERT INTO exos (id_difficulte, id_info, titre, enonce, url_img, reponse )
            VALUES ('$id_difficulte','$id_info', '$titreExo', '$enonce', '$fichier', '$reponse')";

        $connect->query($reqExo);
        echo "Nouvel exercice enregistré";
    }
    catch(PDOException $e){
        echo "Request formulaireExo failed : " . $e->getMessage();
    }
}


 ?>
