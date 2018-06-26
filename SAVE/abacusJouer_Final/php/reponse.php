<?php
include '../BDD/ConnectBDD.php';
// include '../exo.php';
// include '../BDD/traitformAddExo.php';


$connect=connectDB();
$score = 0;

function compareReponse($connect){


    $reponse_user = $_POST['reponse_user'];

    $reqReponse =$connect->query("SELECT id, reponse FROM exos ");

    $data=$reqReponse->fetch();
    $reponse = $data['reponse'];
    var_dump($data);


    if ($reponse_user == $reponse ) {
        echo "Bonne réponse";
        $score = +1;
    }else {
        echo "Mauvaise réponse";
        $score = +0;
    }



        // return $score;
}


    compareReponse($connect);

function UpScore ($connect){


    $upScore=$connect->query("INSERT INTO score FROM users");

}



 ?>
