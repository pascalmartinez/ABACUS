
<?php

//SELECT du niveau de jeux

    function afficherNiveau($stmt){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $stmt->fetch()) {
                echo "<option value=".$row['Difficulte.id']." >".$row['niveau']."</option>";
            }
        }

//SELECT de l'exo
    function afficherExo($stmt){
        while($row = $stmt->fetch()) {
            // echo  $row['titre'];
            // echo  $row['enonce'];
            echo "
            <div class='titre'>
               <h3>".$row['titre']."</h3>
                 <a>".$row['enonce']."</a>

            </div>";
            if($row['Exo.img'] != "")
            {
                echo "<img id='my_image'".$row['img']."' alt='img Exo'>";
            }
            echo "
            <div class='auteur'>
                <p class='auteur'>"."article proposé par ".$row['auteur']."</p>
            </div>";


        }
    }
//SELECT du numéro de l'exo
    function afficherNumExo($stmt){
        while($row = $stmt->fetch()) {

            echo "
            <div class='numero'>

                 <a>".$row['Exo.id']."</a>

            </div>";

        }
    }





 ?>
