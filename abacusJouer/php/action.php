<?php
    include '../BDD/ConnectBDD.php';
    include '../function_affiche_exo.php';
    include '../BDD/function_select_exo.php';

    if(isset($_GET['idc'])){
        $idCategorie = $_GET['idc'];

        $connect = connectBDD();
        $stmt = selectExo($connect, $idCategorie);
        afficherExo($stmt);
    }
?>
