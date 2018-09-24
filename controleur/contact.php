<?php
	include_once('sessionCheck.php');
	include_once('../vue/menuView.php');


    if(isset($_POST['nom']) || isset($_POST['sujet']) || isset($_POST['mail']) || isset($_POST['message']))
    {
		//Si je suis connecté, on va afficher déjà le nom et le mail de l'utilsateur
        if (!empty($_POST['nom']) && !empty($_POST['sujet']) && !empty($_POST['mail']) && !empty($_POST['message']) && 
        !empty($_POST['mail']))
        {
			$nom = htmlspecialchars($_POST['nom']);
			$mail = htmlspecialchars($_POST['mail']);
			$sujet = htmlspecialchars($_POST['sujet']);
			$message = htmlspecialchars($_POST['message']);
			include_once('../vue/contactView.php');
			
           if (preg_match("#^[a-zA-Z0-9\'\.\,\;\-\_\+\-\!\?\&\é\@\"\'\#\è\à\ç\€\$\ù\%\:\)\(\* ]{2,20}$#", $nom))
            {
                if(preg_match("#^[a-zA-Z0-9\'\.\,\;\-\_\+\-\!\?\&\é\@\"\'\#\è\à\ç\€\$\ù\%\:\)\(\* ]{2,40}$#", $sujet))
                {
                    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail))
                    {     
						//Mail de l'administrateur                   
						$mail = 'fabio181097@gmail.com';
						// filtrage des serveurs qui posent problème
                        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn|outlook).[a-z]{2,4}$#", $mail))
                        {
                            $passage_ligne = "\r\n";
                        }
                        else
                        {
                            $passage_ligne = "\n";
                        }

                        $message_txt = $_POST['message'];
						 
						// création de boundary
						$boundary = "-----=".md5(rand());

						$sujet = "Mail de ".$nom." - ".$_POST['sujet'];

						// création du header du mail
						$header = "From:" . $nom . "<" . $_POST['mail'] . ">".$passage_ligne;
						$header.= "Reply-to:<" . $_POST['mail'] . ">".$passage_ligne;
						$header.= "MIME-Version: 1.0".$passage_ligne;
						$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

						//  création du message
						$message = $passage_ligne."--".$boundary.$passage_ligne;

						$message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
						$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
						$message.= $passage_ligne.$message_txt.$passage_ligne.$passage_ligne."Mail de ".$nom." : ".$_POST['mail'].$passage_ligne;

						$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
							
						// envoi du mail
						if (mail($mail,$sujet,$message,$header))
						{
							//On rafraichit la page pour prendre en compte le nettoyage des entrées
							echo '<meta http-equiv="refresh" content="0;URL=contact.php">';
							//On a envoyé le mail, on enregistre ça dans une variable pour prévenir l'utilisateur
							$_SESSION['contactStatut'] = 1;

						} else {
							echo "<p>Echec, de l'envoi, réessayez plus tard.</p>";
						}
					}
					else{
						echo "<p>Votre adresse mail est incorrect, veuillez vérifier.</p>";
					}
				}
				else{
					echo "<p>Le sujet de votre mail doit contenir 2 à 40 lettres ou chiffres.</p>";
				}
			}
			else{
				echo "<p>Votre nom doit contenir 2 à 20 lettres ou chiffres.</p>";
			}

		}
		else {
            echo "<p>Remplissez tous les champs.</p>" ;
         } 
		
	}
	
	else
	{
		//Si on est déjà connecté, alors on préremplis le nom et le mail
		if(isset($_SESSION['droit']) && $_SESSION['droit'] == 1)
		{
			$nom = $_SESSION['pseudo'];
			$mail = $_SESSION['mail'];
		}
		include_once('../vue/contactView.php');

		//Si on a envoyé le mail, on préviens l'utilisateur
		if(isset($_SESSION['contactStatut']) && $_SESSION['contactStatut'] == 1)
		{
			echo "<p>Votre message a bien été envoyé, l'administrateur vous répondra d'ici maximum 48 heures.</p>";
			$_SESSION['contactStatut'] = 0;
		}

	}
    
    include_once('../vue/footerView.php');
?>