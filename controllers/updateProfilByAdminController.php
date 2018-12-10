<?php

 //instanciation de l'objet u01cc_role
 $getRole = new u01cc_role();
 $getRoleResult = $getRole->getRole();

 //instanciation de l'objet permettant l'affichage des consoles
 $getConsoles = new u01cc_consoles();
 $getConsolesResult = $getConsoles->getConsoles();
 
//déclaration d'un tableau d'erreur en cas de problème(s) de saisie dans le formulaire d'inscription
 $formError = array();

// déclaration des regexs vérifiants les saisies du formulaire d'inscription
 $namePattern = '/^[a-zA-Zéùîâêäëïüöû\'\s-]+$/';
 $birthdatePattern = '/^(0?\d|[12]\d|3[01])\/(0?\d|1[012])\/((?:19|20)\d{2})$/';
 $gtPattern = '/^(\w*\d*\_*)$/';
 $passwordPattern = '/^[\w+\d+#éàèâêîôûäëüÏö]+$/';
 $consolePattern = '/^(1)|(2)|(3)$/';
 $rolePattern = '/^(1)|(2)|(3)$/';
 if (isset($_POST['submit']))
 {
     $updateUserByAdmin = new u01cc_users;
     $updateUserByAdmin->id = $_GET['id'];
     if (isset($_POST['submit']))
     {

         include_once '../configuration.php';
         include_once '../models/u01cc_users.php';
         //instanciation de l'objet u01cc_users
         $updateUserByAdmin = database::getInstance();
         $updateUserByAdmin = new u01cc_users();
         $updateUserByAdmin->id = $_GET['id'];
         // verification du champs et de la saisie pour le nom
         if (!empty($_POST['lastname']))
         {
             if (preg_match($namePattern, $_POST['lastname']))
             {
                 $updateUserByAdmin->lastname = htmlspecialchars($_POST['lastname']);
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
                 $updateUserByAdmin->firstname = htmlspecialchars($_POST['firstname']);
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
                 $updateUserByAdmin->birthdate = htmlspecialchars($_POST['birthdate']);
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
                 $updateUserByAdmin->email = htmlspecialchars($_POST['email']);
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
                 $updateUserByAdmin->gamerTag = htmlspecialchars($_POST['gamerTag']);
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
//vérification de la presence et du contenu du champ role
         if (!empty($_POST['role']))
         {
             if (preg_match($rolePattern, $_POST['role']))
             {
                 $updateUserByAdmin->id_u01cc_role = htmlspecialchars($_POST['role']);
             }
             else
             {
                 $formError['role'] = ERROR_ROLE;
             }
         }
         else
         {
             $formError['role'] = ERROR_MISS_ROLE;
         }
         // verification du champs et de la saisie pour la plateforme utilisée

         if (!empty($_POST['console']))
         {
             if (preg_match($consolePattern, $_POST['console']))
             {
                 $updateUserByAdmin->id_u01cc_consoles = htmlspecialchars($_POST['console']);
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
             if (!$updateUserByAdmin->updateUserByAdmin())
             {
                 //message d'erreur en cas de problème avec la table ou la bdd
                 $formError['submit'] = ERROR_SUBMIT;
             }
             else
             {
                 $_SESSION['id'] = $_GET['id'];
                 $_SESSION['gamerTag'] = $updateUserByAdmin->gamerTag;
                 $_SESSION['isConnect'] = true;
                 $_SESSION['role'] = $updateUserByAdmin->id_u01cc_role;
             }
         }
     }
 }
 else
 {
     //instanciation de l'objet récupérant les utilisateurs selon l'id
     $getUsersById = new u01cc_users();
     //on récupère l'id de l'utilisateur passé dans l'URL
     $getUsersById->id = $_GET['id'];
     $getUsersByIdResult = $getUsersById->getUsersById();
 }
?>
