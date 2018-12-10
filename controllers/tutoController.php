<?php

 if (isset($_POST['confirmDelIntro']) /* && isset($_POST['deleteIntro']) */)
 {
     include_once '../configuration.php';
     $deleteContent = new u01cc_contribs();
     $deleteContent->id = htmlspecialchars($_POST['introID']);
     $deleteContentResult = $deleteContent->deleteContent();
     echo true;
     header('location: ../views/tuto.php');
 }
 elseif (isset($_POST['confirmDelStep']) /* && isset($_POST['deleteStep']) */)
 {
     include_once '../configuration.php';
     $deleteStepContent = new u01cc_raidSteps();
     $deleteStepContent->id = htmlspecialchars($_POST['stepId']);
     $deleteStepContentResult = $deleteStepContent->deleteStepContent();
     echo true;
     header('location: ../views/tuto.php');
 }
 else
 {
     if (isset($_POST['summary']))
     {
         include_once '../configuration.php';

         $getTuto = new u01cc_raidSteps();
         $getTuto->id_u01cc_contribs = $_POST['summary'];
         $getTutoResult = $getTuto->getTuto();
     }
     include_once '../configuration.php';

     $getTitleTuto = new u01cc_contribs();
     $getTitleTutoResult = $getTitleTuto->getTitleTuto();
 }
?>