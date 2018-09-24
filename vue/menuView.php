<html>
   <head>
      <!-- On définit les méta -->
      <meta charset = "UTF-8">
      <meta name="author" content="Fabio Cumbo">
      <meta name="description" content="Site web communautaire sur Clash royal">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSS style import -->
      <link rel="stylesheet" href="../css/style.css"/>
      <link rel="stylesheet"  href="../css/bootstrap4.min.css"/>
      <link rel="stylesheet" href="../css/bootstrap3.min.css">
      <!-- .... -->
      <title>Accueil</title>

   </head>
      <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand" href="index.php">
                    <img src="../images/banniere.jpg" alt="banniere">
            </a>       
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jeu.php">Le jeu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajoutDeck.php">Ajouter un deck</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listeDeck.php?page=1">Voir les decks de la communauté</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="listeMesDecks.php">Voir mes decks</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="rechercheDecks.php">Rechercher un deck</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <?php
                    //Si on est connecté on affiche le bouton se deconnecter et son pseudo
                    if (!isset($_SESSION['droit']) || $_SESSION['droit'] == 0 ) 
                    {?>
                        <li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
                        <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                    <?php    
                    }
                    else
                    {?>
                        <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Se déconnecter</a></li>
                        <li><a href=<?php echo "profil.php?id=".$_SESSION['pseudo'] ?>><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['pseudo'] ?></a></li>
                     <?php
                     //On envoie le pseudo comme id pour avoir plus facile quand on va consulter la liste des decks 
                    }
                    ?>
             </ul>
            </div>
            </nav>