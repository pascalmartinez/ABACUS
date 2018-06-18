<?php
    include '../modele/ConnectBDD.php';
    include '../modele/functionAddExo.php';
    // include 'uploadFile.php';

    $connect=connectDB();
    // récupération des valeurs des champs:
    // Partie nomenclature :
    $auteur = $_POST["auteur"];
    $fichetechnique = $_POST["fichetechnique"];
    $codecapacite = $_POST["codecapacite"];
    $etape = $_POST["etape"];
    $secteur = $_POST["secteur"];
    $codenaf = $_POST["codenaf"];

    //Partie énoncé :
    $titre = $_POST["titre"];
    $enonce = $_POST["enonce"];
    $id_Info = $_POST["id_Info"];
    $id_difficulte = $_POST["id_difficulte"];



    // if(isset($_FILES['fichier']['name'])){
    //     $fichier = $_FILES['fichier']['name'];
    // }
    // else{
    //     $fichier = "";
    // }
    //
    // if (isset($_POST["nom"])) {
    //     echo 'Cette variable existe, donc je peux l\'afficher.';
    // }

    formulaire($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf, $titre, $enonce, $id_Info, $id_difficulte)
    // fichier();
?>
