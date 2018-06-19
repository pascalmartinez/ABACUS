<?php
// include '../BDD/ConnectBDD.php';
include '../exo.php';
// include '../BDD/traitformAddExo.php';


$reponse_user = $_GET['reponse_user'];
$reponse = $_GET['reponse'];
$score=0;

if ($reponse_user == $reponse ) {
    echo "Bonne réponse";
    $score = +1;
}else {
    echo "Mauvaise réponse";
    $score = +0;
}
    return $score;


 ?>
