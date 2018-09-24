<?php include_once("../vue/menuView.php");?>
<br>
<section>
    <h3>Profil</h3>
    <br>
    <br>
    <table class = "profil">
    <tr>
        <td>Pseudo :</td>
        <td> <?php echo $userInfo['pseudo']?> </td>
    </tr>
    <tr>
        <td>Adresse e-mail :</td>
        <td> <?php echo $userInfo['mail'] ?> </td>
    </tr>
    <tr>
        <td>Nombre de trophées :</td>
        <td> <?php echo $userInfo['tr'] ?> </td>
    </tr>
    <tr>
        <td>Age :</td>
        <td> <?php echo $userInfo['age'] ?> </td>
    </tr>
    <tr>
        <td>Carte favorite :</td>
        <td> <?php echo $userInfo['carte'] ?> </td>
    </tr>
    <tr>
    </table>


    <?php
    if($_SESSION['pseudo'] == $userInfo['pseudo'] || $_SESSION['pseudo'] == "fabio" )   //TODO si je suis admin je peux modifier
    {
    ?>
    <a href=<?php echo "editProfil.php?id=".$_GET['id'] ?>> Editer ce profil </a>
    <a href=<?php echo "deleteProfil.php?id=".$_GET['id'] ?>> Supprimer ce compte </a><br>
    <?php
    }
    ?>
