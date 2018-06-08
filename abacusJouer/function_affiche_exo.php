
<?php

//SELECT du niveau de jeux
function afficherNiveau($stmt){
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()) {
            echo "<option value=".$row['Exo.id_Difficulte']." >".$row['niveau']."</option>";
        }
    }

    // function afficherNiveau($stmt){
    //         $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //         while($row = $stmt->fetch()) {
    //             echo "<option value=".$row['Difficulte.id']." >".$row['niveau']."</option>";
    //         }
    //     }

//SELECT de l'exo
    function afficherExo($stmt){
        while($row = $stmt->fetch()) {
            echo  "<div class='card bg-light mb-3''>
                    <div class='card-header'>
                        <h6>"."Exercice n°".$row['id']."</h6>
                        <h4>".$row['titre']."</h4>
                        <a>".$row['enonce']."</a>
                    </div>";

        if($row['url_img'] != "")
                    {
                    echo "<img id='my_image'".$row['url_img']."' alt='img Exo'>";
                    }

                    echo "<div class='card-body'>
                    <p class='card-subtitle text-center'>"."article proposé par ".$row['auteur']."</p>
                    </div>
                </div>";
            }
        }


// SELECT de l'exo
    // function afficherExo($stmt){
    //     while($row = $stmt->fetch()) {
    //         // echo  $row['titre'];
    //         // echo  $row['enonce'];
    //         echo "
    //         <div class='titre'>
    //            <h3>".$row['titre']."</h3>
    //              <a>".$row['enonce']."</a>
    //
    //              </div>";
    //         if($row['Exo.img'] != "")
    //         {
    //             echo "<img id='my_image'".$row['img']."' alt='img Exo'>";
    //         }
    //         echo "<div class='auteur'>
    //                 <p class='auteur'>"."article proposé par ".$row['auteur']."</p>
    //               </div>";
    //
    //
    //
    //     }
    // }
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
