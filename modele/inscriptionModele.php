<?php
include_once('../modele/modele.php');

function inscription($pseudo,$mdpChiffre,$email,$trophee)
{
    $sql = 'INSERT INTO profil (pseudo, mdp, email, trophee) VALUES (:pseudo,:mdp,:mail,:tr)';
    $param = array('pseudo' => $pseudo, 'mdp' => $mdpChiffre , 'mail' =>$email, 'tr' =>$trophee);

    executeReq($sql,$param);
}

function checkPseudo($pseudo)
{
    $sql = 'SELECT pseudo FROM profil WHERE pseudo = :pseudo';
    $param = array('pseudo' => $pseudo);

    $donnees = executeReq($sql,$param) -> fetch();
    print_r($donnees);
    return $donnees;
}

function checkEmail($email)
{
    $sql = 'SELECT email FROM profil WHERE email = :mail';
    $param = array('mail' => $email);

    $donnees = executeReq($sql,$param)->fetch();
    return $donnees;
}
?>