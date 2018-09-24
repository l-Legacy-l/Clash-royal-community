<section>

    <h3> Modification du profil </h3>
    <form action="../controleur/editProfil.php <?php if(isset($donneesProfil['pseudo'])){echo'?id='.$donneesProfil['pseudo'];} ?>" method="post">
    <table class = "profil">
        <td>Pseudo :</td>
        <td><input type="text" name="pseudo"  value="<?php if(isset($donneesProfil['pseudo'])) {echo $donneesProfil['pseudo'];} ?>" required /></td>
    </tr>
    <tr>
        <td>Mot de passe :</td>
        <td><input type="password" name="mdp" required/></td>
    </tr>
    <tr>
        <td>Confirmation du mot de passe :</td>
        <td><input type="password" name="mdp2" required /></td>
    </tr>
    <tr>
        <td>Adresse mail :</td>
        <td><input type="text" name="mail" value="<?php if(isset($donneesProfil['email'])) {echo $donneesProfil['email'];} ?>" required /></td>
    </tr>
    <tr>
        <td>Nombre de trophées :</td>
        <td><input type="number" name="tr" value="<?php if(isset($donneesProfil['trophee'])) {echo $donneesProfil['trophee'];} ?>" required /></td>
    </tr>
    <tr>
        <td>Age :</td>
        <td><input type="number" name="age" value="<?php if(isset($donneesProfil['age'])) {echo $donneesProfil['age'];} ?>" size=2/></td>
    </tr>
    <tr>
        <td>Carte favorite :</td>
        <td><input type="text" name="carte" value="<?php if(isset($donneesProfil['carte'])) {echo $donneesProfil['carte'];} ?>" /></td>
    </tr>
    </table><br>
    <input type="submit" value="Modifier" />
    </form>

