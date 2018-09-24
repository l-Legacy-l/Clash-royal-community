<section>
<h2> Decks de la communauté </h2>

<?php
    $i = 0;
    if(isset($_POST['type'])) //Si je viens du form de la recherche
    {
        $type = htmlspecialchars($_POST['type']);

        //Si on a des lignes alors c'est qu'il y a des decks de cette catégorie sinon on préviens l'utilisateur
        if($nbLigne > 0)
        {
            while ($i < $nbLigne)
            {
                if($donnees[$i]['type'] == $type) //Si on a une correspondance de catégorie pour la recherche
                {
                    ?>
                    <div class="rescensement"><span id="gras">Pseudo: </span><a href="../controleur/profil.php?id=<?php echo $donnees[$i]['pseudo']; ?>"><?php echo $donnees[$i]['pseudo']; ?></a></div>
                    <div class="rescensement"><span id="gras">Nom: </span><?php echo $donnees[$i]['nom']; ?></div>
                    <div class="rescensement"><span id="gras">Type : </span><?php echo $donnees[$i]['type']; ?></div>
                    <div class="rescensement"><span id="gras">Coût en élixir: </div><?php echo $donnees[$i]['cout']; ?></div>
                    <div class="rescensement"><span id="gras">Carte 1: </span><?php echo $donnees[$i]['carte1']; ?></div>
                    <div class="rescensement"><span id="gras">Carte 2: </span><?php echo $donnees[$i]['carte2']; ?></div>
                    <div class="rescensement"><span id="gras">Carte 3: </span><?php echo $donnees[$i]['carte3']; ?></div>
                    <div class="rescensement"><span id="gras">Carte 4: </span><?php echo $donnees[$i]['carte4']; ?></div>
                    <div class="rescensement"><span id="gras">Carte 5: </span><?php echo $donnees[$i]['carte5']; ?></div>
                    <div class="rescensement"><span id="gras">Carte 6: </span><?php echo $donnees[$i]['carte6']; ?></div>
                    <div class="rescensement"><span id="gras">Carte 7: </span><?php echo $donnees[$i]['carte7']; ?></div>
                    <div class="rescensement"><span id="gras">Carte 8: </span><?php echo $donnees[$i]['carte8']; ?></div>
                    <div class="rescensement"><span id="gras">Description: </span><?php echo $donnees[$i]['description']; ?></div>
    
                    <hr>
    
                    <?php
                }
                $i++;
            }
        }

        else
        {
            echo "<p> Aucun deck ne correspond à cette catégorie. </p>";
        }
    }

    else
    {    
        if($nbLigne > 0)
        {
            while ($i < $nbLigne)
            {           
                ?>
                <div class="rescensement"><span id="gras">Pseudo: </span><a href="../controleur/profil.php?id=<?php echo $donnees[$i]['pseudo']; ?>"><?php echo $donnees[$i]['pseudo']; ?></a></div>
                <div class="rescensement"><span id="gras">Nom: </span><?php echo $donnees[$i]['nom']; ?></div>
                <div class="rescensement"><span id="gras">Type : </span><?php echo $donnees[$i]['type']; ?></div>
                <div class="rescensement"><span id="gras">Coût en élixir: </span><?php echo $donnees[$i]['cout']; ?></div>
                <div class="rescensement"><span id="gras">Carte 1: </span><?php echo $donnees[$i]['carte1']; ?></div>
                <div class="rescensement"><span id="gras">Carte 2: </span><?php echo $donnees[$i]['carte2']; ?></div>
                <div class="rescensement"><span id="gras">Carte 3: </span><?php echo $donnees[$i]['carte3']; ?></div>
                <div class="rescensement"><span id="gras">Carte 4: </span><?php echo $donnees[$i]['carte4']; ?></div>
                <div class="rescensement"><span id="gras">Carte 5: </span><?php echo $donnees[$i]['carte5']; ?></div>
                <div class="rescensement"><span id="gras">Carte 6: </span><?php echo $donnees[$i]['carte6']; ?></div>
                <div class="rescensement"><span id="gras">Carte 7: </span><?php echo $donnees[$i]['carte7']; ?></div>
                <div class="rescensement"><span id="gras">Carte 8: </span><?php echo $donnees[$i]['carte8']; ?></div>
                <div class="rescensement"><span id="gras">Description: </span><?php echo $donnees[$i]['description']; ?></div>           
            
                <?php 
                //Si je suis admin je peux modifier
                if($_SESSION['pseudo'] == "fabio")
                {
                ?>
                    <form action="../controleur/editDeck.php?id=<?php echo $donnees[$i][0];?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $donnees[$i][0]?>" />
                    <input type="submit" value="Modifier ce deck"/></form>
        
                    <form action="../controleur/deleteDeck.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $donnees[$i][0]?>" />
                    <input type="submit" value="Supprimer ce deck"/></form>
                <?php
                }
                ?>
                <!---On va envoyer l'id du deck avec une methode post si on clique sur modifier -->
                <hr>
                <?php
                $i++;
            }
        }

        else
        {
            echo "<p>Aucun deck n'a encore été ajouté</p>";
        }
           
        //On affiche ici la page suivante si on retourne plus de 5 résultats
        echo 'Page: ';
        for($i = 1; $i <= $nbPage; $i++)
        {
            //Si on est sur la même page que la page courante, on affiche le numéro de la page sans pouvor recliquer dessus 
            if($i == $pageCourante)
            {
                echo $i.' ';
            }
    
            else
            {
                //Le numéro de page ne correspond pas à la page courante, elle est devient cliquable
                echo '<a href="listeDeck.php?page='.$i.'">'.$i.'</a>';
            }
        }
    
    }

?>