<?php
include_once('sessionCheck.php');
include_once('../modele/listeMesDecksModele.php');
include_once('../vue/menuView.php');

if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
{
    $donnees = listeDeck($_SESSION['pseudo']); 
    $nbLigne = countDeck($_SESSION['pseudo']);

    include_once('../vue/listeMesDecksView.php');
}

else
{
    $erreur = "Erreur, vous devez être connecté(e) pour accéder à cette page.";
    include_once('erreur.php');
}

include_once('../vue/footerView.php');

?>