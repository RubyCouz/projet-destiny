<?php

 //délaration du tableau d'erreur
 $formError = array();

 //déclaration des regex vérifiant le formulaire d'ajout de contenu
 $categoriesPattern = '/^(1)|(2)|(3)|(4)|(5)|(6)|(7)$/';
 $textPattern = '/^[a-zA-Zéùîâêäëïüöû\'\s\-\/\;\,\:\!\?\.€$=\(\)%\d]+$/';
 $contentPattern = '/^[a-zA-Zéùîâêäëïüöû&\\\'\s\-\/\;\,\:\!\?\.\"€$=\(\)%\d*|(\<\/p\>)*|(\<p\>)*|(\<img \>)*'
         . '|(\<strong>)*|(\<\/strong\>)*|(\<em\>)*|(\<\/em\>)*|(\<sub\>)*|(\<\/sub\>)*|(\<sup\>)*'
         . '|(\<\/sup\>)*|(\<span\>)*|(\<\/span\>)*|(\<pre\>)*|(\<\/pre\>)*|(\<h1\>)*'
         . '|(\<\/h1\>)*|(\<h2\>)*|(\<\/h2\>)|(\<h3\>)*|(\<\/h3\>)*|(\<h4\>)*|(\<\/h4\>)*|(\<h5\>)*|(\<\/h5\>)*'
         . '|(\<h6\>)*|(\<\/h6\>)]*$/';

 $getContribsById = new u01cc_contribs;
 $getContribsById->id = $_GET['id'];
 $getContribsByIdResult = $getContribsById->getContribsById();

 if (isset($_POST['submit']))
 {
     $updateIntroContribs = new u01cc_contribs();
     $id = $_GET['id'];
     $updateIntroContribs->id = $id;
     if (!empty($_POST['title']))
     {
         if (preg_match($textPattern, $_POST['title']))
         {
             $updateIntroContribs->title = htmlspecialchars($_POST['title']);
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
         if (preg_match($contentPattern, $_POST['content']))
         {
             $updateIntroContribs->content = $_POST['content'];
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
             $updateIntroContribs->id_u01cc_categoriesContribs = htmlspecialchars($_POST['categories']);
         }
         else
         {
             $formError['categories'] = ERROR_CATEGORIES;
         }
     }
     else
     {
         $formError['categories'] = ERROR_MISS_CATEGORIES;
     }
     $updateIntroContribs->dateHour = date('Y-m-d');

     if (count($formError) == 0)
     {
         //insertion des données saisies dans le formulaire dans la table user
         if (!$updateIntroContribs->updateIntroContribs())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $formError['submit'] = ERROR_SUBMIT_CONTENT;
         }
         else
         {
//             $database = database::getInstance();
//             $lastInsertId = $database->pdo->lastInsertId();
//             header('location: nextAddContent.php?contrib=' . $lastInsertId);
         }
     }
 }
?>