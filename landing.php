<?php
    session_start();
    //if(isset($_SESSION['user']))
      //  header('Location:index.php');

?>

<!DOCTYPE html>
   <html lang="FR-fr">
     <head>
     	<meta charset="utf-8"/>
     	<link rel="stylesheet" href="style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     	<title>INSCRIPTION</title>
     </head>

     <body>
        <div id="banner1">
            <p>Nom du Site !</p>
        </div>
     	<div class="menu">
            <ul>
            	<li><a href="index.php">ACCUEIL</a></li>
                <li><a href="form.php">CONNEXION</a></li>
            	<li><a href="news.html">NEWS</a></li>
            	<li><a href="infos.html">INFOS</a></li>
            	<li><a href="contact.php">CONTACT</a></li>


            </ul>
     	</div>
     	<div class="banner2">
            
     	</div>

     	<div class="contenuprincipal">

        <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>
            <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
            <a href="deconnexion.php">Déconnexion</a>
            
     		 

     	</div>

     	<footer>
     		<p>LEBON Benjamin, Tous droits réservés.</p>

     	</footer>

     



     </body>


   </html>