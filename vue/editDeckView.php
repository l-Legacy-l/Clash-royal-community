<section>

    <h3> Modification du deck </h3>
    <form action="../controleur/editDeck.php?id=<?php echo $getId;?>" method="post">
        <table class = "profil">
<tr>    
    <td>Nom du deck (facultatif):</td>
    <td><input type="text" name="nom" value="<?php echo $donnees['nom'] ?>" /></td>
</tr>
<tr>
    <td>Type :</td>
    <td><select name="type" value="<?php echo $donnees['type'] ?>">
        <option value="1">Rush</option>
        <option value="2">Tank</option>
        <option value="3">Spawner/Setup</option>
        <option value="4">Siège/Bâtiments</option>
        <option value="5">Grattage</option>
        <option value="6">Autre/Insolite</option>
    </select></td>
</tr>
<tr>    
    <td>Coût en elixir</td>
    <td><input type="number" name="cout" step="0.1" value="<?php echo $donnees['cout'] ?>" required /></td>
</tr>
<tr>
    <td>Carte 1:</td>
    <td><select name="carte1" class="carte" value="<?php echo $donnees['carte1'] ?>" onchange="disabledChamp();">
        <optgroup label= "Commune">
            
            <option></option>
            <option class = "carte1" name="Archers">Archers</option>
            <option class = "carte1" name="Barbares">Barbares</option>
            <option class = "carte1" name="Barbares d'élite">Barbares d'élite</option>
            <option class = "carte1" name="Bombardier">Bombardier</option>
            <option class = "carte1" name="Canon">Canon</option>
            <option class = "carte1" name="Chauve-souris">Chauve-souris</option>
            <option class = "carte1" name="Chevalier">Chevalier</option>
            <option class = "carte1" name="Electrocution">Electrocution</option>
            <option class = "carte1" name="Esprit de feu">Esprit de feu</option>
            <option class = "carte1" name="Esprit de glace">Esprit de glace</option>
            <option class = "carte1" name="Flèches">Flèches</option>
            <option class = "carte1" name="Fût à squelettes">Fût à squelettes</option>
            <option class = "carte1" name="Gang de gobelins">Gang de gobelins</option>
            <option class = "carte1" name="Gargouilles">Gargouilles</option>
            <option class = "carte1" name="Géant royal">Géant royal</option>
            <option class = "carte1" name="Gobelins">Gobelins</option>
            <option class = "carte1" name="Gobelins à lance">Gobelins à lance</option>
            <option class = "carte1" name="Horde de gargouilles">Horde de gargouilles</option>
            <option class = "carte1" name="Mortier">Mortier</option>
            <option class = "carte1" name="Squelettes">Squelettes</option>
            <option class = "carte1" name="Tesla">Tesla</option>

        </optgroup>
        <optgroup label = "Rare">
            <option class = "carte1" name="Bélier de combat">Bélier de combat</option>
            <option class = "carte1" name="Cabane de barbares">Cabane de barbares</option>
            <option class = "carte1" name="Cabane de gobelins">Cabane de gobelins</option>
            <option class = "carte1" name="Chevaucheur de cochon">Chevaucheur de cochon</option>
            <option class = "carte1" name="Extracteur d'élixir">Extracteur d'élixir</option>
            <option class = "carte1" name="Fournaise">Fournaise</option>
            <option class = "carte1" name="Géant">Géant</option>
            <option class = "carte1" name="Gobelin à sarbacane">Gobelin à sarbacane</option>
            <option class = "carte1" name="Golem de glace">Golem de glace</option>
            <option class = "carte1" name="Machine volante">Machine volante</option>
            <option class = "carte1" name="Méga gargouille">Méga gargouille</option>
            <option class = "carte1" name="Mini P.E.K.K.A.">Mini P.E.K.K.A.</option>
            <option class = "carte1" name="Mousquetaire">Mousquetaire</option>
            <option class = "carte1" name="Pierre tombale">Pierre tombale</option>
            <option class = "carte1" name="Sorcier">Sorcier</option>
            <option class = "carte1" name="Tour de l'enfer">Tour de l'enfer</option>
            <option class = "carte1" name="Tour à bombes">Tour à bombes</option>
            <option class = "carte1" name="Trois mousquetaires">Trois mousquetaires</option>
            <option class = "carte1" name="Valkyrie">Valkyrie</option>
        </optgroupe>

        <optgroup label = "Epiques">
            <option name="Arc-X">Arc-X</option>
            <option name="Armée de squelettes">Armée de squelettes</option>
            <option name="Ballon">Ballon</option>
            <option name="Bébé dragon">Bébé dragon</option>
            <option name="Bouliste">Bouliste</option>
            <option name="Bourreau">Bourreau</option>
            <option name="Chariot à canon">Chariot à canon</option>
            <option name="Clonage">Clonage</option>
            <option name="Foudre">Foudre</option>
            <option name="Fût à gobelins">Fût à gobelins</option>
            <option name="Gardes">Gardes</option>
            <option name="Gel">Gel</option>
            <option name="Golem">Golem</option>
            <option name="Miroir">Miroir</option>
            <option name="Poison">Poison</option>
            <option name="Prince">Prince</option>
            <option name="Prince ténébreux">Prince ténébreux</option>
            <option name="P.E.K.K.A.">P.E.K.K.A.</option>
            <option name="Rage">Rage</option>
            <option name="Tornade">Tornade</option>
        </optgroupe>

        <optgroup label = "Légendaires">
            <option name="Bûcheron">Bûcheron</option>
            <option name="Cimetière">Cimetière</option>
            <option name="Dragon de l'enfer">Dragon de l'enfer</option>
            <option name="Electro-sorcier">Electro-sorcier</option>
            <option name="La bûche">La bûche</option>
            <option name="Méga chevalier">Méga chevalier</option>
            <option name="Mineur">Mineur</option>
            <option name="Molosse de lave">Molosse de lave</option>
            <option name="Princesse">Princesse</option>
            <option name="Sorcier de glace">Sorcier de glace</option>
            <option name="Sorcière de la nuit">Sorcière de la nuit</option>
            <option name="Voleuse">Voleuse</option>
            <option name="Zappy">Zappy</option>
        </optgroupe>
    </select></td> 
