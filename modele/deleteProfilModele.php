<?php
require_once('../modele/modele.php');

function deleteProfil ($sessionId)
{
    $sql = 'DELETE FROM profil WHERE id = :id';
    $param = array('id' => $sessionId);
    executeReq($sql,$param);
}
?>