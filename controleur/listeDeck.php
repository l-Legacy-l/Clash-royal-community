<?php
include_once('sessionCheck.php');
include_once('../vue/menuView.php');

if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
{
    include_once('../modele/listeDeckModele.php');
    $countAll = countAllDeck();
    $nbPage = ceil($countAll[0] / 5);

    if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 &&  $_GET['page'] <= $nbPage)
    {
        $_GET['page'] = intval($_GET['page']);
        $depart = ($_GET['page']-1)*5;
        $donnees = listeDeck($depart); 
        $nbLigne = countDeck($depart);
        $pageCourante  = $_GET['page'];

        include_once('../vue/listeDeckView.php');

    }

    else
    {
        echo "<p> Erreur, page inexistante </p>";
    }
}
else
{
    $erreur = "Erreur, vous devez être connecté(e) pour accéder à cette page.";
    include_once('erreur.php');
}

include_once('../vue/footerView.php');

?>