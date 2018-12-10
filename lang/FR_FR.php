<?php

 /**
  * définition des constantes servant au site
  */
 //log in form
 define('FORM_GT', 'Pseudo');
 define('FORM_PASSWORD', 'Mot de passe');
 define('FORM_CONNECT', 'Se connecter');
 define('FORM_TITLE', 'Connexion');
 define('FORM_SIGNUP', 'Pas encore membre? Inscrivez-vous!!');
 define('FORM_REMEMBERME', 'Se souvenir de moi');
    define('FORM_SIGNIN', 'Inscrivez-vous!!');
 

 //subscribe form
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

 //Error messages
 define('ERROR_LASTNAME', 'Saisie invalide');
 define('ERROR_MISS_LASTNAME', 'Vous n\'avez pas saisi votre nom');
 define('ERROR_FIRSTNAME', 'Saisie invalide');
 define('ERROR_MISS_FIRSTNAME', 'Vous n\'avez pas saisi votre prénom');
 define('ERROR_BIRTHDATE', 'Saisie invalide');
 define('ERROR_MISS_BIRTHDATE', 'Vous n\'avez pas saisi votre date de naissance');
 define('ERROR_EMAIL', 'Saisie invalide');
 define('ERROR_MISS_EMAIL', 'Vous n\'avez pas saisi votre email');
 define('ERROR_EXIST_EMAIL', 'Cet email est déja lié à un compte');
 define('ERROR_PASSWORD', 'Saisie invalide');
 define('ERROR_PASSWORD_MATCH', 'Les mots de passe sont différents');
 define('ERROR_MISS_PASSWORD', 'Vous n\'avez pas saisi votre mot de passe');
 define('ERROR_PASSWORD_VERIFY', 'Saisie invalide');
 define('ERROR_MISS_PASSWORD_VERIFY', 'Vous n\'avez pas confirmer votre mot de passe');
 define('ERROR_CONSOLE', 'Saisie invalide');
 define('ERROR_MISS_CONSOLE', 'Vous n\'avez pas indiqué votre console');
 define('ERROR_ROLE', 'Saisie invalide');
 define('ERROR_MISS_ROLE', 'Vous n\'avez pas indiqué le role du membre');
 define('ERROR_SUBMIT', 'Il y a eu un problème. Veuillez recommencer votre inscription, Gardien.');
 define('ERROR_SUBMIT_CONTENT', 'Oooops... Quelque chose n\'a pas fonctionné...');
 define('ERROR_GAMERTAG', 'Saisie invalide');
 define('ERROR_TITLE', 'Saisie invalide');
 define('ERROR_MISS_TITLE', 'Il faut un titre a votre publication');
 define('ERROR_MISS_GAMERTAG', 'Vous n\'avez pas saisi votre pseudo');
 define('ERROR_EXIST_GAMERTAG', 'Ce pseudo est déja lié à un compte');
 define('ERROR_CATEGORIES', 'La catégorie choisie est incorrect');
 define('ERROR_MISS_CATEGORIES', 'Vous devez choisir une catégorie'); 
 define('ERROR_CONTENT', 'Saisie invalide'); 
 define('ERROR_MISS_CONTENT', 'Vous n\'avez pas remplis cette section'); 
 define('ERROR_RAIDSTEPS', 'Saisie invalide'); 
 define('ERROR_MISS_RAIDSTEPS', 'Vous n\'avez pas renseignez l\'étape du raid'); 
