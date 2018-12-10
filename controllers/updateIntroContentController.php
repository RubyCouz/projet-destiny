<?php

 //délaration du tableau d'erreur
 $updateIntroError = array();

 //déclaration des regex vérifiant le formulaire d'ajout de contenu
 $categoriesPattern = '/^(1)|(2)|(3)|(4)|(5)|(6)|(7)$/';
 $textPattern = '/^[a-zA-Zéùîâêäëïüöû\'\s\-\/\;\,\:\!\?\.€$=\(\)%\d]+$/';
 $contentPattern = '/^[a-zA-Zéùîâêäëïüöû&\\\'\s\-\/\;\,\:\!\?\.\"€$=\(\)%\d*|(\<\/p\>)*|(\<p\>)*|(\<img \>)*'
         . '|(\<strong>)*|(\<\/strong\>)*|(\<em\>)*|(\<\/em\>)*|(\<sub\>)*|(\<\/sub\>)*|(\<sup\>)*'
         . '|(\<\/sup\>)*|(\<span\>)*|(\<\/span\>)*|(\<pre\>)*|(\<\/pre\>)*|(\<h1\>)*'
         . '|(\<\/h1\>)*|(\<h2\>)*|(\<\/h2\>)|(\<h3\>)*|(\<\/h3\>)*|(\<h4\>)*|(\<\/h4\>)*|(\<h5\>)*|(\<\/h5\>)*'
         . '|(\<h6\>)*|(\<\/h6\>)]*$/';
// instanciation de l'objet permettant d'afficher une contribution selon l'id
 $getContribsById = new u01cc_contribs;
 // on récupère l'id de la contribution passée dans l'url
 $getContribsById->id = $_GET['id'];
 $getContribsByIdResult = $getContribsById->getContribsById();

 // si il y a validation du formulaire
 if (isset($_POST['submit']))
 {
     //on instancie l'objet permettant lla modification d'une contribution
     $updateIntroContribs = new u01cc_contribs();
     // on récupère l'id de la contribution passé dans l'url
     $id = $_GET['id'];
     $updateIntroContribs->id = $id;
     // on verifie les champs de saisie : leur présence et leur validité. sinon on stocke un messag d'erreur dans le tableau d'erreur
     if (!empty($_POST['title']))
     {
         if (preg_match($textPattern, $_POST['title']))
         {
             $updateIntroContribs->title = htmlspecialchars($_POST['title']);
         }
         else
         {
             $updateIntroError['title'] = ERROR_TITLE;
         }
     }
     else
     {
         $updateIntroError['title'] = ERROR_MISS_TITLE;
     }
     if (!empty($_POST['content']))
     {
         if (preg_match($contentPattern, $_POST['content']))
         {
             $updateIntroContribs->content = $_POST['content'];
         }
         else
         {
             $updateIntroError['content'] = ERROR_CONTENT;
         }
     }
     else
     {
         $updateIntroError['content'] = ERROR_MISS_CONTENT;
     }
     if (!empty($_POST['categories']))
     {
         if (preg_match($categoriesPattern, $_POST['categories']))
         {
             $updateIntroContribs->id_u01cc_categoriesContribs = htmlspecialchars($_POST['categories']);
         }
         else
         {
             $updateIntroError['categories'] = ERROR_CATEGORIES;
         }
     }
     else
     {
         $updateIntroError['categories'] = ERROR_MISS_CATEGORIES;
     }
     $updateIntroContribs->dateHour = date('Y-m-d');

     // s'il n'y a pas d'erreur
     if (count($updateIntroError) == 0)
     {
         //modification des données saisies dans le formulaire dans la table contribs
         if (!$updateIntroContribs->updateIntroContribs())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $updateIntroError['submit'] = ERROR_SUBMIT_CONTENT;
         }
     }
 }
?>