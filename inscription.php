<!DOCTYPE html>
   <html lang="FR-fr">
     <head>
     	<meta charset="utf-8"/>
     	<link rel="stylesheet" href="style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
     	<title>INSCRIPTION</title>
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
            <p>Inscrivez-vous !</p>
     	</div>

     	<div class="contenuprincipal">
        <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 
                        break;
                    }
                }
        ?>

        
      <form method="post" action="inscription_traitement.php">
       <fieldset>
        <legend>Vos Coordonnées</legend>

        <p class="pinscription">
            <label for="pseudo">Votre Pseudo :</label>  
            <input type="text" name="pseudo" id="pseudo" placeholder="Ex : Ben.Leb" size="30" maxlength="10" />

            <br/>
            <label for="email">Votre adresse mail :</label>
            <input type="email" name="email" id="email" placeholder="Ex : ben.leb667@gmail.com" size="30" max length="10"/>
                        

            <br/>
            <label for="pass">Votre mot de passe :</label>
            <input type="password" name="pass" id="pass" placeholder="Ex : VotreMotDePasse" size="30" max length="10" />

            <br/>
            <label for="pass">Confirmez votre mot de passe :</label>
            <input type="password" name="pass_retype" id="pass_retype" placeholder="Ex : VotreMotDePasse" size="30" max length="10" />

            <br/><br/>

            <input type="submit" value="Inscription"><br/><br/>
            <a href="form.php">Déjà inscrit ? Connectez-vous !</a>


        </p>
       </fieldset>
      </form>

     	</div>

     	<footer>
     		<p>LEBON Benjamin, Tous droits réservés.</p>

     	</footer>

     



     </body>


   </html>