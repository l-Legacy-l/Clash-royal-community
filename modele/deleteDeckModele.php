<?php
require_once('../modele/modele.php');

function deleteDeck($sessionId)
{
    $sql = 'DELETE FROM listeDeck WHERE id = :id';
    $param = array('id' => $sessionId);
    executeReq($sql,$param);
}

function recupDeck($id)
{
    $sql = 'SELECT * FROM listeDeck WHERE id = :id';
    $param = array('id' => $id);

    $donnees = executeReq($sql, $param) -> fetch() ;
    return $donnees;
}
?>