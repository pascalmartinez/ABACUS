<?php
// include('login.php');
$servername = "localhost";
$username = "root";
$password = "admin";


	function connect(){
		try{

    		$bdd = new PDO("mysql:host=$servername;dbname=calculBddMichel;charset=utf8", $username, $password);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  			echo "Connected successfully";
			// return $bdd;
		}
		catch(PDOException $e){

        	die('Erreur : '.$e->getMessage());
		}

  	die('Erreur : '.$e->getMessage());
		}

?>
