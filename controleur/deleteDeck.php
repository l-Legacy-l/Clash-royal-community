<?php
include_once('sessionCheck.php');
require_once('../modele/deleteDeckModele.php') ;
include_once('../vue/menuView.php');

if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
{
    //Post pour éviter que l'on puisse se tromper dans barre de recherche
    if(isset($_POST['id']))
    {
        $id = htmlspecialchars($_POST['id']);
        $donnees = recupDeck($id);
        //Check si jamais on a modifié l'id dans le form et qu'il n'appartient pas au pseudo connecté
        if($donnees['pseudo'] == $_SESSION['pseudo'] || $_SESSION['pseudo'] == "fabio")
        {
            deleteDeck($id);
            //echo "<p>Le deck " .$donnees['nom']." a bien été supprimé !</p>";
            header("Location: listeDeck.php?page=1");
        }

        else
        {
            echo "<p>Erreur, vous n'avez pas le droit de supprimer ce deck</p>";
        }
    }

    else
    {
        echo '<p> Erreur, impossible de modifier ce deck </p>';
    }


}

else
{
    $erreur = "Erreur, vous devez être connecté(e) pour accéder à cette page.";
    include_once('erreur.php');
}

include_once('../vue/footerView.php');
?>