<?php
require_once('../modele/modele.php');
function editDeck($nom,$type,$cout,$carte1,$carte2,$carte3,$carte4,$carte5,$carte6,$carte7,$carte8,$description,$id)
{
    $sql = 'UPDATE listeDeck SET nom = :nom, type = :type, cout = :cout, carte1 = :carte1, carte2 = :carte2, 
            carte3 = :carte3, carte4 = :carte4, carte5 = :carte5, carte6 = :carte6, carte7 = :carte7, carte8 = :carte8,
            description = :description WHERE id = :id';

    $param = array('nom' => $nom, 'type' => $type, 'cout' => $cout, 'carte1' => $carte1, 'carte2' => $carte2,
             'carte3' => $carte3, 'carte4' => $carte4, 'carte5' => $carte5, 'carte6' => $carte6, 'carte7' => $carte7,
             'carte8' => $carte8, 'description' => $description, 'id' => $id);

    executeReq($sql, $param) -> fetch();
   
}

function recupDeck($id)
{
    $sql = 'SELECT * FROM listeDeck WHERE id = :id';
    $param = array('id' => $id);

    $donnees = executeReq($sql, $param) -> fetch() ;
    return $donnees;
}
?>
