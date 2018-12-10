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
         $getUsersArtworks = new u01cc_contribs();
         $getUsersArtworks->id_u01cc_users = $_POST['summary'];
         $getUsersArtworksResult = $getUsersArtworks->getUsersArtworks();
     }
     include_once '../configuration.php';

     $getUsersPostArtwork = new u01cc_users();
     $getUsersPostArtworkResult = $getUsersPostArtwork->getUsersPostArtwork();

     $getAllArtworks = new u01cc_contribs();
     $getAllArtworksResult = $getAllArtworks->getAllArtworks();
 }
?>