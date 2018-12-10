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
 include_once '../configuration.php';
 $getConsoles = new u01cc_consoles();
 $getConsolesResult = $getConsoles->getConsoles();

 //appel ajax pour vérifier si un gt ou un email existe déja dans la bdd
 if (isset($_POST['gtVerify']))
 {
     include_once '../configuration.php';
     $user = new u01cc_users();
     $user->gamerTag = htmlspecialchars($_POST['gtVerify']);
     echo $user->checkIfGtExist();
 }
 elseif (isset($_POST['emailVerify']))
 {
     include_once '../configuration.php';
     $user = new u01cc_users();
     $user->email = htmlspecialchars($_POST['emailVerify']);
     echo $user->checkIfMailExist();
 }
 else
 {
// condition vérifiant les données saisies dans le formulaire
     if (isset($_POST['submit']))
     {
         include_once '../configuration.php';
         include_once '../models/u01cc_users.php';
         //instanciation de l'objet u01cc_users
         $addUser = new u01cc_users();
         // verification du champs et de la saisie pour le nom
         if (!empty($_POST['lastname']))
         {
             //on verifie que la saisie correspond à ce qu'on attend
             if (preg_match($namePattern, $_POST['lastname']))
             {
                 $addUser->lastname = htmlspecialchars($_POST['lastname']);
             }
             else
             { // erreur en cas de mauvaise saisie
                 $formError['lastname'] = ERROR_LASTNAME;
             }
         }
         else
         { // erreur en cas d'absence de saisie
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
             { // erreur en cas de mauvaise saisie
                 $formError['firstname'] = ERROR_FIRSTNAME;
             }
         }
         else
         {// erreur en cas d'absence de saisie
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
             { // erreur en cas de mauvaise saisie
                 $formError['birthdate'] = ERROR_BIRTHDATE;
             }
         }
         else
         {// erreur en cas d'absence de saisie
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
             { // erreur en cas de mauvaise saisie
                 $formError['email'] = ERROR_EMAIL;
             }
         }
         else
         {// erreur en cas d'absence de saisie
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
             {// erreur en cas de mauvaise saisie
                 $formError['gamerTag'] = ERROR_GAMERTAG;
             }
         }
         else
         {// erreur en cas d'absence de saisie
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
                 {// erreur en cas de mauvaise saisie
                     $formError['password'] = ERROR_PASSWORD;
                 }
                 if (!preg_match($passwordPattern, $_POST['confirmPassword']))
                 {// erreur en cas de mauvaise saisie
                     $formError['confirmPassword'] = ERROR_PASSWORD_VERIFY;
                 }
             }
         }
         else
         {
             if (empty($_POST['password']))
             {// erreur en cas d'absence de saisie
                 $formError['password'] = ERROR_MISS_PASSWORD;
             }
             if (empty($_POST['confirmPassword']))
             {// erreur en cas d'absence de saisie
                 $formError['confirmPassword'] = ERROR_MISS_PASSWORD_VERIFY;
             }
         }
         // verification du champs et de la saisie pour la plateforme utilisée

         if (!empty($_POST['console']))
         {
             if (preg_match($consolePattern, $_POST['console']))
             {
                 $addUser->id_u01cc_consoles = htmlspecialchars($_POST['console']);
             }
             else
             {// erreur en cas de mauvaise saisie
                 $formError['console'] = ERROR_CONSOLE;
             }
         }
         else
         {// erreur en cas d'absence de saisie
             $formError['console'] = ERROR_MISS_CONSOLE;
         }
         //en cas d'absence d'errreur
         if (count($formError) == 0)
         {
             //insertion des données saisies dans le formulaire dans la table user
             if (!$addUser->addUser())
             {
                 //message d'erreur en cas de problème avec la table ou la bdd
                 $formError['submit'] = ERROR_SUBMIT;
             }
             else
             { //on definis des variable de sessions gardant des informations nécessaire à la bonne navigation de l'utilisateur sur le site
                 $_SESSION['id'] = $addUser->id;
                 $_SESSION['gamerTag'] = $addUser->gamerTag;
                 $_SESSION['role'] = 2;
                 $_SESSION['isConnect'] = true;
             }
         }
     }
 }
