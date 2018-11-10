<?php

 $gamerTag = '';
 $formError = array();
 $message = '';

 if (!empty($_POST['gamerTag']))
 {
     $gamerTag = htmlspecialchars($_POST['gamerTag']);
 }
 else
 {
     $formError['gamerTag'] = ERROR_GAMERTAG;
 }
 if (!empty($_POST['password']))
 {
     $password = ($_POST['password']);
 }
 else
 {
     $formError['password'] = ERROR_PASSWORD;
 }
 if (count($formError) == 0)
 {
     //accès à l'instance de la classe
  
     //on instancie l'objet users
     $user = new u01cc_users();
     $user->gamerTag = $gamerTag;
     if ($user->userConnection())
     {
         if (password_verify($password, $user->password))
         {
             //la connexion se fait
             $message = USER_CONNECTION_SUCCESS;
             // on rempli la session avec les attributs de l'objet issu de l'hydratation
             $_SESSION['gamerTag'] = $user->gamerTag;
             $_SESSION['id'] = $user->id;
             $_SESSION['isConnect'] = true;
         }
         else
         {
             //la connexion echoue
             $message = USER_CONNECTION_ERROR;
         }
     }
 }
 if (isset($_GET['action']))
 {
     //si l'utilidsateur veut se déconnecter
     if ($_GET['action'] == 'disconnect')
     {
         //destruction de la session
         session_destroy();
         //redirection vers la page d'accueil
         header('location:../views/home.php');
     }
 }