<?php
 include 'header.php';
 include '../controllers/subscribeController.php';

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
                             <span class="card-title">Félicitation Gardien(ne)</span>
                         </div>
                         <div class="center-align">
                             <h2>Bienvenue sur Destiny Project!!</h2>
                             <p>Votre inscription a bien été prise en compte.</p>
                             <p>Vous avez désormais accès au forum, et pouvez partager du contenu avec les autres Gardiens.</p>
                             <p>Bonne navigation!!</p>
                             Ce site est encore en construction, certaines fonctionnalités ne sont pas encore disponible, veuillez nous en excuser. Toutefois si vous avez des suggestion quant à l'amélioration du site (navigation, organisation, 
                             fonctionnalités, etc...) vous pouvez soummettre vos idées <a href="#">ici</a>.
                             </p>
                         </div>                        
                     </div>
                     <div class="row card-action center-align">
                         <div class="card-action">
                             <a href="home.php" title="Naviguer sur le site">Retour à la navigation</a>
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
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l6 input-field">
                         <select name="console" id="console">
                             <option value="" <?= isset($_POST['submit']) && isset($formError['console']) ? 'disabled selected' : 'disabled selected' ?>>Choissez votre plate-forme</option>
                             <option value="1" <?= isset($_POST['submit']) && $_POST['console'] == 1 ? 'selected' : '' ?>>XBOX</option>
                             <option value="2" <?= isset($_POST['submit']) && $_POST['console'] == 2 ? 'selected' : '' ?>>Playstation</option>
                             <option value="3" <?= isset($_POST['submit']) && $_POST['console'] == 3 ? 'selected' : '' ?>>P.C</option>
                         </select>
                         <label><?= REGISTER_CONSOLE ?> :</label>
                         <small class="error"><?= isset($formError['console']) ? $formError['console'] : '' ?></small>                          
                     </div>
                     <div class="col s12 m12 l6 input-field">
                         <label for="gamerTag"><?= REGISTER_GAMERTAG ?> :</label>
                         <input type="text" id="gamerTag" name="gamerTag" value="<?= isset($_POST['submit']) ? $addUser->gamerTag : '' ?>"  />
                         <small class="error"><?= isset($formError['gamerTag']) ? $formError['gamerTag'] : '' ?></small>       
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
                 <div class="row right-align">
                     <div class="col s12 m12 l12">
                         <a class="waves-effect waves-dark btn modal-trigger" title="Validation de l'inscription" href="#"><input type="submit" name="submit" class="" value="<?= REGISTER_SIGNIN ?>" /></a>
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