<?php
     include '../BDD/ConnectBDD.php';
     include '../includes/function_affiche_exo.php';
     include '../BDD/function_select_exo.php';
    

    if(isset($_GET['id'])){

        $idNiveau = intval($_GET['id']);


        $connect = connectDB();

        $stmt = selectExo($connect, $idNiveau);
        afficherExo($stmt);
    }
?>
