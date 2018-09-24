<?php
include_once('sessionCheck.php');
include('../modele/connexionModele.php');
include_once('../vue/menuView.php');

if (!isset($_SESSION['droit']) || $_SESSION['droit'] == 0 )
{
    include('../vue/connexionView.php');

    if(isset($_POST['pseudo']) || isset($_POST['mdp'])) //si je viens du formulaire
    {
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])) //Si mdp + login pas vide
        {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdpEnvoye = sha1($_POST['mdp']);
            //On vérifie les identifiants entré
            $donnees = connexion($pseudo,$mdpEnvoye);

            if(!empty($donnees))
            {               
                $_SESSION['droit'] = 1; // On est connecté
                $_SESSION['id'] = $donnees['id'];
                $_SESSION['pseudo'] = $donnees['pseudo'];
                $_SESSION['mail'] = $donnees['email'];
                $_SESSION['tr'] = $donnees['trophee'];
                $_SESSION['carte'] = $donnees['carte'];
                $_SESSION['age'] = $donnees['age'];
                
                //Redirection vers l'accueil
                header('Location: ../index.php');
            }

            else
            {
                session_destroy();
                echo '<p>Combinaison pseudo - mot de passe invalide ! </p>';
            } 
        }
    }
}

else
{
    $erreur = "Erreur, vous êtes déjà connecté(e).";
    include_once('erreur.php');
}

include_once("../vue/footerView.php");
?>