</tr>
    <tr>
    <td>Carte 2:</td>
    <td><select name="carte2"  class="carte" value="<?php echo $donnees['carte2'] ?>" onchange="disabledChamp();">
    <optgroup label= "Commune">
            <option></option>
            <option name="Archers">Archers</option>
            <option name="Barbares">Barbares</option>
            <option name="Barbares d'élite">Barbares d'élite</option>
            <option name="Bombardier">Bombardier</option>
            <option name="Canon">Canon</option>
            <option name="Chauve-souris">Chauve-souris</option>
            <option name="Chevalier">Chevalier</option>
            <option name="Electrocution">Electrocution</option>
            <option name="Esprit de feu">Esprit de feu</option>
            <option name="Esprit de glace">Esprit de glace</option>
            <option name="Flèches">Flèches</option>
            <option name="Fût à squelettes">Fût à squelettes</option>
            <option name="Gang de gobelins">Gang de gobelins</option>
            <option name="Gargouilles">Gargouilles</option>
            <option name="Géant royal">Géant royal</option>
            <option name="Gobelins">Gobelins</option>
            <option name="Gobelins à lance">Gobelins à lance</option>
            <option name="Horde de gargouilles">Horde de gargouilles</option>
            <option name="Mortier">Mortier</option>
            <option name="Squelettes">Squelettes</option>
            <option name="Tesla">Tesla</option>

        </optgroup>
        <optgroup label = "Rare">
            <option name="Bélier de combat">Bélier de combat</option>
            <option name="Cabane de barbares">Cabane de barbares</option>
            <option name="Cabane de gobelins">Cabane de gobelins</option>
            <option name="Chevaucheur de cochon">Chevaucheur de cochon</option>
            <option name="Extracteur d'élixir">Extracteur d'élixir</option>
            <option name="Fournaise">Fournaise</option>
            <option name="Géant">Géant</option>
            <option name="Gobelin à sarbacane">Gobelin à sarbacane</option>
            <option name="Golem de glace">Golem de glace</option>
            <option name="Machine volante">Machine volante</option>
            <option name="Méga gargouille">Méga gargouille</option>
            <option name="Mini P.E.K.K.A.">Mini P.E.K.K.A.</option>
            <option name="Mousquetaire">Mousquetaire</option>
            <option name="Pierre tombale">Pierre tombale</option>
            <option name="Sorcier">Sorcier</option>
            <option name="Tour de l'enfer">Tour de l'enfer</option>
            <option name="Tour à bombes">Tour à bombes</option>
            <option name="Trois mousquetaires">Trois mousquetaires</option>
            <option name="Valkyrie">Valkyrie</option>
        </optgroupe>

        <optgroup label = "Epiques">
            <option name="Arc-X">Arc-X</option>
            <option name="Armée de squelettes">Armée de squelettes</option>
            <option name="Ballon">Ballon</option>
            <option name="Bébé dragon">Bébé dragon</option>
            <option name="Bouliste">Bouliste</option>
            <option name="Bourreau">Bourreau</option>
            <option name="Chariot à canon">Chariot à canon</option>
            <option name="Clonage">Clonage</option>
            <option name="Foudre">Foudre</option>
            <option name="Fût à gobelins">Fût à gobelins</option>
            <option name="Gardes">Gardes</option>
            <option name="Gel">Gel</option>
            <option name="Golem">Golem</option>
            <option name="Miroir">Miroir</option>
            <option name="Poison">Poison</option>
            <option name="Prince">Prince</option>
            <option name="Prince ténébreux">Prince ténébreux</option>
            <option name="P.E.K.K.A.">P.E.K.K.A.</option>
            <option name="Rage">Rage</option>
            <option name="Tornade">Tornade</option>
        </optgroupe>

        <optgroup label = "Légendaires">
            <option name="Bûcheron">Bûcheron</option>
            <option name="Cimetière">Cimetière</option>
            <option name="Dragon de l'enfer">Dragon de l'enfer</option>
            <option name="Electro-sorcier">Electro-sorcier</option>
            <option name="La bûche">La bûche</option>
            <option name="Méga chevalier">Méga chevalier</option>
            <option name="Mineur">Mineur</option>
            <option name="Molosse de lave">Molosse de lave</option>
            <option name="Princesse">Princesse</option>
            <option name="Sorcier de glace">Sorcier de glace</option>
            <option name="Sorcière de la nuit">Sorcière de la nuit</option>
            <option name="Voleuse">Voleuse</option>
            <option name="Zappy">Zappy</option>
        </optgroupe>
    </select></td> 
