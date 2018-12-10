<?php

 if (isset($_POST['delete']))
 {
     $deleteUser = new u01cc_users();
     $deleteUser->id = $_POST['userId'];
     $deleteuserResult = $deleteUser->deleteUser();
 }
 else
 {
     $getUser = new u01cc_users();
     $getUserResult = $getUser->getUsers();
 }
?>
