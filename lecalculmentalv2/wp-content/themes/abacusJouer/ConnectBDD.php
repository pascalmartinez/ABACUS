<?php
include('index.php');
include('login.php');

	function connect(){
		try{

    		$bdd = new PDO('mysql:host=localhost;dbname=BDD_BLOG;charset=utf8', getUser(), getMdp());
    		return $bdd;
		}
		catch(Exception $e){

        	die('Erreur : '.$e->getMessage());
		}

  	die('Erreur : '.$e->getMessage());
		}

?>