define('USER_CONNECTION_ERROR','Erreur lors de la connexion');
define('ERROR_DEL','Erreur lors de la suppression du profil');
 
 //Menu
 define ('NAV_CONECT', 'Connexion');
 define ('NAV_SUBSCRIBE', 'Inscription');
 define ('NAV_DISCONECT', 'Déconnexion');
 define ('NAV_WELCOME', 'Bonjour %s');
 
 //Categories
 define ('CAT_SELECT', 'Selectionnez une catégorie');
 define ('CAT_RAID', 'Raids');
 define ('CAT_TUTO', 'Tutoriels');
 define ('CAT_QUEST', 'Quêtes');
 define ('CAT_VIDEO', 'Video');
 define ('CAT_ARTWORK', 'Artwork');
 define ('CAT_STREAMING', 'Streaming');
 
  //form add content
   define('ADD_CONTENT_TITLE', 'Créez votre tuto');
  define('ADD_TITLE', 'Titre');
  define('ADD_REQUIRE', 'Pré-requis ou descriptif');
  define('ADD_NUMBER_STEP', 'Nombre d\'étapes');
  define('ADD_RAID_STEP', 'Nom de l\'étape');
  define('ADD_STEP', 'Ajouter une étape');
  define('ADD_VALID', 'Valider');
  define('ADD_NEXT_STEP', 'Etape suivante');
  define('ADD_CONTENT', 'Contenu');
  
  //form add next content
  define('ADD_NEXTCONTENT_SUCCESS', 'Merci de vOtre contribution Gardien(ne)!!!');
  define('ADD_NEXTCONTENT_TITLE', 'Poursuivez votre tuto');
  //confirmation
  define('USER_CONNECTION_SUCCESS','Connecté avec succès');
  define('ADD_CONTENT_SUCCESS','Contenu ajouté avec succès');

  //action admin
  define ('ADMIN_ACCEPT', 'Accepter');
  define ('ADMIN_REFUSE', 'Refuser et supprimer');
  
  //action modal admin
  
  define ('MODAL_VALID', 'Validation');
  define ('MODAL_DEL', 'Suppression');
  define ('MODAL_VALID_QUESTION', 'Êtes-vous sûr de vouloir valider cet ajout?');
  define ('MODAL_DEL_QUESTION', 'Êtes-vous sûr de vouloir supprimer cet ajout?');
  define ('MODAL_BUTTON_YES', 'Oui');
  define ('MODAL_BUTTON_NO', 'Non');
  define ('MODAL_BUTTON_OK', 'Ok');
  define ('MODAL_CONFIRMATION', 'Confirmation');
  define ('MODAL_CONFIRM_ADD', 'Ajout validé');
  define ('MODAL_CONFIRM_DEL', 'Contenu supprimé');
  
  //content moderation in progress
  
  define('INPROGRESS_VALID_TITLE', 'Titre');
  define('INPROGRESS_VALID_CONTENT', 'Contenu');
  define('INPROGRESS_VALID_DATE', 'Date');
  define('INPROGRESS_VALID_GT', 'Gamertag');
  define('INPROGRESS_VALID_CAT', 'Catégorie');
  
  // content moderation in pregress info
  define('INPROGRESS_BY', 'Par');
  define('INPROGRESS_DATE', 'Le');
  define('INPROGRESS_CAT', 'catégorie');
 
  
  //link title
  define('LINK_STORY', 'Histoire');
  define('LINK_GUARDIAN', 'Gardiens et protagonistes');
  define('LINK_ENNEMIES', 'Faction ennemies');
  define('LINK_FACTION', 'Factions alliées et marchand');
  define('LINK_QUESTS', 'Quêtes');
  define('LINK_RAID', 'Raids');
  define('LINK_TUTO', 'tutoriels');
  define('LINK_VIDEO', 'Vidéos');
  define('LINK_STREAMING', 'Streaming');
  define('LINK_FORUM', 'Catégorie du Forum');
  define('LINK_TCHAT', 'Tchat');
  define('LINK_ARTWORKS', 'Artworks');
  define('LINK_LORE', 'Lore de Destiny');
  define('LINK_TUTO_TITLE', 'Tutoriels et astuces');
  define('LINK_CONTRIBS', 'Contributions');
  define('LINK_FORUM_TITLE', 'Forum');
  define('LINK_DISCONNECT', 'Déconnexion');
  define('LINK_SUBSCRIBE', 'Inscription');
  define('LINK_CONNECT', 'Connexion');
  define('LINK_PROFIL', 'Profil');
  define('LINK_HISTORICAL', 'Historique');
  define('LINK_ADD_CONTRIBS', 'Ajouter une conrtibution');
  define('LINK_MOD', 'Modération');
  define('LINK_LIST', 'Tous les membres');
  define('LINK_DELETE', 'Supprimer');
  define('LINK_UPDATE', 'Modifier');
  define('LINK_MOD_CONFIRM', 'Confirmation');
  define('LINK_MOD_CANCEL', 'Annulation');
  define('LINK_MOD_ACCEPT', 'Accepter');
  define('LINK_MOD_REFUSE', 'Refuser');
  define('LINK_UPDATEPROFIL_BACK', 'Retour à la navigation');
  define('LINK_UPDATEPROFIL_CANCEL', 'annulation de la modification');
  define('LINK_UPDATEPROFIL_VALID', 'Validation de la modification');
  define('LINK_TABS_INTRO', 'intro');
  define('LINK_MAIL', 'Contact mail');
  define('LINK_NAVIGATE', 'Naviguer sur le site');
  define('LINK__SUB_VALID', 'Naviguer sur le site');
  define('LINK__LEGAL', 'Mentions légales');
  define('LINK__BACK', 'Retour');
  define('LINK__BACK_LIST', 'Retour à la liste');
  
  
  //user navbar popup
  define('POP_PROFIL', 'Profil');
  define('POP_HISTORICAL', 'Mon historique');
  define('POP_ADD_CONTRIBS', 'Ajouter une conrtibution');
  define('POP_MOD', 'Modération');
  define('POP_LIST', 'Tous les membres');
  
