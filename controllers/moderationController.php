<?php

 if (isset($_POST['id']) && isset($_POST['valid']))
 {
     include_once '../configuration.php';

     $confirmContent = new u01cc_contribs();
     $confirmlContent->id = htmlspecialchars($_POST['id']);
     $confirmContentResult = $confirmContent->confirmContent();

     echo true;
 }
 elseif (isset($_POST['id']) && isset($_POST['invalid']))
 {
     include_once '../configuration.php';

     $deleteContent = new u01cc_contribs();
     $deleteContent->id = htmlspecialchars($_POST['id']);
     $deleteContentResult = $deleteContent->deleteContent();

     echo true;
 }
 else
 {
     // on instancie l'objet u01cc_contribs
     $viewNoModerationContent = new u01cc_contribs();
     $viewNoModerationContentResult = $viewNoModerationContent->viewNoModerationContent();

     // on instancie l'objet u01cc_raidSteps
     $getAddNextContent = new u01cc_raidSteps();
     $getAddNextContentResult = $getAddNextContent->getAddNextContent();
 }
?>