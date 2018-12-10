<?php
 include 'header.php';
 include '../controllers/profilListController.php';
?>
<div class="container">
    <?php
     if (isset($_POST['delete']))
     {
         ?>
         <div class="row">
             <div class="col s12 m12 l12">
                 <h2 class="center-align error"><?= DELETE_ADMIN_PROFIL ?></h2>
                 <a href="profilList.php" class="waves-effect waves-dark btn-flat center-align"><?= BACK_PROFIL_LIST ?></a>
             </div>
         </div>
         <?php
     }
     else
     {
         ?>
         <div class="row center-align">
             <div class="col s12 m12 l12">
                 <table class="highlight centered responsive-table">
                     <thead>
                         <tr>
                             <th><?= LIST_GAMERTAG ?></th>
                             <th><?= LIST_LASTNAME ?></th>
                             <th><?= LIST_FIRSTNAME ?></th>
                             <th><?= LIST_EMAIL ?></th>
                             <th><?= LIST_BIRTHDATE ?></th>
                             <th><?= LIST_FIRST_LOGIN ?></th>
                             <th><?= LIST_CONSOLE ?></th>
                             <th><?= LIST_ROLE ?></th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                         foreach ($getUserResult as $user)
                         {
                             ?>
                             <tr>
                                 <td><?= $user->gamerTag ?></td>
                                 <td><?= $user->lastname ?></td>
                                 <td><?= $user->firstname ?></td>
                                 <td><?= $user->email ?></td>
                                 <td><?= $user->birthdate ?></td>
                                 <td><?= $user->dateHour ?></td>
                                 <td><?= $user->name ?></td>
                                 <td><?= $user->type ?></td>
                                 <td><a href="#deleteProfilModal<?= $user->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_DELETE ?>"><i class="material-icons">delete</i></a></td>                           
                                 <td><a href="updateProfilByAdmin.php?id=<?= $user->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_UPDATE ?>"><i class="material-icons">edit</i></a></td> 
                             </tr>                         
                 <?php } ?>
                     </tbody>
                 </table>
                 <?php
                 foreach ($getUserResult as $user)
                 {
                     ?>
                     <div id="deleteProfilModal<?= $user->id ?>" class="modal">
                         <div class="modal-content delProfil">
                             <h4><?= MODALDELETE_TITLE ?> :</h4>
                             <p><?= MODALDELETE_CONTENT1 ?></p>
                             <p><?= MODALDELETE_CONTENT2 ?></p>
                             <p><?= MODALDELETE_CONTENT4 ?></p>
                         </div>
                         <div class="modal-footer">
                             <form action="profilList.php?id=<?= $user->id ?>" method="POST">
                                 <label for="userId"></label>
                                 <input id="userId" class="hide" name="userId" value="<?= $user->id ?>">
                                 <input id="cancelDeleteUser" type="button" class="modal-action modal-close waves-effect waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                                 <input id="confirmDeleteUser" type="submit" name="delete" class="modal-action modal-close waves-effect waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                             </form>
                         </div>
                     </div>
                     <?php
                 }
                 ?>
             </div>
         </div>
     </div>
     <?php
 }
 include_once 'footer.php';
?>