//onglet dropdown
  define('NAV_STORY', 'Histoire');
  define('NAV_GUARDIAN', 'Gardiens et protagonistes');
  define('NAV_ENNEMIES', 'Faction ennemies');
  define('NAV_FACTION', 'Factions alliées et marchand');
  define('NAV_QUESTS', 'Quêtes');
  define('NAV_RAID', 'Raids');
  define('NAV_TUTO', 'Tutoriels');
  define('NAV_VIDEO', 'Vidéos');
  define('NAV_STREAMING', 'Streaming');
  define('NAV_FORUM', 'Catégories');
  define('NAV_TCHAT', 'Tchat');
  define('NAV_ARTWORKS', 'Artworks');
  
  //onglet navbar
  define('NAVBAR_LORE', 'Lore de Destiny');
  define('NAVBAR_TUTO', 'Tutoriels et astuces');
  define('NAVBAR_CONTRIBS', 'Contributions');
  define('NAVBAR_FORUM', 'Forum');
  
  //modal connection 
  define('FORM_GT_CONNEXION', 'Pseudo');
  define('FORM_PASSWORD_CONNEXION', 'Mot de passe');
  define('FORM_REMIND_CONNEXION', 'Se souvenir de moi');
  define('FORM_SUBSCRIBE_CONNEXION', 'Pas encore membre? Inscrivez-vous!!');
  define('FORM_TITLE_CONNEXION', 'Connexion');
  
  //artwork - video
  define('ART_PLAYER', 'Selectionnez un joueur');
  
  // confirmation delete modal
  define('DEL_MOD_TITLE', 'Suppression de contenu');
  define('DEL_MOD_CONTENT1', 'Êtes-vous sûr de vouloir supprimer ce contenu?');
  define('DEL_MOD_CONTENT2', 'ATTENTION!!  Cette opération est irréversible et définitve!');
  
  //confirmation update modal
  define('UP_MOD_TITLE', 'Modification de contenu ');
  define('UP_MOD_CONTENT1', 'Êtes-vous sûr de vouloir modifier ce contenu?');
  
  // confirmation delet modal  
  define('DEL_INTRO_TITLE', 'Suppression de contenu');
  define('DEL_INTRO_CONTENT1', 'Êtes-vous sûr de vouloir supprimer ce contenu?');
  define('DEL_INTRO_CONTENT2', 'ATTENTION!! La suppression de ce contenu supprimera également toutes ses étapes!!');
  define('DEL_INTRO_CONTENT3', 'Cette opération est irréversible et définitive!');
  
  //footer
  define('FOOTER_LINK', 'Liens utiles et sources');
  define('FOOTER_LEGAL', 'Mentions légales');
  define('FOOTER_COPYRIGHT', '© 2018 COUSIN RUBY Cédric Tous droits réservés');
  define('FOOTER_COPYRIGHT2', 'Destiny et Destiny 2, ainsi que le Logo et les personnages sont la propriété de Bungie Studio');
  
  //moderation
  define('MODERATION_NONE_TITLE', 'Aucun contenu en attente de validation');
  define('MODERATION_TITLE', 'Ajout en attente');
  define('MODERATION_BY', 'Par');
  define('MODERATION_DATE', 'Le');
  define('MODERATION_CAT', 'Catégories');
  
  //update profil
  define('UPDATEPROFIL_CONGRAT', 'Félicitation Gardien(ne)');
  define('UPDATEPROFIL_SUCCESS', 'Votre profil a bien été modifié!!');
  define('UPDATEPROFIL_CONSOLE', 'Choissez votre plate-forme');
  define('UPDATEPROFIL_CONFIRM', 'Confirmer');
  define('UPDATE_DELETE', 'Supprimer le profil');
  define('UPDATEPROFIL_TITLE', 'Modification de vos informations personnelles : ');
  define('UPDATEPROFIL_BACK', 'Retour');

  // update profil modal
  define('MODALUPDATE_TITLE', 'Modification de profil');
  define('MODALUPDATE_CONTENT', 'Êtes-vous sûr de vouloir modifier  vos informations ?');
  
  //delete profil modal
  define('MODALDELETE_TITLE', 'Suppression du profil');
  define('MODALDELETE_CONTENT1', 'Êtes-vous sûr de vouloir supprimer votre profil?');
  define('MODALDELETE_CONTENT2', 'ATTENTION!! La suppression du profil empêchera de partager de nouveaux contenu sur le site.');
  define('MODALDELETE_CONTENT3', 'Vous devrez vous ré-inscrire pour intéragir de nouveau avec la communauté.');
  define('MODALDELETE_CONTENT4', 'Cette opération est irréversible et définitive, vous ne pourrez pas le récuppérer après confirmation!');
  
  // user info
  define('USER_TITLE', 'Vos informations personnelles');
  define('USER_LASTNAME', 'Nom');
  define('USER_FIRSTNAME', 'Prénom');
  define('USER_BIRTHDATE', 'Date de naissance');
  define('USER_EMAIL', 'Email');
  define('USER_GT', 'Pseudo');
  define('USER_CONSOLE', 'Console');
  
  //tabs
  define('TABS_INTRO', 'intro');
  
  //quest
  define('QUEST_SELECT', 'Selectionnez une quête');
  
  //Tuto
  define('TUTO_SELECT', 'Selectionnez un tutoriel');
  
  //raid
  define('RAID_SELECT', 'Selectionnez un raid');
  
  //subscribe
  define('SUB_CONGRAT', 'Félicitation Gardien(ne)!!');
  define('SUB_TITLE', 'Bienvenue sur Destiny Project!!');
  define('SUB_CONFIRM', 'Votre inscription a bien été prise en compte.');
  define('SUB_CONTENT1', 'Vous avez désormais accès au forum, et pouvez partager du contenu avec les autres Gardiens.');
  define('SUB_CONTENT2', 'Bonne navigation!!');
  define('SUB_CONTENT3', 'Ce site est encore en construction, certaines fonctionnalités ne sont pas encore disponible, veuillez nous en excuser. Toutefois si vous avez des suggestion quant à l\'amélioration du site (navigation, organisation, 
                                 fonctionnalités, etc...) vous pouvez soummettre vos idées <a href="mailto:ced270784@gmail.com" title="">ici</a>.');
  define('SUB_BACK', 'Retour à la navigation');
  
  // confirmation message
  define('CONFIRM_UPDATE_INTRO', 'Introduction modifiée avec succès');
  define('CONFIRM_DELETE_PROFIL', 'Votre profil a été supprimer avec succès');
  define('CONFIRM_UPDATE_STEP', 'Étape modifiée avec succès');
  
  // update content
  define('UPDATE_TITLE_INTRO', 'Modifier l\'introduction de votre tuto');
  define('UPDATE_TITLE_STEP', 'Modifier une étape de votre tuto');
  
  // view all profils
  define('LIST_GAMERTAG', 'Gamertag');
  define('LIST_LASTNAME', 'Nom');
  define('LIST_FIRSTNAME', 'Prénom');
  define('LIST_BIRTHDATE', 'Date de naissance');
  define('LIST_FIRST_LOGIN', 'Membre depuis le');
  define('LIST_CONSOLE', 'Plate-forme');
  define('LIST_EMAIL', 'Email');
  define('LIST_ROLE', 'Rôle');
  
  // update/delete profil by admin
  
  define('UPDATE_ADMIN_CONFIRM', 'Le profil a bien été modifié');
  define('UPDATE_ADMIN_TITLE', 'Modification de profil');
  define('UPDATE_ADMIN_ROLE', 'Selectionnez un statut');
  define('DELETE_ADMIN_PROFIL', 'Profil supprimé avec succès');
  define('BACK_PROFIL_LIST', 'Retour à la liste');

  