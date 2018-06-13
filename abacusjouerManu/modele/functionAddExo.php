<?php

function ajoutInfo($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf){
  $req = $connect->prepare('INSERT INTO Info (id, auteur, fichetechnique, codecapacite, etape, secteur, codenaf) VALUES(?,?,?,?,?,?,?)');
  $req->execute(array($auteur, $fichetechnique, $codeCap, $etape, $secteur, $codenaf));
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // return $connect->lastInsertId();
}

function ajoutExo($connect, $id, $titre, $enonce, $id_Info, $id_difficulte){
  $req = $connect->prepare('INSERT INTO Exo (id, titre, enonce, id_Info, id_difficulte)
      VALUES (?,?,?,?,?)');
  $req->execute(array($id, $titre, $enonce, $id_Info, $id_difficulte));
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

function difficulte($connect){
  $req = $connect->query('SELECT * FROM Difficulte');
  return $req;
}

function nomAuteur($connect){
  $req = $connect->query('SELECT * FROM Info');
  return $req;
}


function formulaire($connect, $id_Info, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf, $titreExo, $id_difficulte, $enonce, $fichier){
    try{
        $req = "INSERT INTO Info (id, auteur, fichetechnique, codecapacite, etape, secteur, codenaf)
        VALUES ('id, auteur, fichetechnique, codecapacite, etape, secteur, codenaf')";
        // use exec() because no results are returned
        $connect->exec($req);
        echo "Nouvel exo enregistré";

        $req = "INSERT INTO Exo (id, titre, enonce, $id_Info, id_difficulte)
            VALUES ('id, titre, enonce, id_Info, id_difficulte')";
            // use exec() because no results are returned
        $connect->query($req);
        echo "Nouvel Info enregistré";
    }
    catch(PDOException $e){
        echo "Request failed : " . $e->getMessage();
    }
}


 ?>
