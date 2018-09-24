    <section>
        <form method="POST" action="../controleur/inscription.php">
            Login: <br> <input type="text" name="pseudo" required value="<?php if(isset($pseudo)) {echo $pseudo;}?>"><br>
            Mot de passe: <br> <input type="password" name="mdp" required ><br>
            Confirmation du mot de passe : <br> <input type="password" name="mdp2" required><br>
            E-mail: <br> <input type="email" name="mail" required value="<?php if(isset($mail)) {echo $mail;}?>"><br><br>
            Trophées: <br> <input type="number" name="tr" required value="<?php if(isset($tr)) {echo $tr;}?>"><br><br>
            <input type="submit">
        </form>
