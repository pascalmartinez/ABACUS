<?php
    include 'ConnectBDD.php';
    include 'functionAddExo.php';
    include '../includes/uploadFile.php';



    $connect=connectDB();

    //récupération des valeurs des champs:
    //Partie nomenclature :
    $id_info = $_POST["id_info"];
    $auteur = $_POST["auteur"];
    $fichetechnique = $_POST["fichetechnique"];
    $codecapacite = $_POST["codecapacite"];
    $etape = $_POST["etape"];
    $secteur = $_POST["secteur"];
    $codenaf = $_POST["codenaf"];

    //Partie énoncé :
    $titreExo = $_POST["titreexo"];
    $id_difficulte = $_POST["id_difficulte"];
    $enonce = $_POST["enonce"];

    //Partie réponse :
    $reponse = $_POST['reponse'];

    if(isset($_FILES['fichier']['name'])){
        $fichier = $_FILES['fichier']['name'];
    }
    else{
        $fichier = "";
    }

    if (isset($_POST["name"])) {
        echo 'Cette variable existe, donc je peux l\'enregister.';
    }

    formulaire($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf, $id_difficulte, $id_info, $titreExo, $enonce, $reponse, $fichier);
    fichier();

?>
