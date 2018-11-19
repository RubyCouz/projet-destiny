<?php

 //délaration du tableau d'erreur
 $formError = array();

 //déclaration des regex vérifiant le formulaire d'ajout de contenu
 $categoriesPattern = '/^(1)|(2)|(3)|(4)|(5)|(6)|(7)$/';
 $textPattern = '/^[a-zA-Zéùîâêäëïüöû\'\s\-\/\;\,\:\!\?\.€$=\(\)%\d]+$/';
 $contentStepPattern = '/^[a-zA-Zéùîâêäëïüöû&\\\'\s\-\/\;\,\:\!\?\.\"€$=\(\)%\d*|(\<\/p\>)*|(\<p\>)*|(\<img \>)*'
         . '|(\<strong>)*|(\<\/strong\>)*|(\<em\>)*|(\<\/em\>)*|(\<sub\>)*|(\<\/sub\>)*|(\<sup\>)*'
         . '|(\<\/sup\>)*|(\<span\>)*|(\<\/span\>)*|(\<pre\>)*|(\<\/pre\>)*|(\<h1\>)*'
         . '|(\<\/h1\>)*|(\<h2\>)*|(\<\/h2\>)|(\<h3\>)*|(\<\/h3\>)*|(\<h4\>)*|(\<\/h4\>)*|(\<h5\>)*|(\<\/h5\>)*'
         . '|(\<h6\>)*|(\<\/h6\>)]*$/';

 $getStepById = new u01cc_raidSteps;
 $getStepById->id = $_GET['id'];
 $getStepByIdResult = $getStepById->getStepById();

 if (isset($_POST['submit']))
 {
     

     //instanciation de l'objet 
     $updateStepContent = new u01cc_raidSteps();
     $updateStepContent->id = $_GET['id'];
     if (!empty($_POST['raidStep']))
     {
         if (preg_match($textPattern, $_POST['raidStep']))
         {
             $updateStepContent->raidStep = htmlspecialchars($_POST['raidStep']);
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
             $updateStepContent->contentStep = $_POST['contentStep'];
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
         if (!$updateStepContent->updateStepContent())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $formError['submit'] = ERROR_SUBMIT_CONTENT;
         } else {
             header('location: nextAddContent.php?contrib=' . $_GET['contrib']);
         }
     }
 }