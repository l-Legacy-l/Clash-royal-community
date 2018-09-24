<?php 
require_once('../modele/modele.php');

function joinTable($depart)
{
    //Jointure + limite pour le système de pagination
    $sql = 'SELECT * FROM listeDeck INNER JOIN categorie ON listeDeck.type = categorie.id 
    ORDER BY cout LIMIT '.$depart.',5';
    $req = executeQueryReq($sql);
    return $req;
}

function joinTableRecherche($categorie)
{
    $sql = 'SELECT * FROM listeDeck INNER JOIN categorie ON listeDeck.type = categorie.id WHERE 
    categorie.type = ? ORDER BY cout';
    $param = array($categorie);
    return executeReq($sql,$param);
}
function listeDeck($depart)
{
    $donnees = joinTable($depart) -> fetchAll();
    return $donnees;
}

function listeDeckRecherche($categorie)
{
    $donnees = joinTableRecherche($categorie) -> fetchAll();
    return $donnees;
}

function countDeck($depart)
{
    $nbLigne = joinTable($depart) -> rowCount();
    return $nbLigne;
}


function countDeckRecherche($categorie)
{
    $nbLigne = joinTableRecherche($categorie) -> rowCount();
    return $nbLigne;
}

function countAllDeck()
{
    $sql  = 'SELECT COUNT(*) FROM listeDeck';
    $req = executeQueryReq($sql);
    return $req -> fetch();
}

?>