</tr>
    <tr>
    <td>Carte 3:</td>
    <td><select name="carte3"  class="carte" value="<?php echo $donnees['carte3'] ?>" onchange="disabledChamp();">
    <optgroup label= "Commune">
            <option></option>
            <option name="Archers">Archers</option>
            <option name="Barbares">Barbares</option>
            <option name="Barbares d'élite">Barbares d'élite</option>
            <option name="Bombardier">Bombardier</option>
            <option name="Canon">Canon</option>
            <option name="Chauve-souris">Chauve-souris</option>
            <option name="Chevalier">Chevalier</option>
            <option name="Electrocution">Electrocution</option>
            <option name="Esprit de feu">Esprit de feu</option>
            <option name="Esprit de glace">Esprit de glace</option>
            <option name="Flèches">Flèches</option>
            <option name="Fût à squelettes">Fût à squelettes</option>
            <option name="Gang de gobelins">Gang de gobelins</option>
            <option name="Gargouilles">Gargouilles</option>
            <option name="Géant royal">Géant royal</option>
            <option name="Gobelins">Gobelins</option>
            <option name="Gobelins à lance">Gobelins à lance</option>
            <option name="Horde de gargouilles">Horde de gargouilles</option>
            <option name="Mortier">Mortier</option>
            <option name="Squelettes">Squelettes</option>
            <option name="Tesla">Tesla</option>

        </optgroup>
        <optgroup label = "Rare">
            <option name="Bélier de combat">Bélier de combat</option>
            <option name="Cabane de barbares">Cabane de barbares</option>
            <option name="Cabane de gobelins">Cabane de gobelins</option>
            <option name="Chevaucheur de cochon">Chevaucheur de cochon</option>
            <option name="Extracteur d'élixir">Extracteur d'élixir</option>
            <option name="Fournaise">Fournaise</option>
            <option name="Géant">Géant</option>
            <option name="Gobelin à sarbacane">Gobelin à sarbacane</option>
            <option name="Golem de glace">Golem de glace</option>
            <option name="Machine volante">Machine volante</option>
            <option name="Méga gargouille">Méga gargouille</option>
            <option name="Mini P.E.K.K.A.">Mini P.E.K.K.A.</option>
            <option name="Mousquetaire">Mousquetaire</option>
            <option name="Pierre tombale">Pierre tombale</option>
            <option name="Sorcier">Sorcier</option>
            <option name="Tour de l'enfer">Tour de l'enfer</option>
            <option name="Tour à bombes">Tour à bombes</option>
            <option name="Trois mousquetaires">Trois mousquetaires</option>
            <option name="Valkyrie">Valkyrie</option>
        </optgroupe>

        <optgroup label = "Epiques">
            <option name="Arc-X">Arc-X</option>
            <option name="Armée de squelettes">Armée de squelettes</option>
            <option name="Ballon">Ballon</option>
            <option name="Bébé dragon">Bébé dragon</option>
            <option name="Bouliste">Bouliste</option>
            <option name="Bourreau">Bourreau</option>
            <option name="Chariot à canon">Chariot à canon</option>
            <option name="Clonage">Clonage</option>
            <option name="Foudre">Foudre</option>
            <option name="Fût à gobelins">Fût à gobelins</option>
            <option name="Gardes">Gardes</option>
            <option name="Gel">Gel</option>
            <option name="Golem">Golem</option>
            <option name="Miroir">Miroir</option>
            <option name="Poison">Poison</option>
            <option name="Prince">Prince</option>
            <option name="Prince ténébreux">Prince ténébreux</option>
            <option name="P.E.K.K.A.">P.E.K.K.A.</option>
            <option name="Rage">Rage</option>
            <option name="Tornade">Tornade</option>
        </optgroupe>

        <optgroup label = "Légendaires">
            <option name="Bûcheron">Bûcheron</option>
            <option name="Cimetière">Cimetière</option>
            <option name="Dragon de l'enfer">Dragon de l'enfer</option>
            <option name="Electro-sorcier">Electro-sorcier</option>
            <option name="La bûche">La bûche</option>
            <option name="Méga chevalier">Méga chevalier</option>
            <option name="Mineur">Mineur</option>
            <option name="Molosse de lave">Molosse de lave</option>
            <option name="Princesse">Princesse</option>
            <option name="Sorcier de glace">Sorcier de glace</option>
            <option name="Sorcière de la nuit">Sorcière de la nuit</option>
            <option name="Voleuse">Voleuse</option>
            <option name="Zappy">Zappy</option>
        </optgroupe>
    </select></td> 
