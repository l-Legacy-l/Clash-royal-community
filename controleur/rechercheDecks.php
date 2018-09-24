<?php
include_once('sessionCheck.php');
include_once('../vue/menuView.php');

if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
{
    include_once('../modele/listeDeckModele.php');

    //Si je charge la page sans envoyer les infos via le formulaire
    if(isset($_POST['type']))
    {
        $type = htmlspecialchars($_POST['type']);    
        
        $donnees = listeDeckRecherche($type); 
        $nbLigne = countDeckRecherche($type);
         
        include_once('../vue/listeDeckView.php');  
    }
    else
    {
        include_once('../vue/rechercheView.php');
    }
}

else
{
    $erreur = "Erreur, vous devez être connecté(e) pour accéder à cette page.";
    include_once('erreur.php');
}
?>