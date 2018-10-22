<?php

 //déclaration d'un tableau d'erreur en cas de problème(s) de saisie dans le formulaire d'inscription
 $formError = array();

// déclaration des regexs vérifiants les saisies du formulaire d'inscription


 $namePattern = '/^[a-zA-Zéùîâêäëïüöû\'\s-]+$/';
 $birthdatePattern = '/^(0?\d|[12]\d|3[01])\/(0?\d|1[012])\/((?:19|20)\d{2})$/';
 $emailPattern = '/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/';
 $gtPattern = '/^(\w*\d*\_*)$/';
 $passwordPattern = '/^[\w+\d+#éàèâêîôûäëüÏö]+$/';
 $consolePattern = '/^(1)|(2)|(3)$/';

// condition vérifiant les données saisies dans le formulaire
 if (isset($_POST['submit']))
 {
     $addUser = new u01cc_users();
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
     if (!empty($_POST['email']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
     {
         if (preg_match($emailPattern, $_POST['email']))
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
         $formeError['email'] = ERROR_MISS_EMAIL;
     }
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
         $formeError['gamerTag'] = ERROR_MISS_GAMERTAG;
     }
     if (!empty($_POST['password']))
     {
         if (preg_match($passwordPattern, $_POST['password']))
         {
             $addUser->password = htmlspecialchars($_POST['password']);
         }
         else
         {
             $formError['password'] = ERROR_PASSWORD;
         }
     }
     else
     {
         $formeError['password'] = ERROR_MISS_PASSWORD;
     }
     if (!empty($_POST['confirmPassword']))
     {
         if (preg_match($passwordPattern, $_POST['confirmPassword']))
         {
             $addUser->confirmPassword = htmlspecialchars($_POST['confirmPassword']);
         }
         else
         {
             $formError['confirmPassword'] = ERROR_PASSWORD_VERIFY;
         }
     }
     else
     {
         $formError['confirmPassword'] = ERROR_MISS_PASSWORD_VERIFY;
     }
//vérification de la bonne saisie du mdp avec la double saisie de celui-ci
     if ($addUser->password != $addUser->confirmPassword)
     {
         $formError['passwordError'] = ERROR_PASSWORD_MATCH;
     }
     else
     {
         // hash du mdp pour la sécurisation
         $addUser->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
     }

     if (!empty($_POST['console']))
     {
         if (preg_match($consolePattern, $_POST['console']))
         {
             if (htmlspecialchars($_POST['console']) == 1)
             {
                 $addUser->console = "XBOX";
             }
             if (htmlspecialchars($_POST['console']) == 2)
             {
                 $addUser->console = "Playstation";
             }
             if (htmlspecialchars($_POST['console']) == 3)
             {
                 $addUser->console = "P.C";
             }
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
         if (!$addUser->addUser())
         {
             $formError['submit'] = ERROR_SUBMIT;
         }
     }
 }