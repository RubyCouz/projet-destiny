<?php

 //déclaration d'un tableau d'erreur en cas de problème(s) de saisie dans le formulaire d'inscription
 $formError = array();

// déclaration des regexs vérifiants les saisies du formulaire d'inscription
 $namePattern = '/^[a-zA-Zéùîâêäëïüöû\'\s-]+$/';
 $birthdatePattern = '/^(0?\d|[12]\d|3[01])\/(0?\d|1[012])\/((?:19|20)\d{2})$/';
 $gtPattern = '/^(\w*\d*\_*)$/';
 $passwordPattern = '/^[\w+\d+#éàèâêîôûäëüÏö]+$/';
 $consolePattern = '/^(1)|(2)|(3)$/';

// condition vérifiant les données saisies dans le formulaire
 if (isset($_POST['submit']))
 {
     include_once '../configuration.php';
     include_once '../models/u01cc_users.php';
     //instanciation de l'objet u01cc_users
     $addUser = database::getInstance();
     $addUser = new u01cc_users();
     // verification du champs et de la saisie pour le nom
     if (!empty($_POST['lastname']))
     {
         if (preg_match($namePattern, $_POST['lastname']))
         {
             $addUser->lastname = htmlspecialchars($_POST['lastname']);
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
             $addUser->firstname = htmlspecialchars($_POST['firstname']);
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
             $addUser->birthdate = htmlspecialchars($_POST['birthdate']);
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
             $addUser->email = htmlspecialchars($_POST['email']);
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
             $addUser->gamerTag = htmlspecialchars($_POST['gamerTag']);
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
             $addUser->password = htmlspecialchars($_POST['password']);
             $addUser->confirmPassword = htmlspecialchars($_POST['confirmPassword']);
             //vérification de la bonne saisie du mdp avec la double saisie de celui-ci => comparaison des saisies
             if ($addUser->password == $addUser->confirmPassword)
             {
                 // hash du mdp pour la sécurisation
                 $addUser->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
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
     $_POST['console'] = 0;
     if (!empty($_POST['console']))
     {
         if (preg_match($consolePattern, $_POST['console']))
         {
            $addUser->id_u01cc_consoles = htmlspecialchars($_POST['console']);
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
     if (count($formError) == 0)
     {
         //insertion des données saisies dans le formulaire dans la table user
         if (!$addUser->addUser())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $formError['submit'] = ERROR_SUBMIT;
         }
     }
     if (count($formError) == 0)
     {
         $_SESSION['gamerTag'] = $addUser->gamerTag;
         $_SESSION['isConnect'] = true;
     }
 }
