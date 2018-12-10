<?php
 include 'header.php';
 include '../controllers/updateProfilByAdminController.php';
?>
<div class="container">
    <?php
     if (isset($_POST['submit']) && count($formError) == 0)
     {
         ?>
    <div class="row center-align">
        <div class="col s12 m12 l12">
             <h2 class="success"><?= UPDATE_ADMIN_CONFIRM ?></h2>
        </div>
    </div>
    <div class="row right-align">
        <div class="col s12 m12 l12">
             <a href="profilList.php" class="waves-effect waves-dark btn-flat" title="<?= LINK__BACK_LIST ?>"><?= LINK__BACK_LIST ?></a>
        </div>
    </div>
        
        
         <?php
     }
     else
     {
         ?>
         <h1 class="center-align"><?= UPDATE_ADMIN_TITLE ?></h1>
         <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
         <div class="row">
             <form action="#" method="POST" class="col s12 m12 l12">
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <label for="lastname"><?= REGISTER_LASTNAME ?> :</label>
                         <input type="text" id="lastname" name="lastname" value="<?= isset($_POST['submit']) ? $updateUserByAdmin->lastname : $getUsersByIdResult->lastname ?>" />
                         <small class="error"><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></small>
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="firstname"><?= REGISTER_FIRSTNAME ?> :</label>
                         <input type="text" id="firstname" name="firstname" value="<?= isset($_POST['submit']) ? $updateUserByAdmin->firstname : $getUsersByIdResult->firstname ?>" />
                         <small class="error"><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></small>                           
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <label for="birthdate"><?= REGISTER_BIRTHDATE ?> :</label>
                         <input type="date" id="birthdate" name="birthdate" value="<?= isset($_POST['submit']) ? $updateUserByAdmin->birthdate : $getUsersByIdResult->birthdate ?>" class="datepicker" />
                         <small class="error"><?= isset($formError['birthdate']) ? $formError['birthdate'] : '' ?></small>
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="email"><?= REGISTER_EMAIL ?> :</label>
                         <input type="email" id="email" name="email" value="<?= isset($_POST['submit']) ? $updateUserByAdmin->email : $getUsersByIdResult->email ?>" />
                         <small class="error"><?= isset($formError['email']) ? $formError['email'] : '' ?></small>                          
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l4 input-field">
                         <select name="console" id="console">
                             <option value="" <?= isset($_POST['submit']) && isset($formError['console']) ? 'disabled selected' : 'disabled selected' ?>><?= UPDATEPROFIL_CONSOLE ?></option>
                             <?php
                             foreach ($getConsolesResult as $consoles)
                             {
                                 ?>
                                 <option value="<?= $consoles->id ?>" <?= $consoles->id == $getUsersByIdResult->id_u01cc_consoles ? 'selected' : '' ?>><?= $consoles->name ?></option>
                                 <?php
                             }
                             ?>
                         </select>
                         <label><?= REGISTER_CONSOLE ?> :</label>
                         <small class="error"><?= isset($formError['console']) ? $formError['console'] : '' ?></small>                          
                     </div>
                     <div class="col s12 m12 l4 input-field">
                         <label for="gamerTag"><?= REGISTER_GAMERTAG ?> :</label>
                         <input type="text" id="gamerTag" name="gamerTag" value="<?= isset($_POST['submit']) ? $updateUserByAdmin->gamerTag : $getUsersByIdResult->gamerTag ?>"  />
                         <small class="error"><?= isset($formError['gamerTag']) ? $formError['gamerTag'] : '' ?></small>       
                     </div>
                     <div class="col s12 m12 l4 input-field">
                         <select name="role" id ="role">
                             <option value="<?= isset($_POST['submit']) && isset($formError['role']) ? 'disabled selected' : 'disabled selected' ?>"><?= UPDATE_ADMIN_ROLE ?></option>
                             <?php
                             foreach ($getRoleResult as $role)
                             {
                                 ?>
                                 <option value="<?= $role->id ?>" <?= $role->id == $getUsersByIdResult->id_u01cc_role ? 'selected' : '' ?>><?= $role->type ?></option>      
                                 <?php
                             }
                             ?>
                         </select>
                     </div>
                 </div>
                 <div class="row center-align">
                     <div class="col s12 m6 l6">
                         <a href="profilList.php" class="waves-effect waves-dark btn modal-trigger" title=""><?= UPDATEPROFIL_BACK ?></a>
                     </div>
                     <div class="col s12 m6 l6">
                         <input type="submit" class="waves-effect waves-dark btn" name="submit" value="<?= UPDATEPROFIL_CONFIRM ?>" />
                     </div>
                 </div>
             </form>
         </div>
     </div>
     <?php
 }
 include 'footer.php';
?>