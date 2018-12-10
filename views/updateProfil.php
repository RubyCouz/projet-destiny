<?php
 include 'header.php';
 include '../controllers/updateProfilController.php';
?>
<?php
 if (count($formError) == 0 && isset($_POST['submit'])) // condition modifiant l'affichage de la vue en foonction de la validité du formulaire
 //si le formulaire est valide
 {
     ?>
     <div class="container">
         <div class="row">
             <div class="col s12 m12 l12">
                 <div class="card">
                     <div class="card-content white-text">
                         <div class="card-image">
                             <img src="../assets/img/accueil1.jpg">
                             <span class="card-title"><?= UPDATEPROFIL_CONGRAT ?></span>
                         </div>
                         <div class="center-align">
                             <h2><?= UPDATEPROFIL_SUCCESS ?></h2>
                         </div>                        
                     </div>
                     <div class="row card-action center-align">
                         <div class="card-action">
                             <a href="home.php" title="<?= LINK_UPDATEPROFIL_BACK ?>"><?= UPDATEPROFIL_BACK ?></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <?php
 }
 elseif (isset($_POST['confirmUpdateUser']))
 {
     // si on veut modifier les infos utilisateur
     ?>
     <div class="container">
         <h1 class="center-align"><?= UPDATEPROFIL_TITLE ?></h1>
         <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
         <div class="row">
             <form action="#" method="POST" class="col s12 m12 l12">
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <label for="lastname"><?= REGISTER_LASTNAME ?> :</label>
                         <input type="text" id="lastname" name="lastname" value="<?= isset($_POST['submit']) ? $modifyUser->lastname : $getUsersByIdResult->lastname ?>" />
                         <small class="error"><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></small>
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="firstname"><?= REGISTER_FIRSTNAME ?> :</label>
                         <input type="text" id="firstname" name="firstname" value="<?= isset($_POST['submit']) ? $modifyUser->firstname : $getUsersByIdResult->firstname ?>" />
                         <small class="error"><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></small>                           
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <label for="birthdate"><?= REGISTER_BIRTHDATE ?> :</label>
                         <input type="date" id="birthdate" name="birthdate" value="<?= isset($_POST['submit']) ? $modifyUser->birthdate : $getUsersByIdResult->birthdate ?>" class="datepicker" />
                         <small class="error"><?= isset($formError['birthdate']) ? $formError['birthdate'] : '' ?></small>
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="email"><?= REGISTER_EMAIL ?> :</label>
                         <input type="email" id="email" name="email" value="<?= isset($_POST['submit']) ? $modifyUser->email : $getUsersByIdResult->email ?>" />
                         <small class="error"><?= isset($formError['email']) ? $formError['email'] : '' ?></small>                          
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <select name="console" id="console">
                             <option value="<?= isset($_POST['submit']) && isset($formError['console']) ? 'disabled selected' : 'disabled selected' ?>"><?= UPDATEPROFIL_CONSOLE ?></option>
                             <?php
                             foreach ($getConsolesResult as $consoles)
                             {
                                 ?>
                                 <option value="<?= $consoles->id ?>" <?= isset($_POST['confirmUpdateUser']) && $consoles->id == $getUsersByIdResult->id_u01cc_consoles ? 'selected' : '' ?>><?= $consoles->name ?></option>
                                 <?php
                             }
                             ?>
                         </select>
                         <label><?= REGISTER_CONSOLE ?> :</label>
                         <small class="error"><?= isset($formError['console']) ? $formError['console'] : '' ?></small>                          
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="gamerTag"><?= REGISTER_GAMERTAG ?> :</label>
                         <input type="text" id="gamerTag" name="gamerTag" value="<?= isset($_POST['submit']) ? $modifyUser->gamerTag : $getUsersByIdResult->gamerTag ?>"  />
                         <small class="error"><?= isset($formError['gamerTag']) ? $formError['gamerTag'] : '' ?></small>       
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <label for="password"><?= REGISTER_PASSWORD ?> :</label>
                         <input type="password" id="password" name="password" value="<?= isset($_POST['submit']) ? $modifyUser->password : '' ?>"  />
                         <small class="error"><?= isset($formError['password']) ? $formError['password'] : '' ?></small>         
                         <small class="error"><?= isset($formError['passwordError']) ? $formError['passwordError'] : '' ?></small>    
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="confirmPassword"><?= REGISTER_PASSWORD_VERIFY ?> :</label>
                         <input type="password" id="confirmPassword" name="confirmPassword" value="<?= isset($_POST['submit']) ? $modifyUser->confirmPassword : '' ?>"  />
                         <small class="error"><?= isset($formError['confirmPassword']) ? $formError['confirmPassword'] : '' ?></small>  
                         <small class="error"><?= isset($formError['passwordError']) ? $formError['passwordError'] : '' ?></small>         
                     </div>
                 </div>
                 <div class="row center-align">
                     <div class="col s12 m6 l6">
                         <input type="submit" class="waves-effect waves-dark btn modal-trigger" name="back" value="<?= UPDATEPROFIL_BACK ?>" />
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
 elseif (isset($_POST['delete']) && count($formError) == 0)
 { // confirmation de  suppression du profil
     ?>
     <div class="row center-align">
         <div class="col s12 m12 l12">
             <h2 class="error"><?= CONFIRM_DELETE_PROFIL ?></h2>
         </div>
     </div>
     <?php
 }
 else
 { // affichage des infos utilisateur
     ?>
     <div class="container">
         <div class="row center-align">
             <div class="col s12 m12 l12">
                 <p class="error"><?= isset($formError['delete']) ? $formError['delete'] : '' ?></p>
                 <h2><?= USER_TITLE ?> : </h2>
                 <p><?= USER_LASTNAME ?> : <?= $getUsersByIdResult->lastname ?></p>
                 <p><?= USER_FIRSTNAME ?> : <?= $getUsersByIdResult->firstname ?></p>
                 <p><?= USER_BIRTHDATE ?> : <?= $getUsersByIdResult->birthdate ?></p>
                 <p><?= USER_EMAIL ?> : <?= $getUsersByIdResult->email ?></p>
                 <p><?= USER_GT ?> :  <?= $getUsersByIdResult->gamerTag ?></p>
                 <p><?= USER_CONSOLE ?> : <?= $getUsersByIdResult->name ?></p>
             </div>
         </div>
         <div class="row center-align">
             <div class="col s6 m6 l6">
                 <a href="#deleteProfilModal" class="waves-effect waves-dark modal-trigger" title="<?= LINK_DELETE ?>"><i class="material-icons">delete</i></a>                           
             </div>
             <div class="col s6 m6 l6">
                 <a href="#updateProfilModal" class="waves-effect waves-dark modal-trigger" title="<?= LINK_UPDATE ?>"><i class="material-icons">edit</i></a> 
             </div>
         </div>                 
     </div>
     <div id="deleteProfilModal" class="modal">
         <div class="modal-content delProfil">
             <h4><?= MODALDELETE_TITLE ?> :</h4>
             <p><?= MODALDELETE_CONTENT1 ?></p>
             <p><?= MODALDELETE_CONTENT2 ?></p>
             <p><?= MODALDELETE_CONTENT3 ?></p>
             <p><?= MODALDELETE_CONTENT4 ?></p>
         </div>
         <div class="modal-footer">
             <form action="updateProfil.php?id=<?= $getUsersByIdResult->id ?>" method="POST">
                 <label for="userId"></label>
                 <input id="userId" class="hide" name="userId" value="<?= $getUsersByIdResult->id ?>">
                 <input id="cancelDeleteUser" type="button" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                 <input id="confirmDeleteUser" type="submit" name="delete" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
             </form>
         </div>
     </div>
     <div id="updateProfilModal" class="modal">
         <div class="modal-content">
             <h4><?= MODALUPDATE_TITLE ?> :</h4>
             <p><?= MODALUPDATE_CONTENT ?></p>
         </div>
         <div class="modal-footer">
             <form action="updateProfil.php?id=<?= $getUsersByIdResult->id ?>" method="POST">
                 <label for="userId"></label>
                 <input id="userId" class="hide" name="userId" value="<?= $getUsersByIdResult->id ?>">
                 <input id="cancelUpdateUser" type="button" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                 <input id="confirmUpdateUser" type="submit" name="confirmUpdateUser" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
             </form>
         </div>
     </div>

     <?php
 }
 include 'footer.php';
?>      