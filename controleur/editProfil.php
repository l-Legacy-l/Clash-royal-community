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
    //On vérifie qu'on a bien le droit d'éditer le profil càd qu'on est l'utilisateur du profil ou l'admin
    if(!empty($donneesProfil)) 
    {
        if($_SESSION['pseudo'] == $donneesProfil['pseudo'] || $_SESSION['pseudo'] == "fabio")
        {
            include_once('../vue/editProfilView.php');

            if(isset($_POST['pseudo']) || isset($_POST['mdp']) || isset($_POST['mdp2']) || isset($_POST['mail']) ||
            isset($_POST['tr']))
            {      
                if(!empty($_POST['pseudo'])  && !empty($_POST['mdp'])  && !empty($_POST['mdp2']) && !empty($_POST['mail']) && 
                !empty($_POST['tr']))
                {
                    $pseudo = htmlspecialchars($_POST['pseudo']);
                    $mdp = htmlspecialchars($_POST['mdp']);
                    $mdp2 = htmlspecialchars($_POST['mdp2']);
                    $mail = htmlspecialchars($_POST['mail']);
                    $tr = htmlspecialchars($_POST['tr']);
                    $age = htmlspecialchars($_POST['age']);
                    $carte = htmlspecialchars($_POST['carte']);
                    
                    if (preg_match("#^[a-zA-Z0-9\'\.\,\;\-\_\+\-\!\?\&\é\@\"\'\#\è\à\ç\€\$\ù\%\:\)\(\* ]{4,20}$#", $pseudo))
                    {
                        if(strlen($mdp) >= 4 && strlen($mdp) <= 20)
                        {
                            if(sha1($mdp) == sha1($mdp2))
                            {
                                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail))
                                {
                                    if($tr >= 0 && $tr <= 8000)
                                    {  
                                        //Check pseudo déjà utilisé (on ne prend pas en compte le pseudo de l'utilisateur pour check)
                                        $donnees = checkProfil($pseudo,$donneesProfil['id']);
                                        
                                        if(empty($donnees))
                                        {
                                            //Check e-mail déjà utilisé (on prend pas en compte l'email de l'utilisateur connecté aussi)
                                            $donnees = checkEmail($mail,$donneesProfil['id']);

                                            if(empty($donnees))
                                            {
                                                if((preg_match("#^[0-9]{1,3}$#", $age) && $age < 117 && $age >= 13) || empty($age)) 
                                                {
                                                    $mdpChiffre = sha1($mdp);
                                                    //On peut éditer le profil
                                                    editProfil($pseudo,$mdpChiffre,$mail,$tr,$age,$carte,$donneesProfil['id']);                          
                                                    //On met à jour les variables de sessions si on est l'utilisateur connecté
                                                    if($_SESSION['pseudo'] == $donneesProfil['pseudo'])
                                                    {
                                                        $_SESSION['pseudo'] = $pseudo;
                                                        $_SESSION['mail'] = $mail;
                                                        $_SESSION['tr'] = $tr;
                                                        $_SESSION['age'] = $age;
                                                        $_SESSION['carte'] = $carte;
                                                    }                                      
                                                    //On rafraichit la page pour afficher les changements et on renvoie vers le nouveau bon pseudo en cas de changement
                                                     echo "<meta http-equiv='refresh' content='0;URL=editProfil.php?id=".$pseudo."'>";
                                                    //Variable qui indique qu'on vient d'éditer pour signaler l'utilisateur
                                                    $_SESSION['editStatut'] = 1;
                                                }

                                                else
                                                {
                                                    echo "<p> Erreur, vous avez entré(e) un age incorrect </p>";
                                                }
                                            }

                                            else
                                            {
                                                echo "<p> Erreur, cette adresse e-mail a déjà été utilisé, veuillez en choisir une autre. </p>";
                                            }

                                        }
                                        
                                        else
                                        {
                                            echo "<p> Errreur, ce pseudo existe déjà, veuillez en choisir un autre. </p>";
                                        }

                                    } 
                                    
                                    else
                                    {
                                        echo "<p> Errreur, vous devez rentrer un nombre de trophé cohérent. </p>";
                                    }
                                }

                                else
                                {
                                    echo "<p> Errreur, vous avez entré(e) une adresse e-mail invalide. </p>";
                                }
                                
                            }
                            else
                            {
                                echo "<p> Errreur, les mots de passe ne correspondent pas. </p>";
                            }
                        }

                        else
                        {
                            echo "<p> Errreur, votre mot de passe doit contenir entre 4 et 20 caractères. </p>";
                        }

                    }
                    
                    else
                    {
                        echo "<p> Errreur, votre pseudo doit contenir 4 à 20 lettres ou chiffres. </p>";
                    }
                }

            else
            {
                echo "<p> Errreur, tout les champs doivent être remplis. </p>";
            }
            } 
        
            else
            {
                //On check si on vient d'éditer le profil, alors on prévient l'utilisateur
                if(isset($_SESSION['editStatut']) && $_SESSION['editStatut'] == 1)
                {
                    echo "<p> Les modifications ont bien été pris en comptes.</p>";
                    //Pour ne pas l'afficher 2 fois
                    $_SESSION['editStatut'] = 0;
                }
            }

        }

        else
        {
            echo "<p>Erreur, vous n'avez pas l'autorisation de modifier ce profil. </p>";
        }
            
    }

    else
    {
        echo "<p>Erreur, ce profil n'existe pas. </p>";
    }
}
    

else
{
    $erreur = "Erreur, vous devez être connecté(e) pour accéder à cette page.";
    include_once('erreur.php');
}
include_once('../vue/footerView.php');
?>