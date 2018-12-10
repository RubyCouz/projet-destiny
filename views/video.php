<?php
 include '../controllers/videoController.php';
 include 'header.php';
?>
<!-- liste déroulante pour la sélection du raid -->
<div class="container raidSelect">
    <div class="row center-align">
        <div class="col s6 offset-s3">
            <form action="#" method="POST" id="select">
                <label for="summary"></label>
                <select id="summary" name="summary">
                    <option value=""><?= ART_PLAYER ?></option>       
                    <?php
                     foreach ($getUsersPostVideoResult as $usersContribs)
                     {
                         ?>
                         <option value="<?= $usersContribs->id ?>" <?= isset($_POST['summary']) && $_POST['summary'] == $usersContribs->id ? 'selected' : '' ?>><?= $usersContribs->gamerTag ?></option>
                         <?php
                     }
                    ?>
                </select>
            </form>            
        </div>
    </div>
</div>
<?php
 if (isset($_POST['summary']))
 {
     ?>
     <div  class="container" >
         <div class="row justify-content-around center-align" id="#">
             <?php
             foreach ($getUsersVideoResult as $video)
             {
                 ?>
                 <div class="col s12 m6 l6" id="<?= $video->id ?>">
                     <div class="card">
                         <div class="card-image row">
                             <div class="col s12 m12 l12">
                                 <p class="materialboxed"><?= htmlspecialchars_decode($video->content) ?></p>
                                 <span class="card-title"><?= htmlspecialchars_decode($video->title) ?></span>                                
                             </div>
                         </div>
                         <div class="card-content center-align">                                                
                             <p class="artwork">Pubiée par : <?= htmlspecialchars_decode($video->gamerTag) ?></p>
                             <p class="artwork">Le <?= htmlspecialchars_decode($video->dateHour) ?></p>
                         </div>
                         <div class="card-action">
                             <?php
                             if (isset($_SESSION['isConnect']))
                             {
                                 // si l'utilisateur est connecté, on affiche les boutons permettant la modification et la suppression du contenu s'il en est l'auteur
                                 if ($_SESSION['id'] == $video->id_u01cc_users || $_SESSION['role'] == 1 || $_SESSION['role'] == 3)
                                 {
                                     ?>
                                     <div class="row">
                                         <div class="col s6 m6 l6 center-align">
                                             <a href="#deleteStepModal<?= $video->id ?>" class="waves-effect waves-dark modal-trigger" title="Supprimer"><i class="material-icons">delete</i></a>                           
                                         </div>
                                         <div class="col s6 m6 l6 center-align">
                                             <a href="#updateStepModal<?= $video->id ?>" class="waves-effect waves-dark modal-trigger" title="Modifier"><i class="material-icons">edit</i></a> 
                                         </div>
                                     </div>
                                     <?php
                                 }
                             }
                             ?>
                         </div>
                     </div>
                     <div id="deleteStepModal<?= $video->id ?>" class="modal step">
                         <div class="modal-content">
                             <h4><?= DEL_MOD_TITLE ?> :</h4>
                             <p><?= DEL_MOD_CONTENT1 ?></p>
                             <p><?= DEL_MOD_CONTENT2 ?></p>
                         </div>
                         <div class="modal-footer">
                             <form action="artwork.php" method="POST">
                                 <label for="stepId"></label>
                                 <input id="stepId" class="hide" name="introId" value="<?= $video->id ?>">
                                 <label for="cancelDeletecontribs"></label>
                                 <input id="cancelDeletecontrib" type="button" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                                 <label for="confirmDeletecontrib"></label>
                                 <input id="confirmDeletecontrib" type="submit" name="confirmDelIntro" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                             </form>
                         </div>
                     </div>
                     <div id="updateStepModal<?= $video->id ?>" class="modal">
                         <div class="modal-content">
                             <h4><?= UP_MOD_TITLE ?> :</h4>
                             <p><?= UP_MOD_CONTENT1 ?></p>
                         </div>
                         <div class="modal-footer">
                             <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="<?= LINK_MOD_CANCEL ?>"><?= MODAL_BUTTON_NO ?></a>
                             <a href="updateIntroContent.php?id=<?= $video->id ?>" id="updateIntroButton" name="update" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" title="<?= LINK_MOD_CONFIRM ?>"><?= MODAL_BUTTON_YES ?></a>
                         </div>
                     </div>
                 </div>
                 <?php
             }
             ?>
         </div>
     </div>
     <?php
 }
 else
 {
     ?>
     <div  class="container" >
         <div class="row justify-content-around center-align" id="#">
             <?php
             foreach ($getAllVideoResult as $allVideo)
             {
                 ?>
                 <div class="col s12 m6 l6" id="<?= $allVideo->id ?>">
                     <div class="card">
                         <div class="card-image row">
                             <div class="col s12 m12 l12">
                                 <p><?= htmlspecialchars_decode($allVideo->content) ?></p>
                                 <span class="card-title"><?= htmlspecialchars_decode($allVideo->title) ?></span>                                
                             </div>
                         </div>
                         <div class="card-content center-align">                                                
                             <p class="artwork">Pubiée par : <?= htmlspecialchars_decode($allVideo->gamerTag) ?></p>
                             <p class="artwork">Le <?= htmlspecialchars_decode($allVideo->dateHour) ?></p>
                         </div>
                         <div class="card-action">
                             <?php
                             if (isset($_SESSION['isConnect']))
                             {
                                 // si l'utilisateur est connecté, on affiche les boutons permettant la modification et la suppression du contenu s'il en est l'auteur
                                 if ($_SESSION['id'] == $allVideo->id_u01cc_users || $_SESSION['role'] == 1 || $_SESSION['role'] == 3)
                                 {
                                     ?>
                                     <div class="row">
                                         <div class="col s6 m6 l6 center-align">
                                             <a href="#deleteStepModal<?= $allVideo->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_DELETE ?>"><i class="material-icons">delete</i></a>                           
                                         </div>
                                         <div class="col s6 m6 l6 center-align">
                                             <a href="#updateStepModal<?= $allVideo->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_UPDATE ?>"><i class="material-icons">edit</i></a> 
                                         </div>
                                     </div>
                                     <?php
                                 }
                             }
                             ?>
                         </div>
                     </div>
                     <!-- modals de confirmation de suppression et modification -->
                     <div id="deleteStepModal<?= $allVideo->id ?>" class="modal step">
                         <div class="modal-content">
                             <h4><?= DEL_MOD_TITLE ?> :</h4>
                             <p><?= DEL_MOD_CONTENT1 ?></p>
                             <p><?= DEL_MOD_CONTENT2 ?></p>
                         </div>
                         <div class="modal-footer">
                             <form action="artwork.php" method="POST">
                                 <label for="stepId"></label>
                                 <input id="stepId" class="hide" name="introId" value="<?= $allVideo->id ?>">
                                 <label for="cancelDeletecontribs"></label>
                                 <input id="cancelDeletecontrib" type="button" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                                 <label for="confirmDeletecontrib"></label>
                                 <input id="confirmDeletecontrib" type="submit" name="confirmDelIntro" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                             </form>
                         </div>
                     </div>
                     <div id="updateStepModal<?= $allVideo->id ?>" class="modal">
                         <div class="modal-content">
                             <h4><?= UP_MOD_TITLE ?> :</h4>
                             <p><?= UP_MOD_CONTENT1 ?></p>
                         </div>
                         <div class="modal-footer">
                             <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="<?= LINK_MOD_CANCEL ?>"><?= MODAL_BUTTON_NO ?></a>
                             <a href="updateIntroContent.php?id=<?= $allVideo->id ?>" id="updateIntroButton" name="update" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" title="<?= LINK_MOD_CONFIRM ?>"><?= MODAL_BUTTON_YES ?></a>
                         </div>
                     </div>
                 </div>
                 <?php
             }
         }
        ?>
    </div>
</div>
<?php
 include_once 'footer.php';
?>




