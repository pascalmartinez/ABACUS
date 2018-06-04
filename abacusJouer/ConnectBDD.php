<?php
session_start();

function ConnectBDD(){
     $servername = "localhost";
     $username = "root";
     $password = "admin";
     $dbname = "calculBddMichel";

     try {
         $connect = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
         // set the PDO error mode to exception
         $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         return $connect;
         }
     catch(PDOException $e)
         {
         echo "Connection failed: " . $e->getMessage();
         }
 }
  ?>
