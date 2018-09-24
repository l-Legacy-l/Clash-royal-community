<?php
require_once('../modele/modele.php');
function ajoutDeck($pseudo,$nom,$type,$cout,$carte1,$carte2,$carte3,$carte4,$carte5,$carte6,$carte7,$carte8,$description)
{
    $sql= 'INSERT INTO listedeck (pseudo, nom, type, cout, carte1, carte2, carte3, carte4, carte5, carte6, carte7, carte8, description)
           VALUES (:pseudo, :nom, :type, :cout, :carte1, :carte2, :carte3, :carte4, :carte5, :carte6, :carte7, :carte8, :description)';

    $param = array('pseudo' => $pseudo,'nom' => $nom, 'type' => $type, 'cout' => $cout, 'carte1' => $carte1, 'carte2' => $carte2,
             'carte3' => $carte3, 'carte4' => $carte4, 'carte5' => $carte5, 'carte6' => $carte6, 'carte7' => $carte7, 'carte8' => $carte8,
             'description' => $description);

    executeReq($sql, $param);
    
}
?>
