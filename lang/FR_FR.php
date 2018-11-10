<?php

 /**
  * définition des constantes servant au site
  */
 //formulaire de conexion
 define('FORM_EMAIL', 'Email');
 define('FORM_PASSWORD', 'Mot de passe');
 define('FORM_CONNECT', 'Se connecter');
 define('FORM_TITLE', 'Connexion');

 //formulaire d'inscription
 define('REGISTER_TITLE', 'Inscription');
 define('REGISTER_LASTNAME', 'Nom');
 define('REGISTER_FIRSTNAME', 'Prénom');
 define('REGISTER_BIRTHDATE', 'Date de naissance');
 define('REGISTER_EMAIL', 'Email');
 define('REGISTER_PASSWORD', 'Mot de passe');
 define('REGISTER_PASSWORD_VERIFY', 'Confirmez votre mot de passe');
 define('REGISTER_CONSOLE', 'Plate-forme');
 define('REGISTER_GAMERTAG', 'Pseudo');
 define('REGISTER_SIGNIN', 'S\'inscrire');

 //Erreur
 define('ERROR_LASTNAME', 'Saisie invalide');
 define('ERROR_MISS_LASTNAME', 'Vous n\'avez pas saisi votre nom');
 define('ERROR_FIRSTNAME', 'Saisie invalide');
 define('ERROR_MISS_FIRSTNAME', 'Vous n\'avez pas saisi votre prénom');
 define('ERROR_BIRTHDATE', 'Saisie invalide');
 define('ERROR_MISS_BIRTHDATE', 'Vous n\'avez pas saisi votre date de naissance');
 define('ERROR_EMAIL', 'Saisie invalide');
 define('ERROR_MISS_EMAIL', 'Vous n\'avez pas saisi votre email');
 define('ERROR_PASSWORD', 'Saisie invalide');
 define('ERROR_PASSWORD_MATCH', 'Les mots de passe sont différents');
 define('ERROR_MISS_PASSWORD', 'Vous n\'avez pas saisi votre mot de passe');
 define('ERROR_PASSWORD_VERIFY', 'Saisie invalide');
 define('ERROR_MISS_PASSWORD_VERIFY', 'Vous n\'avez pas confirmer votre mot de passe');
 define('ERROR_CONSOLE', 'Saisie invalide');
 define('ERROR_MISS_CONSOLE', 'Vous n\'avez pas indiqué votre console');
 define('ERROR_SUBMIT', 'Il y a eu un problème. Veuillez recommencer votre inscription, Gardien.');
 define('ERROR_GAMERTAG', 'Saisie invalide');
 define('ERROR_TITLE', 'Saisie invalide');
 define('ERROR_MISS_TITLE', 'Il faut un titre a votre publication');
 define('ERROR_MISS_GAMERTAG', 'Vous n\'avez pas saisi votre pseudo');
 define('ERROR_CATEGORIES', 'La catégorie choisie est incorrect');
 define('ERROR_MISS_CATEGORIES', 'Vous devez choisir une catégorie'); 
 define('ERROR_CONTENT', 'Saisie invalide'); 
 define('ERROR_MISS_CONTENT', 'Vous n\'avez pas remplis cette section'); 
 define('ERROR_RAIDSTEPS', 'Saisie invalide'); 
 define('ERROR_MISS_RAIDSTEPS', 'Vous n\'avez pas renseignez l\'étape du raid'); 
define('USER_CONNECTION_SUCCESS','Connecté avec succès');
define('USER_CONNECTION_ERROR','Erreur lors de la connexion');
 
 //Menu
 define ('NAV_CONECT', 'Connexion');
 define ('NAV_DISCONECT', 'Déconnexion');
 define ('NAV_WELCOME', 'Bienvenue %s');
 
 //Categories
 define ('CAT_SELECT', 'Selectionnez une catégorie');
 define ('CAT_RAID', 'Raids');
 define ('CAT_TUTO', 'Tutoriels');
 define ('CAT_QUEST', 'Quêtes');
 define ('CAT_VIDEO', 'Video');
 define ('CAT_ARTWORK', 'Artwork');
 define ('CAT_STREAMING', 'Streaming');
 
  //Formulaire d'ajout de contenu
  define('ADD_TITLE', 'Titre');
  define('ADD_REQUIRE', 'Pré-requis ou descriptif');
  define('ADD_NUMBER_STEP', 'Nombre d\'étapes');
  define('ADD_RAID_STEP', 'Nom de l\'étape');
  define('ADD_STEP', 'Ajouter une étape');
  define('ADD_NEXT_STEP', 'Etape suivante');
  define('ADD_CONTENT', 'Contenu');