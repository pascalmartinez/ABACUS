<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="Compte_a_rebours/compiled/flipclock.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="Compte_a_rebours/compiled/flipclock.js"></script>
        <?php
        // include 'header.php';
        include 'BDD/function_select_exo.php';
        include 'includes/function_affiche_exo.php';
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
                        <select id ="level" class="custom-select col-6 col-md-4">

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
            <div class="col-12 clock" ></div>
        </div>
        <script type="text/javascript">
            var clock;

            $(document).ready(function() {

                // Instantiate a counter
                clock = new FlipClock($('.clock'), 200, {
                    clockFace: 'Counter',
                    autoStart: true,
                    countdown: true
                });

            });
        </script>

        <div class="container section" >
            <div class="row">
                <div class="col-6" id="val">

                        <?php

                        $stmt = selectExo($connect);
                        $stmt = afficherExo($stmt, $connect);

                        // echo "balance ton exo!!!";
                        ?>
                </div>
            </div>


            <div class="container section" >
                <div class="row">
                    <div class="col-6">
                        <form class="reponse" action="php/reponse.php" method="post">
                            <h3 >Ta réponse</h3>
                            <input type="text" name="reponse_user" id="reponse_user" >
                            <div class="submit-container">
                                <input class="submit-button" type="submit" value="Passer à l'exercice suivant" action="post" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <!-- <button type="button"  id="buttonNext" onclick= "exo()">Exercice suivant</button> -->

        </div>
      </div>

        <script  src="includes/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/jqueryExo.js"></script>
        <script type="text/javascript" src="js/selectLevel.js"></script>



    </body>
</html>
