<?php
include('login.php');

    function connectDB(){

        $servername = "localhost";

        $dbname = "calculBddMichel3";
        

        try {

            $connect = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", getUser(), getMdp());

            // set the PDO error mode to exception

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo "Connection ok";
            return $connect;

            }

            catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }

    }


?>
