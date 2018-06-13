<?php
    // include '../modele/ConnectBDD.php';
    include '../modele/functionAddExo.php';
    include 'uploadFile.php';

    // $array = array(
    //   // "id_Info" => $_POST['id_Info'],
    //   "auteur" => $_POST['auteur'],
    //   "fichetechnique" => $_POST['fichetechnique'],
    //   "codecapacite" => $_POST['codecapacite'],
    //   "etape" => $_POST['etape'],
    //   "secteur" => $_POST['secteur'],
    //   "codenaf" => $_POST['codenaf'],
    //   "titreExo" => $_POST['titreExo'],
    //   // "id_difficulte" => $_POST['id_difficulte'],
    //   "enonce" => $_POST['enonce']);
    // $cpt = 0;
	  // $error = 0;
	  //    foreach ($array as $key => $value) {
		//      $cpt++;
		//       if($value == NULL){
	  //        $error++;
		//       }
	  //    }
    //récupération des valeurs des champs:
    //Partie nomenclature :

    $connect=connectDB();

    $id_Info = $_POST["id_Info"];
    $auteur = $_POST["auteur"];
    $fichetechnique = $_POST["fichetechnique"];
    $codecapacite = $_POST["codecapacite"];
    $etape = $_POST["etape"];
    $secteur = $_POST["secteur"];
    $codenaf = $_POST["codenaf"];

    //Partie énoncé :
    $titreExo = $_POST["titreExo"];
    $id_difficulte = $_POST["id_difficulte"];
    $enonce = $_POST["enonce"];




    if(isset($_FILES['fichier']['name'])){
        $fichier = $_FILES['fichier']['name'];
    }
    else{
        $fichier = "";
    }

    if (isset($_POST["nom"])) {
        echo 'Cette variable existe, donc je peux l\'afficher.';
    }
    // if ($cpt == sizeof($array) && $error > 0) {
    //
    // 		echo	"<script type=\"text/javascript\">
    // 					window.alert('veuillez remplir toute les champs pour envoyer le formulaire');
    // 					window.location.href = 'formAddExo.php?var=$key&auteur=$auteur&fichetechnique=$fichetechnique&codecapacite=$codecapacite&etape=$etape&secteur=$secteur&codenaf=$codenaf&titreExo=$titreExo&enonce=$enonce';
    // 					</script>";
    // 			exit;
    //
    // 	}else if ($cpt == sizeof($array) && $error == 0){
    // 		$connect = connectDB();
    // 		$id_info = ajoutInfo($connect, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf);
    // 		ajoutExo($connect, $titreExo, $enonce, $id_Info, $id_difficulte);
    //
    // 		echo	"<script type=\"text/javascript\">
    // 					window.alert('formulaire valide !');
    // 					window.location.href = 'formAddExo.php';
    // 					</script>";,
    // 			exit;
    //
    // 	}
    formulaire($connect, $id_Info, $auteur, $fichetechnique, $codecapacite, $etape, $secteur, $codenaf, $titreExo, $id_difficulte, $enonce, $fichier)
    fichier();
?>
