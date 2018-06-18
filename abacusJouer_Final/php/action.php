<?php
     include '../BDD/ConnectBDD.php';
     include '../includes/function_affiche_exo.php';
     include '../BDD/function_select_exo.php';
     //besoin des includes, sinon il est perdu

    if(isset($_GET['id'])){

        $idNiveau = intval($_GET['id']);
        //pour le passer en int, au début ça passé un string je sais pas pourquoi
        //peut être plus besoin de le transfo, test

        $connect = connectDB();

        $stmt = selectExo($connect, $idNiveau);
        afficherExo($stmt);
    }
?>
