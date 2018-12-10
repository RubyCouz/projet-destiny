<?php

 //déclaration d'un tableau d'erreur en cas de problème(s) de saisie dans le formulaire d'inscription
 $formError = array();

// déclaration des regexs vérifiants les saisies du formulaire d'inscription
 $namePattern = '/^[a-zA-Zéùîâêäëïüöû\'\s-]+$/';
 $birthdatePattern = '/^(0?\d|[12]\d|3[01])\/(0?\d|1[012])\/((?:19|20)\d{2})$/';
 $gtPattern = '/^(\w*\d*\_*)$/';
 $passwordPattern = '/^[\w+\d+#éàèâêîôûäëüÏö]+$/';
 $consolePattern = '/^(1)|(2)|(3)$/';
//instanciation de l'objet permettant l'affichage des consoles
 $getConsoles = new u01cc_consoles();
 $getConsolesResult = $getConsoles->getConsoles();
 //instanciation de l'objet récupérant les utilisateurs selon l'id
 $getUsersById = new u01cc_users();
 //on récupère l'id de l'utilisateur passé dans l'URL
 $getUsersById->id = $_GET['id'];
 $getUsersByIdResult = $getUsersById->getUsersById();
//vérification des informations saisies après modification de l'utilisateur
 if (isset($_POST['submit']))
 {

     include_once '../configuration.php';
     include_once '../models/u01cc_users.php';
     //instanciation de l'objet u01cc_users
     $modifyUser = database::getInstance();
     $modifyUser = new u01cc_users();
     $modifyUser->id = $_GET['id'];
     // verification du champs et de la saisie pour le nom
     if (!empty($_POST['lastname']))
     {
         if (preg_match($namePattern, $_POST['lastname']))
         {
             $modifyUser->lastname = htmlspecialchars($_POST['lastname']);
         }
         else
         {
             $formError['lastname'] = ERROR_LASTNAME;
         }
     }
     else
     {
         $formError['lastname'] = ERROR_MISS_LASTNAME;
     }
     // verification du champs et de la saisie pour le prénom
     if (!empty($_POST['firstname']))
     {
         if (preg_match($namePattern, $_POST['firstname']))
         {
             $modifyUser->firstname = htmlspecialchars($_POST['firstname']);
         }
         else
         {
             $formError['firstname'] = ERROR_FIRSTNAME;
         }
     }
     else
     {
         $formError['firstname'] = ERROR_MISS_FIRSTNAME;
     }
     // verification du champs et de la saisie pour la date de naissance
     if (!empty($_POST['birthdate']))
     {
         if (preg_match($birthdatePattern, $_POST['birthdate']))
         {
             $modifyUser->birthdate = htmlspecialchars($_POST['birthdate']);
         }
         else
         {
             $formError['birthdate'] = ERROR_BIRTHDATE;
         }
     }
     else
     {
         $formError['birthdate'] = ERROR_MISS_BIRTHDATE;
     }
     // verification du champs et de la saisie pour l'email
     if (!empty($_POST['email']))
     {
         if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
         {
             $modifyUser->email = htmlspecialchars($_POST['email']);
         }
         else
         {
             $formError['email'] = ERROR_EMAIL;
         }
     }
     else
     {
         $formError['email'] = ERROR_MISS_EMAIL;
     }
     // verification du champs et de la saisie pour le pseudo
     if (!empty($_POST['gamerTag']))
     {
         if (preg_match($gtPattern, $_POST['gamerTag']))
         {
             $modifyUser->gamerTag = htmlspecialchars($_POST['gamerTag']);
         }
         else
         {
             $formError['gamerTag'] = ERROR_GAMERTAG;
         }
     }
     else
     {
         $formError['gamerTag'] = ERROR_MISS_GAMERTAG;
     }
//vérification de la presence et du contenu des champs mdp et confirmation mdp
     if (!empty($_POST['password']) && !empty($_POST['confirmPassword']))
     {
         //verification que les deux données saisies passent la regex
         if (preg_match($passwordPattern, $_POST['password']) && preg_match($passwordPattern, $_POST['confirmPassword']))
         {
             $modifyUser->password = htmlspecialchars($_POST['password']);
             $modifyUser->confirmPassword = htmlspecialchars($_POST['confirmPassword']);
             //vérification de la bonne saisie du mdp avec la double saisie de celui-ci => comparaison des saisies
             if ($modifyUser->password == $modifyUser->confirmPassword)
             {
                 // hash du mdp pour la sécurisation
                 $modifyUser->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
             }
             else
             {
                 //message d'erreur si pas de concordance entre les mdp
                 $formError['passwordError'] = ERROR_PASSWORD_MATCH;
             }
         }
         else
         //détail au cas par cas des messages d'erreurs pour saisie incorrect sur chacun des champs ou absence de saisie 
         {
             if (!preg_match($passwordPattern, $_POST['password']))
             {
                 $formError['password'] = ERROR_PASSWORD;
             }
             if (!preg_match($passwordPattern, $_POST['confirmPassword']))
             {
                 $formError['confirmPassword'] = ERROR_PASSWORD_VERIFY;
             }
         }
     }
     else
     {
         if (empty($_POST['password']))
         {
             $formError['password'] = ERROR_MISS_PASSWORD;
         }
         if (empty($_POST['confirmPassword']))
         {
             $formError['confirmPassword'] = ERROR_MISS_PASSWORD_VERIFY;
         }
     }
     // verification du champs et de la saisie pour la plateforme utilisée

     if (!empty($_POST['console']))
     {
         if (preg_match($consolePattern, $_POST['console']))
         {
             $modifyUser->id_u01cc_consoles = htmlspecialchars($_POST['console']);
         }
         else
         {
             $formError['console'] = ERROR_CONSOLE;
         }
     }
     else
     {
         $formError['console'] = ERROR_MISS_CONSOLE;
     }
     var_dump($modifyUser);
     if (count($formError) == 0)
     {
         //insertion des données saisies dans le formulaire dans la table user
         if (!$modifyUser->modifyUser())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $formError['submit'] = ERROR_SUBMIT;
         }
         else
         {
             $_SESSION['id'] = $_GET['id'];
             $_SESSION['gamerTag'] = $modifyUser->gamerTag;
             $_SESSION['isConnect'] = true;
         }
     }
 }
 if (isset($_POST['delete']))
 {
     // on récupère l'instance de connexion à la base de données
     $database = database::getInstance();
     $database->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // toutes les erreurs sont considerés comme des exceptions

     try {
         // début de la transaction
         $database->pdo->beginTransaction();
         //on instancie l'objet modifiant l'id de l'utilisateur qui supprime son profil ayant fait des contribution
         $updateGtContribs = new u01cc_contribs();
         // récupération de l'i utilisateur passé dans l'url
         $updateGtContribs->id = $_GET['id'];
         $updateGtContribsResult = $updateGtContribs->updateGtContribs();
         //instanciation de l'objet permettant la suppression de l'utilisateur
         $deleteUser = new u01cc_users();
         // récupération de l'i utilisateur passé dans l'url
         $deleteUser->id = $_GET['id'];
         $deleteUserResult = $deleteUser->deleteUser();
         // sauvegarde en caas de succés
         $database->pdo->commit();
         //verificationd la présence de cookie et destruction (on les vide)
         if (!empty($_COOKIE['gtCookies']) && !empty($_COOKIE['passwordCookies']) && !empty($_COOKIE['idCookies']))
         {
             //destruction des cookie
             setcookie('gtCookies', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
             setcookie('passwordCookies', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
             setcookie('id', '', time() - (365 * 24 * 3600), '/', 'titrepro', false, false);
         }
         //destruction de la session
         session_destroy();

         //on récupère les exceptions s'il y a eu un soucis
     } catch (Exception $ex) {
         //message d'erreur
         $formError['delete'] = ERROR_DEL;
         die($ex->getMessage());
         // annulation des actions de la transaction
         $database->pdo->rollBack();
     }
 }
?>