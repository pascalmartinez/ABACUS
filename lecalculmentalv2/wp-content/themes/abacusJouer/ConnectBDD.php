<?php
<<<<<<< HEAD
=======
// include('login.php');
$servername = "localhost";
$username = "root";
$password = "admin";

>>>>>>> 5bb3fc37a57c4650a20ff93c799ace16dfbd52e3

    function connectDB(){

<<<<<<< HEAD
        $servername = "localhost";
=======
    		$bdd = new PDO("mysql:host=$servername;dbname=calculBddMichel;charset=utf8", $username, $password);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  			echo "Connected successfully";
			// return $bdd;
		}
		catch(PDOException $e){
>>>>>>> 5bb3fc37a57c4650a20ff93c799ace16dfbd52e3

        $username = "root";

        $password = "Alchimie12";

        $dbname = "calculBddMichel";
        


        try {

            $connect = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);

            // set the PDO error mode to exception

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						echo "Connection ok";
            return $connect;

            }

            catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }

    }

		connectDB();

?>
