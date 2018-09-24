<?php
    include_once('sessionCheck.php');
    include_once('../vue/menuView.php');

    if(isset($erreur))
    {
        include_once('../vue/erreurView.php');
    }

    else
    {
        header('Location: index.php');
    }

    include_once('../vue/footerView.php');

?>