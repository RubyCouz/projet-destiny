<?php

 if (isset($_POST['confirmDelIntro']))
 {
     include_once '../configuration.php';
     $deleteContent = new u01cc_contribs();
     $deleteContent->id = htmlspecialchars($_POST['introId']);
     $deleteContentResult = $deleteContent->deleteContent();
     header('location: ../views/artwork.php');
 }
 else
 {

     if (isset($_POST['summary']))
     {
         include_once '../configuration.php';
         $getUsersVideo = new u01cc_contribs();
         $getUsersVideo->id_u01cc_users = $_POST['summary'];
         $getUsersVideoResult = $getUsersVideo->getUsersVideo();
     }
     include_once '../configuration.php';

     $getUsersPostVideo = new u01cc_users();
     $getUsersPostVideoResult = $getUsersPostVideo->getUsersPostVideo();

     $getAllVideo = new u01cc_contribs();
     $getAllVideoResult = $getAllVideo->getAllVideo();
 }
?>