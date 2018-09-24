<?php
include_once('sessionCheck.php');
require_once('../modele/profilModele.php');
include_once('../vue/menuView.php');

if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
{
        //On récupère les informations en fonction de l'ID qu'on va récupérer dans le GET
    if(!isset($_GET['id']))
    {
        $_GET['id'] = $_SESSION['pseudo'];
    }
    $getId = strval($_GET['id']);
    $donneesProfil = profil($getId);
    if(!empty($donneesProfil))
    {
        //On vérifie qu'on a bien le droit d'éditer le profil càd qu'on est l'utilisateur du profil ou l'admin
        if($_SESSION['pseudo'] == $donneesProfil['pseudo'] || $_SESSION['pseudo'] == "fabio" ) 
        {
            deleteProfil($donneesProfil['pseudo']); //A TESTER
            include_once('../vue/deleteProfilView.php');
            //Si je supprime mon pseudo, je me déconnecte
            if($_SESSION['pseudo'] == $donneesProfil['pseudo'])
            {
               session_destroy();
            }       
        }

        else
        {
            echo "<p>Erreur, vous n'avez pas l'autorisation de supprimer ce profil.</p>";
        }
    }

    else
    {
        echo "<p>Erreur, Ce profil n'existe pas.</p>";
    }
}

else
{
    $erreur = "Erreur, vous devez être connecté(e) pour accéder à cette page.";
    include_once('erreur.php');
}

include_once('../vue/footerView.php');
?>