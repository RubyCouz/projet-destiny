<?php

 //délaration du tableau d'erreur
 $formError = array();

 //déclaration des regex vérifiant le formulaire d'ajout de contenu
 $categoriesPattern = '/^(1)|(2)|(3)|(4)|(5)|(6)|(7)$/';
 $textPattern = '/^[a-zA-Zéùîâêäëïüöû\'\s\-\/\;\,\:\!\?\.€$=\(\)%\d]+$/';
 $contentPattern = '/^[a-zA-Zéùîâêäëïüöû\\\'\s\-\/\;\,\:\!\?\.€$=\(\)%\d]*|(\<\/p\>)*|(\<p\>)*|(\<img \>)*'
         . '|(\<strong>)*|(\<\/strong\>)*|(\<em\>)*|(\<\/em\>)*|(\<sub\>)*|(\<\/sub\>)*|(\<sup\>)*'
         . '|(\<\/sup\>)*|(\<span\>)*|(\<\/span\>)*|(\<pre\>)*|(\<\/pre\>)*|(\<h1\>)*'
         . '|(\<\/h1\>)*|(\<h2\>)*|(\<\/h2\>)|(\<h3\>)*|(\<\/h3\>)*|(\<h4\>)*|(\<\/h4\>)*|(\<h5\>)*|(\<\/h5\>)*'
         . '|(\<h6\>)*|(\<\/h6\>)*$/';

 //condition vérifant les données saises dans le formulaire
 if (isset($_POST['submit']))
 {

     //accès à l'instance de la classe
     $addUser = database::getInstance();
     //instanciation de l'objet 
     $addContent = new u01cc_contribs();
     $this->d_u01cc_users = $_GET['id'];

     //verification de la saisie pour le titre et l'étape si nécessaire
     if (!empty($_POST['title']))
     {
         if (preg_match($textPattern, $_POST['title']))
         {
             $addContent->title = htmlspecialchars($_POST['title']);
         }
         else
         {
             $formError['title'] = ERROR_TITLE;
         }
     }
     else
     {
         $formError['title'] = ERROR_MISS_TITLE;
     }
     if (!empty($_POST['content']))
     {
         if (preg_match($textPattern, $_POST['content']))
         {
             $addContent->content = htmlspecialchars($_POST['content']);
         }
         else
         {
             $formError['content'] = ERROR_CONTENT;
         }
     }
     else
     {
         $formError['content'] = ERROR_MISS_CONTENT;
     }
     if (!empty($_POST['categories']))
     {
         if (preg_match($categoriesPattern, $_POST['categories']))
         {
             $addContent->categories = htmlspecialchars($_POST['categories']);
         }
         else
         {
             $formError['categories'] = ERROR_CATEGORIES;
         }
     }
     else
     {
         if (!$addContent->addContent()) {
     $formError['submit'] = ERROR_SUBMIT;
 }$formError['categories'] = ERROR_MISS_CATEGORIES;
     } 
//     $database = database::getInstance();
//     $database->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     try {
//         //début de la transaction
//         // $addRaidContent = $database->pdo->beginTransaction();
//         // if ($addContent->addRaidContent())
//         $addContent->id_u01cc_contribs = $database->pdo->lastInsertId();
//         $database->pdo->commit();
//     } catch (Exception $ex) {
//         
//     }
     if (count($formError) == 0)
     {
         //insertion des données saisies dans le formulaire dans la table user
         if (!$addContent->addContent())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $formError['submit'] = ERROR_SUBMIT;
         }
     }
 }
 
?>