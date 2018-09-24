<section>

<h3> Contacter l'administrateur du site </h3>
    <form action="contact.php" method="post" />
    <table class = "profil">
    <tr>
       <td><br>Nom* :</td>
       <td><br><input type="text" name="nom" required  value="<?php if(isset($nom)) {echo $nom;} ?>" ></td>
   </tr>
        <tr>
        <td><br>Sujet : *</td>
        <td><br><input type="text" name="sujet" required value="<?php if(isset($sujet)){echo $sujet;} ?>" /></td>
    </tr>
        <tr>
        <td><br>Votre adresse mail : *</td>
        <td><br><input type="email" name="mail" required value="<?php if(isset($mail)) {echo $mail;} ?>" /></td>
    </tr>
        <tr>
        <td><br>Message : *</td>
        <td><br><textarea cols="70" rows="10" name="message" required><?php if(isset($message)){echo $message;} ?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><br><input type="submit" value="Envoyer le mail" /></td>
        </tr>
    </table>
    </form>