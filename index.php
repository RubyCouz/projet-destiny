<?php
 session_start();
 include_once 'configuration.php';
 include_once 'controllers/indexController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Destriny Project</title>
        <link rel="stylesheet" href="assets/css/materialize.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <?php
         if (isset($_POST['connect']) and count($formError) == 0)
         {
             header('location: views/home.php');
         }
         else
         {
             ?>
             <div class="container">
                 <div class="row">
                     <div class="col s12 m12 l12">
                         <div class="card">
                             <div class="card-content white-text">
                                 <div class="card-image">
                                     <img  class="homePic" src="assets/img/accueil1.jpg" alt="Image d'accueil" title="Titan à la Tour" />
                                     <span class="card-title">Bienvenue Gardien!</span>
                                 </div>
                                 <div class="center-align">
                                     <h2>Bienvenue sur Destiny Project!!</h2>
                                     <p>
                                         Destiny Project est un site communautaire et participatif exclusivement dédié à l'univers Destiny. Certaines règles sont à respecter, notamment lors de la publication des articles. Veillez bien à éviter les fautes d'orthographe, de grammaire et de conjugaison,
                                         publiez du contenu pertinent et en rapport uniquement avec l'univers Destiny. Tout contenus mal rédigés, truffés de fautes, irrespectueux ou déja publiés feront l'objet d'une modération, 
                                         ou ne seront pas publiés dans le pire des cas. Vous devez être connectés pour publier/modifer des articles, mais vous pouvez avoir accès au contenu du site en tant que simple visiteur.
                                     </p>
                                     <p>
                                         Ce site est encore en construction, certaines fonctionnalités ne sont pas encore disponible, veuillez nous en excuser. Toutefois si vous avez des suggestion quant à l'amélioration du site (navigation, organisation, 
                                         fonctionnalités, etc...) vous pouvez soummettre vos idées <a href="mailto:ced270784@gmail.com">ici</a>.
                                     </p>
                                 </div>                        
                             </div>
                             <div class="row card-action center-align">
                                 <div class="col s12 m12 l12">
                                     <a class="waves-effect waves-dark btn" href="views/home.php">Entrer sur le site</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div id="login" class="modal modal-fixed-footer">
                 <div class="modal-content">
                     <h4>Connexion</h4>
                     <!-- formulaire de connexion -->
                     <div class="row" id="#">
                         <form action="<?= isset($_POST['connect']) && count($formError) == 0 ? 'views/home.php?id=' . $_SESSION['id'] : '' ?>" method="POST" class="col s12 m12 l12">
                             <div class="row">
                                 <div class="input-field col s12 m12 l12">
                                     <input id="gamerTag" type="text" name="gamerTag" class="validate" />
                                     <label for="gamerTag"><?= FORM_GT ?> :</label>
                                     <small class="error"><?= isset($_POST['submit']) && isset($formError['gamerTag']) ? $formError['gamerTag'] : '' ?></small>          
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="input-field col s12 m12 l12">
                                     <input id="password" type="password" class="validate" name="password" />
                                     <label for="password"><?= FORM_PASSWORD ?></label>
                                     <small class="error"><?= isset($_POST['submit']) && isset($formError['password']) ? $formError['password'] : '' ?></small>          
                                 </div>
                             </div>
                             <div class="row" id="#">
                                 <div class="col s12 m12 l12" id="#">
                                     <input type="checkbox" id="remind" name="rememberMe" />
                                     <label for="remind"><?= FORM_REMEMBERME ?></label>                                
                                 </div>
                             </div>
                             <div class="row right-align">
                                 <div class="col s12 m12 l12">
                                     <input type="submit" class="right-align waves-effect waves-red btn-flat" name="connect" value="<?= FORM_CONNECT ?>"/>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <div class="row">
                         <div class="col s12 m12 l12">
                             <a href="subscribe.php" title="Inscrivez-vous!!"><?= FORM_SIGNUP ?></a>
                         </div>
                     </div>
                 </div>
             </div>
             <?php
         }
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="assets/js/materialize.min.js"></script>
        <script src="assets/js/script2.js"></script>
    </body>
</html>