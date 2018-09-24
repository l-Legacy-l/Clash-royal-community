<?php
include_once('sessionCheck.php');
include_once("../vue/menuView.php");
if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
{
    $_SESSION['droit'] = 0;
    header('Location: ../index.php');
    session_destroy();
}
else
{
    $erreur = "Erreur, vous êtes déjà déconnecté(e).";
    include_once('erreur.php');}

include_once('../vue/footerView.php');
?>