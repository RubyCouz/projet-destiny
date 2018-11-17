<?php

 $formError = array();

 //déclaration des regex vérifiant le formulaire d'ajout de contenu
 $textPattern = '/^[a-zA-Zéùîâêäëïüöû\'\s\-\/\;\,\:\!\?\.€$=\(\)%\d]+$/';
 $contentStepPattern = '/^[a-zA-Zéùîâêäëïüöû&\\\'\s\-\/\;\,\:\!\?\.\"€$=\(\)%\d*|(\<\/p\>)*|(\<p\>)*|(\<img \>)*'
         . '|(\<strong>)*|(\<\/strong\>)*|(\<em\>)*|(\<\/em\>)*|(\<sub\>)*|(\<\/sub\>)*|(\<sup\>)*'
         . '|(\<\/sup\>)*|(\<span\>)*|(\<\/span\>)*|(\<pre\>)*|(\<\/pre\>)*|(\<h1\>)*'
         . '|(\<\/h1\>)*|(\<h2\>)*|(\<\/h2\>)|(\<h3\>)*|(\<\/h3\>)*|(\<h4\>)*|(\<\/h4\>)*|(\<h5\>)*|(\<\/h5\>)*'
         . '|(\<h6\>)*|(\<\/h6\>)]*$/';

 //condition vérifant les données saises dans le formulaire
 if (isset($_POST['submit']) || isset($_POST['add']))
 {
     $database = database::getInstance();

     //instanciation de l'objet 
     $addNextContent = new u01cc_raidSteps();
     $addNextContent->id_u01cc_contribs = $_GET['contrib'];
     if (!empty($_POST['raidStep']))
     {
         if (preg_match($textPattern, $_POST['raidStep']))
         {
             $addNextContent->raidStep = htmlspecialchars($_POST['raidStep']);
         }
         else
         {
             $formError['raidStep'] = ERROR_TITLE;
         }
     }
     else
     {
         $formError['raidStep'] = ERROR_MISS_TITLE;
     }
     if (!empty($_POST['contentStep']))
     {
         if (preg_match($contentStepPattern, $_POST['contentStep']))
         {
             $addNextContent->contentStep = $_POST['contentStep'];
         }
         else
         {
             $formError['contentStep'] = ERROR_CONTENT;
         }
     }
     else
     {
         $formError['contentStep'] = ERROR_MISS_CONTENT;
     }

     if (count($formError) == 0)
     {
         //insertion des données saisies dans le formulaire dans la table user
         if (!$addNextContent->addNextContent())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $formError['submit'] = ERROR_SUBMIT_CONTENT;
         }
     }
 }
?>