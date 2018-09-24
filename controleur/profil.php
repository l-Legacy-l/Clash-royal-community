<?php
include_once('sessionCheck.php');
include_once('../modele/profilModele.php');
include_once('../vue/menuView.php');
if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
{
    //if(isset($_GET['id']) && $_GET['id'] > 0)
        //Par défaut si on a pas mis d'id, on considère qu'on visionne son profil
        if(!isset($_GET['id']))
        {
            $_GET['id'] = $_SESSION['pseudo'];
        }
        $getId = strval($_GET['id']);
        $donnees = profil($getId);
        if(!empty($donnees))
        {
            $userInfo['id'] = $donnees['id'];
            $userInfo['pseudo'] = $donnees['pseudo'];
            $userInfo['mail'] = $donnees['email'];
            $userInfo['tr'] = $donnees['trophee'];
            $userInfo['carte'] = $donnees['carte'];
            $userInfo['age'] = $donnees['age'];
    
            include_once('../vue/profilView.php');
        }
        
        else
        {
            $erreur = "Erreur, ce profil n'existe pas.";
            include_once('erreur.php');            
        }
}

else
{
    $erreur = "Erreur, vous devez être connecté(e) pour accéder à cette page.";
    include_once('erreur.php');
}

//Je l'inclus ici car autrement si l'utilisateur n'est pas connecté, je n'ai plus de footer
include_once("../vue/footerView.php");
        
?>
