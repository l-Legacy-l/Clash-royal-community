<?php
include_once('sessionCheck.php');
require_once('../modele/inscriptionModele.php');
include_once('../vue/menuView.php');
if (!isset($_SESSION['droit']) || $_SESSION['droit'] == 0 ) //0 je peux m'inscrire car je ne suis pas connecté
{
    include_once('../vue/inscriptionView.php');

    if(isset($_POST['pseudo']) || isset($_POST['mdp']) || isset($_POST['mdp2']) || isset($_POST['mail']) 
    || isset($_POST['tr'])) //si je suis passé par le formulaire
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $mdp2 = htmlspecialchars($_POST['mdp2']);
        $mail = htmlspecialchars($_POST['mail']);
        $tr = htmlspecialchars($_POST['tr']);
        //Si on supprime le required dans le form
        if(!empty($_POST['pseudo'])  && !empty($_POST['mdp'])  && !empty($_POST['mdp2']) && !empty($_POST['mail'])
         && !empty($_POST['tr']))
        {            
            if (preg_match("#^[a-zA-Z0-9\'\.\,\;\-\_\+\-\!\?\&\é\@\"\'\#\è\à\ç\€\$\ù\%\:\)\(\* ]{4,20}$#", $pseudo))
            {
                if(strlen($mdp) >= 4 && strlen($mdp) <= 20)
                {
                    if($mdp == $mdp2)
                    {
                        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail))
                        {
                            if(preg_match("#^[0-9]{0,5}$#", $tr) && $tr >= 0 && $tr <= 8000)
                            {   
                                //Check pseudo déjà utilisé
                                $donnees = checkPseudo($pseudo);
                               
                                if(empty($donnees))
                                {
                                    //Check e-mail déjà utilisé
                                    $donnees = checkEmail($mail);

                                    if(empty($donnees))
                                    {
                                        $_SESSION['droit'] = 0;
                                        $mdpChiffre = sha1($mdp);
                                        inscription($pseudo,$mdpChiffre,$mail,$tr);
                                        
                                        //On remet les paramètres initial
                                        $pseudo = "";
                                        $mail= "";
                                        $tr = "";
                                        //On rafraichis la page pour prendre en compte les paramètre initial
                                        echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';
                                        //On prend en compte qu'on vient de s'inscrire 
                                        $_SESSION['inscriptionStatut'] = 1;
                                    }

                                    else
                                    {
                                        echo "<p> Erreur, cette adresse e-mail a déjà été utilisé, veuillez en choisir une autre. </p>";
                                    }

                                }
                                
                                else
                                {
                                    echo "<p> Erreur, ce pseudo existe déjà, veuillez en choisir un autre. </p>";
                                }

                            } 
                            
                            else
                            {
                                echo "<p> Erreur, vous devez rentrer un nombre de trophé cohérent. </p>";
                            }
                        }

                        else
                        {
                            echo "<p> Erreur, vous avez entré(e) une adresse e-mail invalide. </p>";
                        }
                        
                    }
                    else
                    {
                        echo "<p> Erreur, vos 2 mot de passes ne sont pas identiques. </p>";
                    }
                } 
        
                else
                {
                    echo "<p> Erreur, votre mot de passe doit contenir entre 4 et 20 caractères. </p>";
                }
            }
            else
            {
                echo "<p> Erreur, votre pseudo doit contenir 4 à 20 lettres ou chiffres. </p>";
            }
        }
        else
        {
            echo "<p> Erreur, tout les champs doivent être remplis. </p>";
        }
    }

    else
    {
        //Si on vient de s'inscrire
        if(isset($_SESSION['inscriptionStatut']) && $_SESSION['inscriptionStatut'] == 1)
        {
            //On préviens l'utilisateur
            echo '<p>Vous êtes bien inscris. Vous pouvez à présent vous connecter</p>';
            //Plus besoin de prévenir
            $_SESSION['inscriptionStatut'] = 0;
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