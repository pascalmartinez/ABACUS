<?php
include 'ConnectBDD.php';
// include 'function.php';
// include 'login.php';
?>

<html>
  <head>
    <?php include 'header.php'; ?>
  </head>

  <body> <?php //body_class(); get_header(); ?> <!-- ouvrir header.php -->
      <section class="container">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formulairemodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="formulairemodal">Ajouter d'un exercice</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-body">Partie nomenclature</h5>
                            <div class="form-group">
                                <form class="container formulaire" action="traitForm.php" enctype="multipart/form-data" method="post">
                                    <div class="form-group form-title">
                                        <label for="exampleFormControlInput1 form-title">Auteur</label>
                                        <input name="auteur" type="text" class="form-control form-field" placeholder="Auteur">
                                        <label for="exampleFormControlInput1 form-title">Fiche Technique</label>
                                        <input name="FT" type="text" class="form-control form-field" placeholder="Fiche Technique">
                                        <label for="exampleFormControlInput1 form-title">Numéro d'Exercice</label>
                                        <input name="numExo" type="text" class="form-control form-field" placeholder="N° exercice">
                                        <label for="exampleFormControlInput1 form-title">Code Capacité</label>
                                        <input name="codeCap" type="text" class="form-control form-field" placeholder="Code Capacité">
                                        <label for="exampleFormControlInput1 form-title">Difficulté</label>
                                        <input name="diff" type="text" class="form-control form-field" placeholder="Diff">
                                        <label for="exampleFormControlInput1 form-title">Étapes</label>
                                        <input name="etape" type="text" class="form-control form-field" placeholder="Étapes">
                                        <label for="exampleFormControlInput1 form-title">Secteur</label>
                                        <input name="secteur" type="text" class="form-control form-field" placeholder="secteur">
                                        <label for="exampleFormControlInput1 form-title">Code N.A.F</label>
                                        <input name="codenaf" type="text" class="form-control form-field" placeholder="Code NAF">
                                    </div>
                                    <div class="title form-title">
                                        <label for="exampleFormControlInput1 form-title">Titre</label>
                                        <input name="titreExo" type="text" class="form-control form-field" placeholder="Indiquer votre titre ici">
                                    </div>
                                    <h5 class="modal-body">Partie énoncé</h5>
                                    <div class="custom-file form-title">
                                        <input  value="Upload Image"  name="fichier" type="file" class="custom-file-input form-title" id="customFile">
                                        <label class="custom-file-label form-field" for="customFile">Charger une image</label>
                                    </div>
                                    <div class="form-group form-title">
                                        <label for="selectCategorie form-title">Selection de groupe</label>
                                        <select class="form-control form-field" id="selectCategorie" name="categorie">
                                        <?php
                                            // $stmt = selectCategorie($connect);
                                            // afficherSelectCategorie($stmt);
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group form-title">
                                        <label for="exampleFormControlTextarea1 form-title">Votre message</label>
                                        <textarea name="message" class="form-control form-field" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                            </div>
                                    <div class="submit-container modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <input class="submit-button" type="submit" value="Submit" action="post" />
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <?php //get_footer(); ?>
  </body>
</html>