</tr>
    <tr>
    <td>Carte 4:</td>
    <td><select name="carte4"  class="carte" value="<?php echo $donnees['carte4'] ?>" onchange="disabledChamp();">
    <optgroup label= "Commune">
            <option></option>
            <option name="Archers">Archers</option>
            <option name="Barbares">Barbares</option>
            <option name="Barbares d'élite">Barbares d'élite</option>
            <option name="Bombardier">Bombardier</option>
            <option name="Canon">Canon</option>
            <option name="Chauve-souris">Chauve-souris</option>
            <option name="Chevalier">Chevalier</option>
            <option name="Electrocution">Electrocution</option>
            <option name="Esprit de feu">Esprit de feu</option>
            <option name="Esprit de glace">Esprit de glace</option>
            <option name="Flèches">Flèches</option>
            <option name="Fût à squelettes">Fût à squelettes</option>
            <option name="Gang de gobelins">Gang de gobelins</option>
            <option name="Gargouilles">Gargouilles</option>
            <option name="Géant royal">Géant royal</option>
            <option name="Gobelins">Gobelins</option>
            <option name="Gobelins à lance">Gobelins à lance</option>
            <option name="Horde de gargouilles">Horde de gargouilles</option>
            <option name="Mortier">Mortier</option>
            <option name="Squelettes">Squelettes</option>
            <option name="Tesla">Tesla</option>

        </optgroup>
        <optgroup label = "Rare">
            <option name="Bélier de combat">Bélier de combat</option>
            <option name="Cabane de barbares">Cabane de barbares</option>
            <option name="Cabane de gobelins">Cabane de gobelins</option>
            <option name="Chevaucheur de cochon">Chevaucheur de cochon</option>
            <option name="Extracteur d'élixir">Extracteur d'élixir</option>
            <option name="Fournaise">Fournaise</option>
            <option name="Géant">Géant</option>
            <option name="Gobelin à sarbacane">Gobelin à sarbacane</option>
            <option name="Golem de glace">Golem de glace</option>
            <option name="Machine volante">Machine volante</option>
            <option name="Méga gargouille">Méga gargouille</option>
            <option name="Mini P.E.K.K.A.">Mini P.E.K.K.A.</option>
            <option name="Mousquetaire">Mousquetaire</option>
            <option name="Pierre tombale">Pierre tombale</option>
            <option name="Sorcier">Sorcier</option>
            <option name="Tour de l'enfer">Tour de l'enfer</option>
            <option name="Tour à bombes">Tour à bombes</option>
            <option name="Trois mousquetaires">Trois mousquetaires</option>
            <option name="Valkyrie">Valkyrie</option>
        </optgroupe>

        <optgroup label = "Epiques">
            <option name="Arc-X">Arc-X</option>
            <option name="Armée de squelettes">Armée de squelettes</option>
            <option name="Ballon">Ballon</option>
            <option name="Bébé dragon">Bébé dragon</option>
            <option name="Bouliste">Bouliste</option>
            <option name="Bourreau">Bourreau</option>
            <option name="Chariot à canon">Chariot à canon</option>
            <option name="Clonage">Clonage</option>
            <option name="Foudre">Foudre</option>
            <option name="Fût à gobelins">Fût à gobelins</option>
            <option name="Gardes">Gardes</option>
            <option name="Gel">Gel</option>
            <option name="Golem">Golem</option>
            <option name="Miroir">Miroir</option>
            <option name="Poison">Poison</option>
            <option name="Prince">Prince</option>
            <option name="Prince ténébreux">Prince ténébreux</option>
            <option name="P.E.K.K.A.">P.E.K.K.A.</option>
            <option name="Rage">Rage</option>
            <option name="Tornade">Tornade</option>
        </optgroupe>

        <optgroup label = "Légendaires">
            <option name="Bûcheron">Bûcheron</option>
            <option name="Cimetière">Cimetière</option>
            <option name="Dragon de l'enfer">Dragon de l'enfer</option>
            <option name="Electro-sorcier">Electro-sorcier</option>
            <option name="La bûche">La bûche</option>
            <option name="Méga chevalier">Méga chevalier</option>
            <option name="Mineur">Mineur</option>
            <option name="Molosse de lave">Molosse de lave</option>
            <option name="Princesse">Princesse</option>
            <option name="Sorcier de glace">Sorcier de glace</option>
            <option name="Sorcière de la nuit">Sorcière de la nuit</option>
            <option name="Voleuse">Voleuse</option>
            <option name="Zappy">Zappy</option>
        </optgroupe>
    </select></td> 
