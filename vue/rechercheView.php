<?php
include_once("../vue/menuView.php");
 ?>
<section>
<h2> Recherche de deck </h2>
    <p>
    <form action="../controleur/rechercheDecks.php" method="post">
    <table class = "profil">
    <tr>
        <td>Type :</td>
        <td><select name="type">
            <option value="Rush">Rush</option>
            <option value="Tank">Tank</option>
            <option value="Spawner/Setup">Spawner/Setup</option>
            <option value="Siège/Bâtiments">Siège/Bâtiments</option>
            <option value="Grattage">Grattage</option>
            <option value="Autre/Insolite">Autre/Insolite</option>
        </select></td>
    </tr>
    <tr>
	   <td><input type="submit" name="Ajouter le deck" /></td>
	</tr>
    </form>
    </p>
