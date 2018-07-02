<?php

function afficherSelectNiveau($stmt){
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()) {
            echo "<option value=".$row['id'].">".$row['classe']."</option>";
        }
    }

    function afficherSelectAuteur($stmt){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $stmt->fetch()) {
                echo "<option value=".$row['id'].">".$row['auteur']."</option>";
            }
        }


 ?>
