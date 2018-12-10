<?php

 //délaration du tableau d'erreur
 $formError = array();

 //déclaration des regex vérifiant le formulaire d'ajout de contenu
 $categoriesPattern = '/^(1)|(2)|(3)|(4)|(5)|(6)|(7)$/';
 $textPattern = '/^[a-zA-Zéùîâêäëïüöû\'\s\-\/\;\,\:\!\?\.€$=\{\}\\(\)%\d]+$/';
  $contentPattern = ' /^[a-zA-Zéùîâêèàäëïüöôû&\\\'\s\-\_\/\;\,\:\!\#\?\.\"€$=\(\)%\d*|(\<\/p\>)*|(\<p\>)*|(\<img \>)*'
         . '|(\<strong>)*|(\<\/strong\>)*|(\<em\>)*|(\<\/em\>)*|(\<sub\>)*|(\<\/sub\>)*|(\<sup\>)*'
         . '|(\<\/sup\>)*|(\<span\>)*|(\<\/span\>)*|(\<pre\>)*|(\<\/pre\>)*|(\<h1\>)*'
         . '|(\<\/h1\>)*|(\<h2\>)*|(\<\/h2\>)|(\<h3\>)*|(\<\/h3\>)*|(\<h4\>)*|(\<\/h4\>)*|(\<h5\>)*|(\<\/h5\>)*'
         . '|(\<h6\>)*|(\<\/h6\>)]*$/';

 //condition vérifant les données saises dans le formulaire
 if (isset($_POST['submit']) || isset($_POST['next']))
 {
     //instanciation de l'objet 
     $addContent = new u01cc_contribs();
     //récupération de l'id utilisateur passé dans l'url
     $id = $_GET['id'];
     $addContent->id_u01cc_users = $id;
     $addContent->dateHour = date('Y-m-d');
     //vérification de la saisie  des inputs
     if (!empty($_POST['title']))
     {
         if (preg_match($textPattern, $_POST['title']))
         {
             $addContent->title = htmlspecialchars($_POST['title']);
         }
         else
         { // en cas d'erreur de saisie
             $formError['title'] = ERROR_TITLE;
         }
     }
     else
     {// en cas d'absence de saisie
         $formError['title'] = ERROR_MISS_TITLE;
     }
     if (!empty($_POST['content']))
     {
         if (preg_match($contentPattern, $_POST['content']))
         {
             $addContent->content = $_POST['content'];
         }
         else
         { // en cas d'erreur de saisie
             $formError['content'] = ERROR_CONTENT;
         }
     }
     else
     {// en cas d'absence de saisie
         $formError['content'] = ERROR_MISS_CONTENT;
     }
     if (!empty($_POST['categories']))
     {
         if (preg_match($categoriesPattern, $_POST['categories']))
         {
             $addContent->id_u01cc_categoriesContribs = htmlspecialchars($_POST['categories']);
         }
         else
         { // en cas d'erreur de saisie
             $formError['categories'] = ERROR_CATEGORIES;
         }
     }
     else
     {// en cas d'absence de isie
         $formError['categories'] = ERROR_MISS_CATEGORIES;
     }

     if (count($formError) == 0)
     {
         //insertion des données saisies dans le formulaire dans la table contribs
         if (!$addContent->addContent())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $formError['submit'] = ERROR_SUBMIT_CONTENT;
         }
         elseif (isset($_POST['next']))
         {
             // on récupère l'instance de connexion à la base de données pour récupérer l'id de la dernière contribution
             $database = database::getInstance();
             $lastInsertId = $database->pdo->lastInsertId();
             header('location: nextAddContent.php?contrib=' . $lastInsertId);
         }
     }
 }
?>