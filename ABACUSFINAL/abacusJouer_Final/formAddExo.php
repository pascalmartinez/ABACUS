
<html>
  <head>
    <?php
        session_start();

        include 'includes/header.php';
        include 'BDD/ConnectBDD.php';
        include 'BDD/functionAddExo.php';
        include 'BDD/function_selection.php';
        include 'includes/function_affichage.php';
        // include 'BDD/traitformAddExo.php';
    ?>
  </head>

  <body>
      <?php //body_class(); get_header(); ?> <!-- ouvrir header.php -->
      <?php $connect = connectDB(); ?>
      <section class="container">
        <div class="form" id="formulaire_global" tabindex="-1" role="dialog" aria-labelledby="formulaire_global" aria-hidden="true">
            <div class="form-dialog" role="document">

                <div class="header">
                    <h4 class="title" id="formulaireTitre">Ajouter un exercice</h4>
                </div>
                <div class="body">
                    <h5 class="formulaire-title">Partie nomenclature</h5>
                    <div class="form-group">
                        <form class="container formulaire" action="BDD/traitformAddExo.php" enctype="multipart/form-data" method="post">
                            <div class="form-title">
                                <label for="selectCategorie form-title">Selectioner le nom de l'auteur</label>
                                <select class="form-control form-field" id="selectidInfo" name="id_info">
                                    <?php
                                        $stmt = SelectAuteur($connect);
                                        $stmt = afficherSelectAuteur($stmt,$connect);
                                        // $stmt =  listauteurs($connect);
                                    ?>
                                </select>
                            </div>
                            <div class="formulaire-Contain">
                               <label for="Input form-title">Auteur</label>
                                <input name="auteur" type="text" class="form-field" placeholder="Auteur" value="">
                                <label for="Input form-title">Fiche Technique</label>
                                <input name="fichetechnique" type="text" class="form-field" placeholder="Fiche Technique" >
                                <label for="Input form-title">Code Capacité</label>
                                <input name="codecapacite" type="text" class="form-field" placeholder="Code Capacité" >
                                <label for="Input form-title">Étapes</label>
                                <input name="etape" type="text" class="-field" placeholder="Étapes" >
                                <label for="Input form-title">Secteur</label>
                                <input name="secteur" type="text" class="form-field" placeholder="Secteur" >
                                <label for="Input form-title">Code N.A.F</label>
                                <input name="codenaf" type="text" class="form-field" placeholder="Code NAF" >
                            </div>
                            <h5 class="formulaire-title">Partie énoncé</h5>
                            <div class="formulaire-Contain">
                                <label for="Input form-title">Titre</label>
                                <input name="titreexo" type="text" class="form-field" placeholder="Indiquer votre titre ici">
                            </div>
                            <div class="formulaire-Contain">
                                <label class="input-group-text" for="inputNiveau">Selectioner la difficulté</label>
                                  <select class="custom-select" id="selectDiff"  name="id_difficulte" >
                                    <?php
                                        $stmt = selectNiveau($connect);
                                        $stmt = afficherSelectNiveau($stmt,$connect);
                                    ?>
                                  </select>
                            </div>
                            <div class="formulaire-Contain">
                                <label for="Textarea">Écrire l'énoncé</label>
                                <textarea name="enonce" class="form-field" id="Textarea1" rows="auto"></textarea>
                            </div>
                            <div class="custom-file ">
                                <label class="custom-file-label form-field" for="customFile">Charger une image</label>
                                <input  value="Upload Image"  name="fichier" type="file" class="custom-file-input" id="customFile">
                            </div>
                            <h5 class="formulaire-title">Partie réponse</h5>
                            <div class="formulaire-Contain">
                                <label for="Textarea">Écrire la/les réponse(s)</label>
                                <textarea name="reponse" class="form-field" id="Textarea2" rows="auto"></textarea>
                            </div>
                            <div class="submit-container">
                                <input class="submit-button" type="submit" value="Enregistrer nouvel exercice" action="post" />
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
