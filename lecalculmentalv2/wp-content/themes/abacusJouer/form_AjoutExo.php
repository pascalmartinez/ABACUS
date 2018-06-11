<?php include 'function.php';
include 'index.php';

if (isset($_GET['titre'])) {
  $nom = $_GET['titre'];
}else $nom = "";
if (isset($_GET['enonce'])) {
  $enonce =  $_GET['enonce'];
} else $enonce = "";
if (isset($_GET['img'])) {
  $img =  $_GET['img'];
} else $img = "";

?>
