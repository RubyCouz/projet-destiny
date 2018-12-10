    <?php

 if (isset($_POST['confirmDelIntro']))
 {
     include_once '../configuration.php';
     $deleteContent = new u01cc_contribs();
     $deleteContent->id = htmlspecialchars($_POST['introID']);
     $deleteContentResult = $deleteContent->deleteContent();
     header('location: ../views/quest.php');
 }
 elseif (isset($_POST['confirmDelStep']))
 {
     include_once '../configuration.php';
     $deleteStepContent = new u01cc_raidSteps();
     $deleteStepContent->id = htmlspecialchars($_POST['stepId']);
     $deleteStepContentResult = $deleteStepContent->deleteStepContent();
     header('location: ../views/quest.php');
 }
 else
 {
     if (isset($_POST['summary']))
     {//obligation de rappeler le fichier configuration du à la focntion jquery permettant l'affichage
         include_once '../configuration.php';

         $getQuest = new u01cc_raidSteps();
         $getQuest->id_u01cc_contribs = $_POST['summary'];
         $getQuestResult = $getQuest->getQuest();
     }
     include_once '../configuration.php';

     $getTitleQuest = new u01cc_contribs();
     $getTitleQuestResult = $getTitleQuest->getTitleQuest();
 }
?>