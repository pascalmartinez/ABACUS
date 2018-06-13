<?php
include '../modele/ConnectBDD.php';
include '../modele/functionAddExo.php';

//Partie nomenclature :
// if (isset($_GET['auteur'])) {
//   $auteur = $_GET['auteur'];
// } else $auteur = "";
// if (isset($_GET['fichetechnique'])) {
//   $fichetechnique = $_GET['fichetechnique'];
// } else $fichetechnique = "";
// if (isset($_GET['codecapacite'])) {
//   $codecapacite = $_GET['codecapacite'];
// } else $codecapacite = "";
// if (isset($_GET['etape'])) {
//   $titre = $_GET['etape'];
// } else $etape = "";
// if (isset($_GET['secteur'])) {
//   $secteur = $_GET['secteur'];
// } else $secteur = "";
// if (isset($_GET['codenaf'])) {
//   $codenaf = $_GET['codenaf'];
// } else $codenaf = "";
//
// //Partie énoncé :
// if (isset($_GET['titreExo'])) {
//   $titreExo = $_GET['titreExo'];
// } else $titreExo = "";
// if (isset($_GET['enonce'])) {
//   $enonce = $_GET['enonce'];
// } else $enonce = "";

?>

<html>
  <head>
    <?php include '../includes/header.php'; ?>
  </head>

  <body> <?php //body_class(); get_header(); ?> <!-- ouvrir header.php -->
      <section class="container">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formulairemodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="formulairemodal">Ajouter un exercice</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-body">Partie nomenclature</h5>
                            <div class="form-group">
                                <form class="container formulaire" action="traitformAddExo.php" enctype="multipart/form-data" method="post">
                                    <div class="form-group form-title">
                                        <label for="selectCategorie form-title">Selectioner le nom de l'auteur</label>
                                        <select class="form-control form-field" id="selectidInfo" name="id_Info">
                                          <?php $connect = connectDB();
                                            $grep = nomAuteur($connect);
                                              while ($gdata = $grep->fetch()){ ?>
                                              <option class="text-center" value="<?php echo $gdata['id'] ?>"><?php echo $gdata['auteur']?></option>
                                          <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group form-title">
                                        <label for="exampleFormControlInput1 form-title">Auteur</label>
                                        <input name="auteur" type="text" class="form-control form-field" placeholder="Auteur" value="<?//php print $auteur; ?>">
                                        <label for="exampleFormControlInput1 form-title">Fiche Technique</label>
                                        <input name="fichetechnique" type="text" class="form-control form-field" placeholder="Fiche Technique" value="<?php //print $fichetechnique; ?>">
                                        <label for="exampleFormControlInput1 form-title">Code Capacité</label>
                                        <input name="codecapacite" type="text" class="form-control form-field" placeholder="Code Capacité" value="<?php// print $codecapacite; ?>">
                                        <label for="exampleFormControlInput1 form-title">Étapes</label>
                                        <input name="etape" type="text" class="form-control form-field" placeholder="Étapes" value="<?php //print $etape; ?>">
                                        <label for="exampleFormControlInput1 form-title">Secteur</label>
                                        <input name="secteur" type="text" class="form-control form-field" placeholder="secteur" value="<?php //print $secteur; ?>">
                                        <label for="exampleFormControlInput1 form-title">Code N.A.F</label>
                                        <input name="codenaf" type="text" class="form-control form-field" placeholder="Code NAF" value="<?php //print $codenaf; ?>">
                                    </div>
                                    <h5 class="modal-body">Partie énoncé</h5>
                                    <div class="title form-title">
                                        <label for="exampleFormControlInput1 form-title">Titre</label>
                                        <input name="titreExo" type="text" class="form-control form-field" placeholder="Indiquer votre titre ici" value="<?php //print $titreExo; ?>">
                                    </div>
                                    <div class="form-group form-title">
                                        <label for="selectCategorie form-title">Selectioner la difficulté</label>
                                          <select class="form-control form-field" id="selectDiff"  name="id_difficulte" >
                                            <?php $connect = connectDB();
                                              $grep = difficulte($connect);
                                                while ($gdata = $grep->fetch()){ ?>
                                                <option class="text-center" value="<?php echo $gdata['id'] ?>"><?php echo $gdata['niveau']?></option>
                                            <?php } ?>
                                          </select>
                                    </div>
                                    <div class="form-group form-title">
                                        <label for="exampleFormControlTextarea1 form-title">Écrire l'énoncé</label>
                                        <textarea name="enonce" class="form-control form-field" id="exampleFormControlTextarea1" rows="5" value="<?php// print $enonce; ?>"></textarea>
                                    </div>
                                    <div class="custom-file form-title">
                                        <input  value="Upload Image"  name="fichier" type="file" class="custom-file-input form-title" id="customFile">
                                        <label class="custom-file-label form-field" for="customFile">Charger une image</label>
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