</tr>
<tr>
<td>Carte 5:</td>
<td><select name="carte5"  class="carte" value="<?php echo $donnees['carte5'] ?>" onchange="disabledChamp();">
<optgroup label= "Commune">
            <option></option>
            <option name="Archers">Archers</option>
            <option name="Barbares">Barbares</option>
            <option name="Barbares d'élite">Barbares d'élite</option>
            <option name="Bombardier">Bombardier</option>
            <option name="Canon">Canon</option>
            <option name="Chauve-souris">Chauve-souris</option>
            <option name="Chevalier">Chevalier</option>
            <option name="Electrocution">Electrocution</option>
            <option name="Esprit de feu">Esprit de feu</option>
            <option name="Esprit de glace">Esprit de glace</option>
            <option name="Flèches">Flèches</option>
            <option name="Fût à squelettes">Fût à squelettes</option>
            <option name="Gang de gobelins">Gang de gobelins</option>
            <option name="Gargouilles">Gargouilles</option>
            <option name="Géant royal">Géant royal</option>
            <option name="Gobelins">Gobelins</option>
            <option name="Gobelins à lance">Gobelins à lance</option>
            <option name="Horde de gargouilles">Horde de gargouilles</option>
            <option name="Mortier">Mortier</option>
            <option name="Squelettes">Squelettes</option>
            <option name="Tesla">Tesla</option>

        </optgroup>
        <optgroup label = "Rare">
            <option name="Bélier de combat">Bélier de combat</option>
            <option name="Cabane de barbares">Cabane de barbares</option>
            <option name="Cabane de gobelins">Cabane de gobelins</option>
            <option name="Chevaucheur de cochon">Chevaucheur de cochon</option>
            <option name="Extracteur d'élixir">Extracteur d'élixir</option>
            <option name="Fournaise">Fournaise</option>
            <option name="Géant">Géant</option>
            <option name="Gobelin à sarbacane">Gobelin à sarbacane</option>
            <option name="Golem de glace">Golem de glace</option>
            <option name="Machine volante">Machine volante</option>
            <option name="Méga gargouille">Méga gargouille</option>
            <option name="Mini P.E.K.K.A.">Mini P.E.K.K.A.</option>
            <option name="Mousquetaire">Mousquetaire</option>
            <option name="Pierre tombale">Pierre tombale</option>
            <option name="Sorcier">Sorcier</option>
            <option name="Tour de l'enfer">Tour de l'enfer</option>
            <option name="Tour à bombes">Tour à bombes</option>
            <option name="Trois mousquetaires">Trois mousquetaires</option>
            <option name="Valkyrie">Valkyrie</option>
        </optgroupe>

        <optgroup label = "Epiques">
            <option name="Arc-X">Arc-X</option>
            <option name="Armée de squelettes">Armée de squelettes</option>
            <option name="Ballon">Ballon</option>
            <option name="Bébé dragon">Bébé dragon</option>
            <option name="Bouliste">Bouliste</option>
            <option name="Bourreau">Bourreau</option>
            <option name="Chariot à canon">Chariot à canon</option>
            <option name="Clonage">Clonage</option>
            <option name="Foudre">Foudre</option>
            <option name="Fût à gobelins">Fût à gobelins</option>
            <option name="Gardes">Gardes</option>
            <option name="Gel">Gel</option>
            <option name="Golem">Golem</option>
            <option name="Miroir">Miroir</option>
            <option name="Poison">Poison</option>
            <option name="Prince">Prince</option>
            <option name="Prince ténébreux">Prince ténébreux</option>
            <option name="P.E.K.K.A.">P.E.K.K.A.</option>
            <option name="Rage">Rage</option>
            <option name="Tornade">Tornade</option>
        </optgroupe>

        <optgroup label = "Légendaires">
            <option name="Bûcheron">Bûcheron</option>
            <option name="Cimetière">Cimetière</option>
            <option name="Dragon de l'enfer">Dragon de l'enfer</option>
            <option name="Electro-sorcier">Electro-sorcier</option>
            <option name="La bûche">La bûche</option>
            <option name="Méga chevalier">Méga chevalier</option>
            <option name="Mineur">Mineur</option>
            <option name="Molosse de lave">Molosse de lave</option>
            <option name="Princesse">Princesse</option>
            <option name="Sorcier de glace">Sorcier de glace</option>
            <option name="Sorcière de la nuit">Sorcière de la nuit</option>
            <option name="Voleuse">Voleuse</option>
            <option name="Zappy">Zappy</option>
        </optgroupe>
    </select></td> 
    </tr>

    <tr>
