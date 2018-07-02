
<?php

//SELECT du niveau de jeux
function afficherSelectNiveau($stmt){
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()) {
            echo "<option value=".$row['id'] .">".$row['niveau']."</option>";
        }
    }


//SELECT de l'exo
    function afficherExo($stmt){
        while($row = $stmt->fetch()) {
            echo  "<div class='card bg-light mb-3''>
                    <div class='card-header'>
                        <h6 id='id_exo'>"."Exercice n°".$row['id']."</h6>
                        <h4>".$row['titre']."</h4>
                        <a>".$row['enonce']."</a>
                    </div>";


        if($row['url_img'] != "")
                    {
                        echo "<img id='my_image' class='card-img-top' src='sources/images/".$row['url_img']."' alt='img exo'>";
                    }

                    echo "<div class='card-body'>
                    <p class='card-subtitle text-center'>"."article proposé par ".$row['auteur']."</p>
                    </div>
                </div>";
            }
        }


//SELECT du numéro de l'exo
    function afficherNumExo($stmt){
        while($row = $stmt->fetch()) {

            echo "
            <div class='numero'>

                 <a>".$row['exos.id']."</a>

            </div>";

        }
    }





 ?>
