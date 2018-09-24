<section>
<h2> Mes decks </h2>

<?php
//TODO page 1, 2
$i = 0;
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

<!---On va envoyer l'id du deck avec une methode post si on clique sur modifier -->
<form action="../controleur/editDeck.php?id=<?php echo $donnees[$i][0];?>" method="post">
<input type="hidden" name="id" value="<?php echo $donnees[$i][0]?>" />
<input type="submit" value="Modifier ce deck"/></form>

<form action="../controleur/deleteDeck.php" method="post">
<input type="hidden" name="id" value="<?php echo $donnees[$i][0]?>" />
<input type="submit" value="Supprimer ce deck"/></form>
<hr>

<?php
$i++;

} 
?>