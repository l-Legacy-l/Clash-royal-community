<?php 
require_once('../modele/modele.php');

function joinTable($pseudo)
{
    $sql = 'SELECT * FROM listeDeck INNER JOIN categorie ON listeDeck.type = categorie.id WHERE pseudo = :pseudo ORDER BY cout';
    $param = array('pseudo' => $pseudo);
    $req = executeReq($sql,$param);
    return $req;
}

function listeDeck($pseudo)
{
    $donnees = joinTable($pseudo) -> fetchAll();
    return $donnees;
}

function countDeck($pseudo)
{
    $nbLigne = joinTable($pseudo) -> rowCount();
    return $nbLigne;
}
?>
