<?php
include('login.php');

	function connect(){
		try{

    		$bdd = new PDO('mysql:host=localhost;dbname=calculBddMichel;charset=utf8', getUser(), getMdp());
    		return $bdd;
		}
		catch(Exception $e){

        	die('Erreur : '.$e->getMessage());
		}

  	die('Erreur : '.$e->getMessage());
		}

?>
