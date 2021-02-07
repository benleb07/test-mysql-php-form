<?php 
    session_start();
    require_once 'config.php';

    if(isset($_POST['email']) && isset($_POST['pass']))
    {
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);

        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($pass, $data['password']))
                {
                    $_SESSION['user'] = $data['email'];
                    header('Location: landing.php');
                    die();
                }else{ header('Location: index.php?login_err=password'); die(); }
            }else{ header('Location: index.php?login_err=email'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    }