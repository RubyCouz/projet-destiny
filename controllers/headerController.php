<?php

 $gamerTag = '';
 $formError = array();
 $message = '';

// connexion de l'utilisateur
 if (isset($_POST['connect']))
 {
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
                 if (isset($_POST['rememberMe']))
                 {
                     setcookie('gtCookies', $gamerTag, time() + 365 * 24 * 3600, '/', 'titrepro', false, false);
                     setcookie('passwordCookies', $user->password, time() + 365 * 24 * 3600, '/', 'titrepro', false, false);
                     setcookie('idCookies', $user->id, time() + 365 * 24 * 3600, '/', 'titrepro', false, false);

                     $_SESSION['isConnect'] = true;
                 }
                 // on rempli la session avec les attributs de l'objet issu de l'hydratation
                 $_SESSION['gamerTag'] = $user->gamerTag;
                 $_SESSION['password'] = $user->password;
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
 else
 {
     //si des cookies sont présents
     if (!empty($_COOKIE['gtCookies']) && !empty($_COOKIE['passwordCookies']) && !empty($_COOKIE['idCookies']))
     {
         // associations des cookies au vairables de sessions
         $_SESSION['gamerTag'] = $_COOKIE['gtCookies'];
         $_SESSION['password'] = $_COOKIE['passwordCookies'];
         $_SESSION['id'] = $_COOKIE['idCookies'];
         $_SESSION['isConnect'] = true;
     }
 }
 // vérification de la validité des cookies
// if (!empty($_COOKIE['gtCookies']) && !empty($_COOKIE['passwordCookies']) && !empty($_COOKIE['idCookies']))
// {
//     // on instancie l'objet verifyCookie
//     $verifyCookies = new u01cc_users();
//     $verifyCookies->gamerTag = $_COOKIE['gtCookies'];
//     $verifyCookies->password = $_COOKIE['passwordCookies'];
//     $verifyCookies->id = $_COOKIE['idCookies'];
//     $verifyCookies->verifyCookie();
//     // si la méthode renvoie false
//     if ($state == false)
//     {
//         // on vide les cookies
//         setcookie('gtCookies', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
//         setcookie('passwordCookies', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
//         setcookie('id', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
//         //destruction de la session
//         session_destroy();
//         //redirection vers la page d'accueil
//         header('location: ../index.php');
//     }
 //}