<td>Carte 6:</td>
<td><select name="carte6"  class="carte" value="<?php echo $donnees['carte6'] ?>" onchange="disabledChamp();">
<optgroup label= "Commune">
            <option></option>
            <option name="Archers">Archers</option>
            <option name="Barbares">Barbares</option>
            <option name="Barbares d'élite">Barbares d'élite</option>
            <option name="Bombardier">Bombardier</option>
            <option name="Canon">Canon</option>
            <option name="Chauve-souris">Chauve-souris</option>
            <option name="Chevalier">Chevalier</option>
            <option name="Electrocution">Electrocution</option>
            <option name="Esprit de feu">Esprit de feu</option>
            <option name="Esprit de glace">Esprit de glace</option>
            <option name="Flèches">Flèches</option>
            <option name="Fût à squelettes">Fût à squelettes</option>
            <option name="Gang de gobelins">Gang de gobelins</option>
            <option name="Gargouilles">Gargouilles</option>
            <option name="Géant royal">Géant royal</option>
            <option name="Gobelins">Gobelins</option>
            <option name="Gobelins à lance">Gobelins à lance</option>
            <option name="Horde de gargouilles">Horde de gargouilles</option>
            <option name="Mortier">Mortier</option>
            <option name="Squelettes">Squelettes</option>
            <option name="Tesla">Tesla</option>

        </optgroup>
        <optgroup label = "Rare">
            <option name="Bélier de combat">Bélier de combat</option>
            <option name="Cabane de barbares">Cabane de barbares</option>
            <option name="Cabane de gobelins">Cabane de gobelins</option>
            <option name="Chevaucheur de cochon">Chevaucheur de cochon</option>
            <option name="Extracteur d'élixir">Extracteur d'élixir</option>
            <option name="Fournaise">Fournaise</option>
            <option name="Géant">Géant</option>
            <option name="Gobelin à sarbacane">Gobelin à sarbacane</option>
            <option name="Golem de glace">Golem de glace</option>
            <option name="Machine volante">Machine volante</option>
            <option name="Méga gargouille">Méga gargouille</option>
            <option name="Mini P.E.K.K.A.">Mini P.E.K.K.A.</option>
            <option name="Mousquetaire">Mousquetaire</option>
            <option name="Pierre tombale">Pierre tombale</option>
            <option name="Sorcier">Sorcier</option>
            <option name="Tour de l'enfer">Tour de l'enfer</option>
            <option name="Tour à bombes">Tour à bombes</option>
            <option name="Trois mousquetaires">Trois mousquetaires</option>
            <option name="Valkyrie">Valkyrie</option>
        </optgroupe>

        <optgroup label = "Epiques">
            <option name="Arc-X">Arc-X</option>
            <option name="Armée de squelettes">Armée de squelettes</option>
            <option name="Ballon">Ballon</option>
            <option name="Bébé dragon">Bébé dragon</option>
            <option name="Bouliste">Bouliste</option>
            <option name="Bourreau">Bourreau</option>
            <option name="Chariot à canon">Chariot à canon</option>
            <option name="Clonage">Clonage</option>
            <option name="Foudre">Foudre</option>
            <option name="Fût à gobelins">Fût à gobelins</option>
            <option name="Gardes">Gardes</option>
            <option name="Gel">Gel</option>
            <option name="Golem">Golem</option>
            <option name="Miroir">Miroir</option>
            <option name="Poison">Poison</option>
            <option name="Prince">Prince</option>
            <option name="Prince ténébreux">Prince ténébreux</option>
            <option name="P.E.K.K.A.">P.E.K.K.A.</option>
            <option name="Rage">Rage</option>
            <option name="Tornade">Tornade</option>
        </optgroupe>

        <optgroup label = "Légendaires">
            <option name="Bûcheron">Bûcheron</option>
            <option name="Cimetière">Cimetière</option>
            <option name="Dragon de l'enfer">Dragon de l'enfer</option>
            <option name="Electro-sorcier">Electro-sorcier</option>
            <option name="La bûche">La bûche</option>
            <option name="Méga chevalier">Méga chevalier</option>
            <option name="Mineur">Mineur</option>
            <option name="Molosse de lave">Molosse de lave</option>
            <option name="Princesse">Princesse</option>
            <option name="Sorcier de glace">Sorcier de glace</option>
            <option name="Sorcière de la nuit">Sorcière de la nuit</option>
            <option name="Voleuse">Voleuse</option>
            <option name="Zappy">Zappy</option>
        </optgroupe>
    </select></td> 
    </tr>

    <tr>
