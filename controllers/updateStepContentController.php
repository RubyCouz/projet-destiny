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
// on instancie l'objet permettant l'affichage d'une étape selon son id
 $getStepById = new u01cc_raidSteps;
 // on récupère l'id de l'étape passée dans l'url
 $getStepById->id = $_GET['id'];
 $getStepByIdResult = $getStepById->getStepById();

 if (isset($_POST['submit']))
 {
     //instanciation de l'objet permettant la modification d'une étape
     $updateStepContent = new u01cc_raidSteps();
      // on récupère l'id de l'étape passée dans l'url
     $updateStepContent->id = $_GET['id'];
     // si le formulaire est validé
     if (!empty($_POST['raidStep']))
     { // on contrôle les champs du formulaire, résence et validité, sinon stockaged de l'erreur correspondante dans un tableau d'erreur
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
// s'il n'y a pas d'erreur
     if (count($formError) == 0)
     {
         //modifcation des données saisies dans le formulaire dans la table raidSteps
         if (!$updateStepContent->updateStepContent())
         {
             //message d'erreur en cas de problème avec la table ou la bdd
             $formError['submit'] = ERROR_SUBMIT_CONTENT;
         }
     }
 }