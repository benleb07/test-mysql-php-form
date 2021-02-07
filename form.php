<!DOCTYPE html>
   <html lang="FR-fr">
     <head>
     	<meta charset="utf-8"/>
     	<link rel="stylesheet" href="style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
     	<title>CONNEXION</title>
     </head>

     <body>
        <div id="banner1">
            <p>Mon CV en ligne !</p>
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
            <p>Connectez-vous !</p>
     	</div>

     	<div class="contenuprincipal">
        <?php
              if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);

                switch($err)
                {
                    case 'password':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> mot de passe incorrect
                        </div>
                <?php
                break;

                    case 'email':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> email incorrect
                        </div>
                <?php
                break;

                    case 'already'
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> compte inexistant
                        </div>
                <?php
                break;

                }
            }

        ?>
     		 <form method="post" action="connexion.php">
       <fieldset>
        <legend>Vos Coordonnées</legend>

        <p class="pform">
            
            <br/>
            <label for="email">Votre adresse mail :</label>
            <input type="email" name="email" id="email" placeholder="Ex : ben.leb667@gmail.com" size="30" max length="10"/>

            <br/>
            <label for="pass">Votre mot de passe :</label>
            <input type="password" name="pass" id="pass" placeholder="Ex : VotreMotDePasse" size="30" max length="10" />

            <br/><br/>
            <input type="submit" name="submit" value="Connexion"/><br/><br/>
            <a href="inscription.php">Pas encore inscrit ? Cliquez ici !</a>

            <!-- <input type="submit" name="submit" value="Connexion"/> -->
          
            

        </p>
       </fieldset>
      </form>

     	</div>

     	<footer>
     		<p>LEBON Benjamin, Tous droits réservés.</p>

     	</footer>

     



     </body>


   </html>