<?php
include 'ConnectBDD.php';
include 'function.php';
// include 'login.php';

  // if (isset($_GET['titre'])) {
  //   $titre = $_GET['titre'];
  // }else $titre = "";
  //
  // if (isset($_GET['enonce'])) {
  //   $enonce =  $_GET['enonce'];
  // } else $enonce = "";
  //
  // if (isset($_GET['img'])) {
  //   $img =  $_GET['img'];
  // } else $img = "";
  //
  // if (isset($_GET['id_difficulte'])) {
  //   $id_difficulte = $_GET['id_difficulte'];
  // }else $id_difficulte = "";
?>

<html>
  <head>
    <?php include 'header.php'; ?>
  </head>

  <body> <?php //body_class(); get_header(); ?> <!-- ouvrir header,php -->
      <section class="container">
        <div>
          <form action="request_AddExo.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <span>
                <label for="titre">Titre</label>
                <input id="titre"  type="text" class="form-control"  name="titre" value="" autofocus required>
              </span>
              <span>
                <label for="enonce">Énoncé</label>
                <textarea id="enonce" type="text" class="form-control" name="enonce" value="" required></textarea>
              </span>
              <span>
                <label for="img">Image</label>
                <input id="img" type="text" name="form-control" value="" >
              </span>
              <span>
                <label for="id_difficulte">Difficultée</label>
                <input id="niveau" type="text" class="form-control"  name="id_difficulte" value="" required>
              </span>
            </div>
            <div class="row">
              <span>
                <label>Réponse</label>
                <textarea class="form-control ckeditor" rows="10" name="texte"></textarea>
              </span>
            </div>
            <div class="row">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>
        </div>
      </section>
    <?php //get_footer(); ?>
  </body>
</html>
