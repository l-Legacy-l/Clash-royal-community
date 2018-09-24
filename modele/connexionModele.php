<?php
require_once('../modele/modele.php');

function connexion ($pseudo, $mdpEnvoye)
{
    $sql = 'SELECT * FROM profil WHERE pseudo = :pseudo && mdp = :mdp';    //OK MVC ?
    $param = array('pseudo' => $_POST['pseudo'], 'mdp' => $mdpEnvoye);

    $donnees = executeReq($sql,$param)->fetch();
    return $donnees;
}
?>