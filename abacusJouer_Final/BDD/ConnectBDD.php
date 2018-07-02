<?php

    function connectDB(){

        $servername = "localhost";

        $username = "root";

        $password = "Alchimie12";

        $dbname = "calculBddMichel3";



        try {

            $connect = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);

            // set the PDO error mode to exception

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $connect->array((PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			// echo "Connection ok";
            return $connect;

            }

            catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }

    }


?>
