<?php
include '../BDD/ConnectBDD.php';
// include '../exo.php';
// include '../BDD/traitformAddExo.php';
include '../BDD/function_select_exo.php';


$connect=connectDB();
$score = 0;

function compareReponse($connect){

    $reponse_user = $_POST['reponse_user'];
    // $idExo=$connect->query("SELECT id, enonce FROM exos ");
    // $idReponse= $connect->query("SELECT id, reponse FROM exos ");
    // printf($idReponse);
    // var_dump($reponse_user);
    if ($donnee) {
        $data=$donnee->fetch();
        $reponse = $data['reponse'];
        var_dump($data);


        if ($reponse_user == $reponse ) {
            echo "Bonne réponse";
            $score = +1;
        }else {
            echo "Mauvaise réponse";
            $score = +0;
        }
    }
    // $reqReponse =$connect->query("SELECT id, reponse FROM exos ");

}

        // return $score;



    compareReponse($connect);

function UpScore ($connect){


    $upScore=$connect->query("UPDATE score FROM users");

}



 ?>
