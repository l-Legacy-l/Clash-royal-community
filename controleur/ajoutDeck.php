<?php
include_once('sessionCheck.php');
require_once('../modele/ajoutDeckModele.php');
include_once('../vue/menuView.php');

if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
{
    if(isset($_POST['type']) || isset($_POST['cout']) || isset($_POST['carte1']) || isset($_POST['carte2']) || 
       isset($_POST['carte3']) || isset($_POST['carte4']) || isset($_POST['carte5']) || isset($_POST['carte6']) ||
       isset($_POST['carte7']) || isset($_POST['carte8']))
    {
        include_once('../vue/ajoutDeckView.php');

        if(!empty($_POST['type']) && !empty($_POST['cout']) && !empty($_POST['carte1']) && !empty($_POST['carte2']) &&
           !empty($_POST['carte3']) && !empty($_POST['carte4']) && !empty($_POST['carte5']) && !empty($_POST['carte6']) 
           && !empty($_POST['carte7']) && !empty($_POST['carte8']))
        {
            $nom = htmlspecialchars($_POST['nom']);
            $type = htmlspecialchars($_POST['type']);
            $cout = htmlspecialchars($_POST['cout']);
            $carte1 = htmlspecialchars($_POST['carte1']);
            $carte2 = htmlspecialchars($_POST['carte2']);
            $carte3 = htmlspecialchars($_POST['carte3']);
            $carte4 = htmlspecialchars($_POST['carte4']);
            $carte5 = htmlspecialchars($_POST['carte5']);
            $carte6 = htmlspecialchars($_POST['carte6']);
            $carte7 = htmlspecialchars($_POST['carte7']);
            $carte8 = htmlspecialchars($_POST['carte8']);
            $description = htmlspecialchars($_POST['description']);
            
            if (empty($nom) || preg_match("#^[a-zA-Z0-9\'\.\,\;\-\_\+\-\!\?\&\é\@\"\'\#\è\à\ç\€\$\ù\%\:\)\(\* ]{1,40}$#", $nom))
            {   
                if(preg_match("#^[2-8]*.?[1-9]+$#", $cout))
                {
                    if(strlen($description) <= 400)
                    {
                        ajoutDeck($_SESSION['pseudo'], $nom, $type, $cout, $carte1, $carte2,
                        $carte3, $carte4, $carte5, $carte6, $carte7, $carte8,
                        $description);
               
                         echo "<p>Le deck ".$nom." a bien été ajouté à la liste.</p>";
                    }

                    else
                    {
                        echo "<p> Erreur, la taille de la description du deck doit être inférieur à 400 caractères </p>";
                    }
                }
                
                else
                {
                    echo "<p> Erreur, le coût en elixir introduit n'est pas cohérent. </p>";
                }
            }
    
            else
            {
                echo '<p> Erreur, vous devez entrez un nom comportant uniquement lettre et chiffre </p>';
            }
    
        }
    
        else
        {
            echo '<p> Erreur, vous devez remplir les champs nécessaire </p>';
        }
    }

    else
    {
        include_once('../vue/ajoutDeckView.php');
    }
       
}

else
{
    $erreur = "Erreur, vous devez être connecté(e) pour accéder à cette page.";
    include_once('erreur.php');
}

include_once('../vue/footerView.php');
?>