<td>Carte 7:</td>
<td><select name="carte7"  class="carte" value="<?php echo $donnees['carte7'] ?>" onchange="disabledChamp();">
<optgroup label= "Commune">
            <option></option>
            <option name="Archers">Archers</option>
            <option name="Barbares">Barbares</option>
            <option name="Barbares d'élite">Barbares d'élite</option>
            <option name="Bombardier">Bombardier</option>
            <option name="Canon">Canon</option>
            <option name="Chauve-souris">Chauve-souris</option>
            <option name="Chevalier">Chevalier</option>
            <option name="Electrocution">Electrocution</option>
            <option name="Esprit de feu">Esprit de feu</option>
            <option name="Esprit de glace">Esprit de glace</option>
            <option name="Flèches">Flèches</option>
            <option name="Fût à squelettes">Fût à squelettes</option>
            <option name="Gang de gobelins">Gang de gobelins</option>
            <option name="Gargouilles">Gargouilles</option>
            <option name="Géant royal">Géant royal</option>
            <option name="Gobelins">Gobelins</option>
            <option name="Gobelins à lance">Gobelins à lance</option>
            <option name="Horde de gargouilles">Horde de gargouilles</option>
            <option name="Mortier">Mortier</option>
            <option name="Squelettes">Squelettes</option>
            <option name="Tesla">Tesla</option>

        </optgroup>
        <optgroup label = "Rare">
            <option name="Bélier de combat">Bélier de combat</option>
            <option name="Cabane de barbares">Cabane de barbares</option>
            <option name="Cabane de gobelins">Cabane de gobelins</option>
            <option name="Chevaucheur de cochon">Chevaucheur de cochon</option>
            <option name="Extracteur d'élixir">Extracteur d'élixir</option>
            <option name="Fournaise">Fournaise</option>
            <option name="Géant">Géant</option>
            <option name="Gobelin à sarbacane">Gobelin à sarbacane</option>
            <option name="Golem de glace">Golem de glace</option>
            <option name="Machine volante">Machine volante</option>
            <option name="Méga gargouille">Méga gargouille</option>
            <option name="Mini P.E.K.K.A.">Mini P.E.K.K.A.</option>
            <option name="Mousquetaire">Mousquetaire</option>
            <option name="Pierre tombale">Pierre tombale</option>
            <option name="Sorcier">Sorcier</option>
            <option name="Tour de l'enfer">Tour de l'enfer</option>
            <option name="Tour à bombes">Tour à bombes</option>
            <option name="Trois mousquetaires">Trois mousquetaires</option>
            <option name="Valkyrie">Valkyrie</option>
        </optgroupe>

        <optgroup label = "Epiques">
            <option name="Arc-X">Arc-X</option>
            <option name="Armée de squelettes">Armée de squelettes</option>
            <option name="Ballon">Ballon</option>
            <option name="Bébé dragon">Bébé dragon</option>
            <option name="Bouliste">Bouliste</option>
            <option name="Bourreau">Bourreau</option>
            <option name="Chariot à canon">Chariot à canon</option>
            <option name="Clonage">Clonage</option>
            <option name="Foudre">Foudre</option>
            <option name="Fût à gobelins">Fût à gobelins</option>
            <option name="Gardes">Gardes</option>
            <option name="Gel">Gel</option>
            <option name="Golem">Golem</option>
            <option name="Miroir">Miroir</option>
            <option name="Poison">Poison</option>
            <option name="Prince">Prince</option>
            <option name="Prince ténébreux">Prince ténébreux</option>
            <option name="P.E.K.K.A.">P.E.K.K.A.</option>
            <option name="Rage">Rage</option>
            <option name="Tornade">Tornade</option>
        </optgroupe>

        <optgroup label = "Légendaires">
            <option name="Bûcheron">Bûcheron</option>
            <option name="Cimetière">Cimetière</option>
            <option name="Dragon de l'enfer">Dragon de l'enfer</option>
            <option name="Electro-sorcier">Electro-sorcier</option>
            <option name="La bûche">La bûche</option>
            <option name="Méga chevalier">Méga chevalier</option>
            <option name="Mineur">Mineur</option>
            <option name="Molosse de lave">Molosse de lave</option>
            <option name="Princesse">Princesse</option>
            <option name="Sorcier de glace">Sorcier de glace</option>
            <option name="Sorcière de la nuit">Sorcière de la nuit</option>
            <option name="Voleuse">Voleuse</option>
            <option name="Zappy">Zappy</option>
        </optgroupe>
    </select></td> 
    </tr>

        <tr>
