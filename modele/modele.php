<?php 
date_default_timezone_set('Europe/Brussels');
function getBdd()
{
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=clashroyal;charset=utf8', 'root', 'Test123*');
        return $bdd;
    }
    catch (Exception $e) 
    {
        echo '<p> Erreur de connexion à la BD.<p> '.$e;
    }
}

//Requête préparée
function executeReq($sql,$param)
{
    $bdd = getBdd();
    $req = $bdd -> prepare($sql);
    $req -> execute($param);
    return $req;
}

//Requête directe
function executeQueryReq($sql)
{
    $bdd = getBdd();
    $req = $bdd -> query($sql);
    
    return $req;
}

?>