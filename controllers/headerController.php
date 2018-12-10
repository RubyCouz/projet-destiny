<?php
// regex vérifant les champs de saisie
 $gtPattern = '/^(\w*\d*\_*)$/';
 $passwordPattern = '/^[\w+\d+#éàèâêîôûäëüÏö]+$/';
 // définitons des variables contenant les valeurs de la saisie
 $gamerTag = '';
 $password = '';
 // définition d'un tableau d'erreur
 $connexionError = array();

// connexion de l'utilisateur
 if (isset($_POST['connect']))
 { //vérification de la présence des champs de saisie et de leur saisie
     if (!empty($_POST['gamerTag']))
     {
         if (preg_match($gtPattern, $_POST['gamerTag']))
         {
             $gamerTag = htmlspecialchars($_POST['gamerTag']);
         }
         else
         {// erreur en cas de mauvaise saisie
             $ConnexionError['gamerTag'] = ERROR_GAMERTAG;
         }
     }
     else
     {// errueur en cas d'absence de saisie
         $connexionError['gamerTag'] = ERROR_MISS_GAMERTAG;
     }
     if (!empty($_POST['password']))
     {
         if (preg_match($passwordPattern, $_POST['password']))
         {

             $password = ($_POST['password']);
         }
         else
         { // erreur en cas de mauvaise saisie
             $connexionError['password'] = ERROR_PASSWORD;
         }
     }
     else
     {// errueur en cas d'absence de saisie
         $connexionError['confirmPassword'] = ERROR_PASSWORD_VERIFY;
     }
 }
 if (count($connexionError) == 0)
 {
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
             $_SESSION['role'] = $user->id_u01cc_role;
             $_SESSION['isConnect'] = true;
             if (isset($_POST['rememberMe']))
             {
                 setcookie('gtCookies', $user->gamerTag, time() + 365 * 24 * 3600, '/', 'titrepro', false, false);
                 setcookie('passwordCookies', $user->password, time() + 365 * 24 * 3600, '/', 'titrepro', false, false);
                 setcookie('idCookies', $user->id, time() + 365 * 24 * 3600, '/', 'titrepro', false, false);
                 setcookie('role', $user->id_u01cc_role, time() + 365 * 24 * 3600, '/', 'titrepro', false, false);
             }
         }
         else
         {
             //la connexion echoue
             $connexionError['connect'] = USER_CONNECTION_ERROR;
         }
     }
 }


 if (isset($_GET['action']))
 {
     //si l'utilidsateur veut se déconnecter
     if ($_GET['action'] == 'disconnect')
     {
         //s'il possède des cookies
         if (!empty($_COOKIE['gtCookies']) && !empty($_COOKIE['passwordCookies']) && !empty($_COOKIE['idCookies']))
         {
             //destruction des cookie
             setcookie('gtCookies', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
             setcookie('passwordCookies', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
             setcookie('id', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
         }
         //destruction de la session
         session_destroy();
         //redirection vers la page d'accueil
         header('location: ../views/home.php');
     }
 }

 //si des cookies sont présents
 if (!empty($_COOKIE['gtCookies']) && !empty($_COOKIE['passwordCookies']) && !empty($_COOKIE['idCookies']))
 {
     // associations des cookies au vairables de sessions
     $_SESSION['gamerTag'] = $_COOKIE['gtCookies'];
     $_SESSION['password'] = $_COOKIE['passwordCookies'];
     $_SESSION['id'] = $_COOKIE['idCookies'];
     $_SESSION['isConnect'] = true;
 }