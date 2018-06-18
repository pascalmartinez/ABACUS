<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <?php
        // include 'header.php';
        include 'BDD/function_select_exo.php';
        include 'function_affiche_exo.php';
        include 'BDD/ConnectBDD.php';


        ?>
        <title>A toi de jouer!!!</title>
    </head>
    <body >

        <?php $connect = connectDB(); ?>

        <div class="container section" >
            <div class="row">
                <div class="col-10 col-md-3">
                    <div class="input-group d-md-flex mb-3 mt-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNiveau">Niveau</label>
                        </div>
                        <select id ="test" class="custom-select col-6 col-md-4">

                           <?php
                            $stmt = selectNiveau($connect);

                            $stmt = afficherSelectNiveau($stmt,$connect);

                            // echo "balance ton niveau!!!";
                            ?>

                        </select>

                    </div>
                </div>
            </div>
        </div>
        <div class="container section" >
            <div class="row">
                <div class="col-6" id="main">
                    <!-- alors j'ai renommé les id faut que tu rechanges :x -->
                    <!-- dans le fichier js aussi du coup -->

                        <?php
                        $stmt = selectExo($connect);
                        $stmt = afficherExo($stmt, $connect);
                        // $stmt = afficherExo($stmt, $connect);
                        // echo "balance ton exo!!!";
                        ?>

                </div>

            </div>

        </div>
        <script  src="includes/jquery-3.3.1.min.js"></script>

        <script type="text/javascript" src="js/selectLevel.js"></script>
        <!-- <script type="text/javascript" src="js/jqueryExo.js"></script> -->






    </body>
</html>