<td>Carte 8:</td>
<td><select name="carte8"  class="carte" value="<?php echo $donnees['carte8'] ?>" onchange="disabledChamp();">
<optgroup label= "Commune">
            <option></option>
            <option name="Archers">Archers</option>
            <option name="Barbares">Barbares</option>
            <option name="Barbares d'élite">Barbares d'élite</option>
            <option name="Bombardier">Bombardier</option>
            <option name="Canon">Canon</option>
            <option name="Chauve-souris">Chauve-souris</option>
            <option name="Chevalier">Chevalier</option>
            <option name="Electrocution">Electrocution</option>
            <option name="Esprit de feu">Esprit de feu</option>
            <option name="Esprit de glace">Esprit de glace</option>
            <option name="Flèches">Flèches</option>
            <option name="Fût à squelettes">Fût à squelettes</option>
            <option name="Gang de gobelins">Gang de gobelins</option>
            <option name="Gargouilles">Gargouilles</option>
            <option name="Géant royal">Géant royal</option>
            <option name="Gobelins">Gobelins</option>
            <option name="Gobelins à lance">Gobelins à lance</option>
            <option name="Horde de gargouilles">Horde de gargouilles</option>
            <option name="Mortier">Mortier</option>
            <option name="Squelettes">Squelettes</option>
            <option name="Tesla">Tesla</option>

        </optgroup>
        <optgroup label = "Rare">
            <option name="Bélier de combat">Bélier de combat</option>
            <option name="Cabane de barbares">Cabane de barbares</option>
            <option name="Cabane de gobelins">Cabane de gobelins</option>
            <option name="Chevaucheur de cochon">Chevaucheur de cochon</option>
            <option name="Extracteur d'élixir">Extracteur d'élixir</option>
            <option name="Fournaise">Fournaise</option>
            <option name="Géant">Géant</option>
            <option name="Gobelin à sarbacane">Gobelin à sarbacane</option>
            <option name="Golem de glace">Golem de glace</option>
            <option name="Machine volante">Machine volante</option>
            <option name="Méga gargouille">Méga gargouille</option>
            <option name="Mini P.E.K.K.A.">Mini P.E.K.K.A.</option>
            <option name="Mousquetaire">Mousquetaire</option>
            <option name="Pierre tombale">Pierre tombale</option>
            <option name="Sorcier">Sorcier</option>
            <option name="Tour de l'enfer">Tour de l'enfer</option>
            <option name="Tour à bombes">Tour à bombes</option>
            <option name="Trois mousquetaires">Trois mousquetaires</option>
            <option name="Valkyrie">Valkyrie</option>
        </optgroupe>

        <optgroup label = "Epiques">
            <option name="Arc-X">Arc-X</option>
            <option name="Armée de squelettes">Armée de squelettes</option>
            <option name="Ballon">Ballon</option>
            <option name="Bébé dragon">Bébé dragon</option>
            <option name="Bouliste">Bouliste</option>
            <option name="Bourreau">Bourreau</option>
            <option name="Chariot à canon">Chariot à canon</option>
            <option name="Clonage">Clonage</option>
            <option name="Foudre">Foudre</option>
            <option name="Fût à gobelins">Fût à gobelins</option>
            <option name="Gardes">Gardes</option>
            <option name="Gel">Gel</option>
            <option name="Golem">Golem</option>
            <option name="Miroir">Miroir</option>
            <option name="Poison">Poison</option>
            <option name="Prince">Prince</option>
            <option name="Prince ténébreux">Prince ténébreux</option>
            <option name="P.E.K.K.A.">P.E.K.K.A.</option>
            <option name="Rage">Rage</option>
            <option name="Tornade">Tornade</option>
        </optgroupe>

        <optgroup label = "Légendaires">
            <option name="Bûcheron">Bûcheron</option>
            <option name="Cimetière">Cimetière</option>
            <option name="Dragon de l'enfer">Dragon de l'enfer</option>
            <option name="Electro-sorcier">Electro-sorcier</option>
            <option name="La bûche">La bûche</option>
            <option name="Méga chevalier">Méga chevalier</option>
            <option name="Mineur">Mineur</option>
            <option name="Molosse de lave">Molosse de lave</option>
            <option name="Princesse">Princesse</option>
            <option name="Sorcier de glace">Sorcier de glace</option>
            <option name="Sorcière de la nuit">Sorcière de la nuit</option>
            <option name="Voleuse">Voleuse</option>
            <option name="Zappy">Zappy</option>
        </optgroupe>
    </select></td> 
    </tr>
    <tr>
   <td>Description (facultatif) :</td>
   <td><textarea cols="40" rows="5" name="description"><?php echo $donnees['description'] ?></textarea></td>
    </tr>
</table>
    <input type="hidden" name="id" value="<?php echo $donnees['id'] ?>" />
    <input type="submit" name="Modifier le deck" />

    </form>
    <script type="text/javascript" src="../js/script.js"></script>
