<?php

function formulaireAuteur($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf){
    try{
        $req = "INSERT INTO infos (auteur, fichetechnique, codecapacite, etape, secteur, codenaf)
        VALUES ( '$auteur', '$fichetechnique', '$codecapacite', '$etape', '$secteur', '$codenaf')";

        $connect->query($req);
        echo "Nouvel auteur enregistré";
    }
    catch(PDOException $e){
        echo "Request failed : " . $e->getMessage();
    }
}

function formulaireExo($connect, $id_difficulte, $id_info, $titreExo, $enonce, $fichier){
    try{

        $req = "INSERT INTO exos (id_difficulte, id_info, titre, enonce , url_img)
            VALUES ('$id_difficulte','$id_info', '$titreExo', '$enonce', '$fichier')";


        $connect->query($req);
        echo "Nouvel exercice enregistré";
    }
    catch(PDOException $e){
        echo "Request failed : " . $e->getMessage();
    }
}


 ?>