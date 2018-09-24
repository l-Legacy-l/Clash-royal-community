<?php
require_once('../modele/modele.php');

function profil($getid)
{
    $getid = strval($getid);
    $sql = 'SELECT * FROM profil WHERE pseudo = ?';
    $param = array($getid);

    return executeReq($sql,$param)->fetch();
}

function editProfil($pseudo,$mdpChiffre,$email,$trophees,$age,$carte,$id)
{
    $sql = 'SET FOREIGN_KEY_CHECKS=0; UPDATE profil SET pseudo = :pseudo, mdp = :mdp, email = :mail, 
            trophee = :tr, age = :age, carte = :carte WHERE id = :id; SET FOREIGN_KEY_CHECKS=1;';
    $param = array('pseudo' => $pseudo, 'mdp' => $mdpChiffre , 'mail' => $email,
                    'tr' => $trophees, 'age' => $age, 'carte' => $carte, 'id' => $id);
    return executeReq($sql,$param) -> fetch();       
}

function checkProfil($pseudo,$id)
{
    $sql = 'SELECT pseudo FROM profil WHERE pseudo = :pseudo AND id != :id';
    $param = array('pseudo' => $pseudo, 'id' => $id);
    return executeReq($sql,$param)->fetch();
}

function checkEmail($email,$id)
{
    $sql = 'SELECT email FROM profil WHERE email = :mail AND id != :id';
    $param = array('mail' =>$email, 'id' =>$id);
    return executeReq($sql,$param)->fetch();
}

function deleteProfil ($pseudo)
{
    $sql = 'SET FOREIGN_KEY_CHECKS=0; DELETE FROM profil WHERE pseudo = :pseudo; SET FOREIGN_KEY_CHECKS=1;';
    $param = array('pseudo' => $pseudo);
    executeReq($sql,$param);
}
?>