<?php
 include 'header.php';
 include '../controllers/subscribeController.php';

 if (count($formError) == 0 && isset($_POST['submit'])) // condition modifiant l'affichage de la vue en fonction de la validité du formulaire
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
                             <span class="card-title"><?= SUB_CONGRAT ?></span>
                         </div>
                         <div class="center-align">
                             <h2><?= SUB_TITLE ?></h2>
                             <p><?= SUB_CONFIRM ?></p>
                             <p><?= SUB_CONTENT1 ?></p>
                             <p><?= SUB_CONTENT2 ?></p>
                             <p><?= SUB_CONTENT3 ?></p>
                         </div>                        
                     </div>
                     <div class="row card-action center-align">
                         <div class="card-action">
                             <a href="home.php" title="<?= LINK_NAVIGATE ?>"><?= SUB_BACK ?></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <?php
 }
 else
 {
     // si le formulaire n'est pas valide
     ?>
     <div class="container">
         <h1 class="center-align"><?= REGISTER_TITLE ?></h1>
         <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
         <div class="row">
             <form action="#" method="POST" class="col s12 m12 l12">
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <label for="lastname"><?= REGISTER_LASTNAME ?> :</label>
                         <input type="text" id="lastname" name="lastname" value="<?= isset($_POST['submit']) ? $addUser->lastname : '' ?>" />
                         <small class="error"><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></small>
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="firstname"><?= REGISTER_FIRSTNAME ?> :</label>
                         <input type="text" id="firstname" name="firstname" value="<?= isset($_POST['submit']) ? $addUser->firstname : '' ?>" />
                         <small class="error"><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></small>                           
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <label for="birthdate"><?= REGISTER_BIRTHDATE ?> :</label>
                         <input type="date" id="birthdate" name="birthdate" value="<?= isset($_POST['submit']) ? $addUser->birthdate : '' ?>" class="datepicker" />
                         <small class="error"><?= isset($formError['birthdate']) ? $formError['birthdate'] : '' ?></small>
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="email"><?= REGISTER_EMAIL ?> :</label>
                         <input type="email" id="email" name="email" value="<?= isset($_POST['submit']) ? $addUser->email : '' ?>" />
                         <small class="error"><?= isset($formError['email']) ? $formError['email'] : '' ?></small>                          
                         <small id="emailError" class="error hide" ><?= ERROR_EXIST_EMAIL ?></small>                          
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <select name="console" id="console">
                             <option value="" <?= isset($_POST['submit']) && isset($formError['console']) ? 'disabled selected' : 'disabled selected' ?>>Choissez votre plate-forme</option>

                             <?php
                             foreach ($getConsolesResult as $consoles)
                             {
                                 ?>
                                 <option value="<?= $consoles->id ?>" <?= isset($_POST['console']) && $_POST['console'] == 1 ? 'selected' : '' ?>><?= $consoles->name ?></option>
                                 <?php
                             }
                             ?>
                         </select>
                         <label><?= REGISTER_CONSOLE ?> :</label>
                         <small class="error"><?= isset($formError['console']) ? $formError['console'] : '' ?></small>                          
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="gamerTag"><?= REGISTER_GAMERTAG ?> :</label>
                         <input type="text" id="gamertag" name="gamerTag" value="<?= isset($_POST['submit']) ? $addUser->gamerTag : '' ?>"  />
                         <small class="error"><?= isset($formError['gamerTag']) ? $formError['gamerTag'] : '' ?></small>   
                         <small id="gtError" class="error hide" ><?= ERROR_EXIST_GAMERTAG ?></small>   
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <label for="password"><?= REGISTER_PASSWORD ?> :</label>
                         <input type="password" id="password" name="password" value="<?= isset($_POST['submit']) ? $addUser->password : '' ?>"  />
                         <small class="error"><?= isset($formError['password']) ? $formError['password'] : '' ?></small>         
                         <small class="error"><?= isset($formError['passwordError']) ? $formError['passwordError'] : '' ?></small>    
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="confirmPassword"><?= REGISTER_PASSWORD_VERIFY ?> :</label>
                         <input type="password" id="confirmPassword" name="confirmPassword" value="<?= isset($_POST['submit']) ? $addUser->confirmPassword : '' ?>"  />
                         <small class="error"><?= isset($formError['confirmPassword']) ? $formError['confirmPassword'] : '' ?></small>  
                         <small class="error"><?= isset($formError['passwordError']) ? $formError['passwordError'] : '' ?></small>         
                     </div>
                 </div>
                 <div class="row right-align" id="register">
                     <div class="col s12 m12 l12">
                      <input type="submit" name="submit" class="waves-effect waves-dark btn" value="<?= REGISTER_SIGNIN ?>" />
                     </div>
                 </div>
             </form>
         </div>
     </div>
     <!-- footer -->
     <?php
 }
 include 'footer.php';
?>      