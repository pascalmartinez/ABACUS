<?php

<<<<<<< HEAD
function ajoutInfo($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf){
  $req = $connect->prepare("INSERT INTO infos (auteur, fichetechnique, codecapacite, etape, secteur, codenaf)
                            VALUES(:auteur, :fichetechnique, :codecapacite, :etape, :secteur, :codenaf)");
  $req->execute(array(
      'auteur' => $auteur,
      'fichetechnique' => $fichetechnique,
      'codecapacite' => $codecapacite,
      'etape' => $etape,
      'secteur' => $secteur,
      'codenaf' => $codenaf
  ));
  echo "Nouvel info enregistré";
}

function ajoutExo($connect, $titre, $enonce, $id_Info, $id_difficulte){
  $req = $connect->prepare("INSERT INTO exos (titre, enonce, $id_Info, $id_difficulte)
                            VALUES(:titre, :enonce, :id_Info, :id_difficulte)");
    $req->execute(array(
      'titre' => $titre,
      'enonce' => $enonce,
      'id_Info' => $id_Info,
      'id_difficulte' => $id_difficulte
    ));
  echo "Nouvel exo enregistré";
}

function id_Info($connect, $auteur){
  try {
    $reponse = $connect->prepare("SELECT * FROM infos WHERE auteur = '".$auteur."'");
    $reponse->execute();
    $row = $reponse->fetch();
    $id_Info = $row['id'];
    return $id_Info;
  }catch (Exception $e) {
      die("Oh noes! There's an error in the query!");
  }
}

function id_difficulte($connect, $id_difficulte){
  try{
    $reponse = $connect->prepare("SELECT id FROM difficultes WHERE niveau = '".$id_difficulte."'");
    $reponse->execute();
    $row = $reponse->fetch();
    $id_difficulte = $row['id'];
    return $id_difficulte;
  }catch (Exception $e) {
      die("Oh noes! There's an error in the query categire! ($id_difficulte)".$e);
  }
}

function nomAuteur($connect){
  $req = $connect->query('SELECT * FROM infos');
  return $req;
}
=======

function formulaire($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf, $id_difficulte, $id_info, $titreExo, $enonce, $fichier){
    try{
        $req = "INSERT INTO infos (auteur, fichetechnique, codecapacite, etape, secteur, codenaf)
        VALUES ( '$auteur', '$fichetechnique', '$codecapacite', '$etape', '$secteur', '$codenaf')";

        $connect->query($req);
        echo "Nouvel auteur enregistré";


        $req = "INSERT INTO exos (id_difficulte, id_info, titre, enonce , url_img)
            VALUES ('$id_difficulte','$id_info', '$titreExo', '$enonce', '$fichier')";
>>>>>>> 744acff8322c0ec4d95f5166c639249434b67264

function difficulte($connect){
  $req = $connect->query('SELECT * FROM difficultes');
  return $req;
}

<<<<<<< HEAD
function formulaire($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf, $titre, $enonce, $id_Info, $id_difficulte){
    try{
        $req = $connect->prepare("INSERT INTO infos (auteur, fichetechnique, codecapacite, etape, secteur, codenaf)
                                  VALUES(:auteur, :fichetechnique, :codecapacite, :etape, :secteur, :codenaf)");
        $req->execute(array(
        'auteur' => $auteur,
        'fichetechnique' => $fichetechnique,
        'codecapacite' => $codecapacite,
        'etape' => $etape,
        'secteur' => $secteur,
        'codenaf' => $codenaf
        ));
        // use exec() because no results are returned
        echo "Nouvel info enregistré";

        $req = $connect->prepare("INSERT INTO exos (titre, enonce, id_Info, id_difficulte)
                                  VALUES(:titre, :enonce, :id_Info, :id_difficulte)");
            $req->execute(array(
              'titre' => $titre,
              'enonce' => $enonce,
              'id_Info' => $id_Info,
              'id_difficulte' => $id_difficulte
            ));
            // use exec() because no results are returned
        echo "Nouvel exo enregistré";
=======
        $connect->query($req);
        echo "Nouvel exercice enregistré";
>>>>>>> 744acff8322c0ec4d95f5166c639249434b67264
    }
    catch(PDOException $e){
        echo "Request failed : " . $e->getMessage();
    }
}


 ?>
