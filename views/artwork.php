<?php
 include '../controllers/artworkController.php';
 include 'header.php';
?>
<!-- liste déroulante pour la sélection du raid -->
<div class="container raidSelect">
    <div class="row center-align">
        <div class="col offset-l3 s6 m6 l6">
            <form action="#" method="POST" id="select">
                <label for="summary"></label>
                <select id="summary" name="summary">
                    <option value=""><?= ART_PLAYER ?></option>       
                    <?php
                     foreach ($getUsersPostArtworkResult as $usersContribs)
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
     <div  class="container-fluid" >
         <div class="row justify-content-around center-align">
             <?php
             foreach ($getUsersArtworksResult as $artwork)
             {
                 ?>
                 <div class="col s12 m6 l2" id="<?= $artwork->id ?>">
                     <div class="card">
                         <div class="card-image row">
                             <div class="col s12 m12 l12">
                                 <p class="materialboxed"><?= htmlspecialchars_decode($artwork->content) ?></p>
                                 <span class="card-title"><?= htmlspecialchars_decode($artwork->title) ?></span>                                
                             </div>
                         </div>
                         <div class="card-content center-align">                                                
                             <p class="artwork">Pubiée par : <?= htmlspecialchars_decode($artwork->gamerTag) ?></p>
                             <p class="artwork">Le <?= htmlspecialchars_decode($artwork->dateHour) ?></p>
                         </div>
                         <div class="card-action">
                             <?php
                             if (isset($_SESSION['isConnect']))
                             {
                                 // si l'utilisateur est connecté, on affiche les boutons permettant la modification et la suppression du contenu s'il en est l'auteur
                                 if ($_SESSION['id'] == $artwork->id_u01cc_users || $_SESSION['role'] == 1 || $_SESSION['role'] == 3)
                                 {
                                     ?>
                                     <div class="row">
                                         <div class="col s6 m6 l6 center-align">
                                             <a href="#deleteStepModal<?= $artwork->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_DELETE ?>"><i class="material-icons">delete</i></a>                           
                                         </div>
                                         <div class="col s6 m6 l6 center-align">
                                             <a href="#updateStepModal<?= $artwork->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_UPDATE ?>"><i class="material-icons">edit</i></a> 
                                         </div>
                                     </div>
                                     <?php
                                 }
                             }
                             ?>
                         </div>
                     </div>
                     <div id="deleteStepModal<?= $artwork->id ?>" class="modal step">
                         <div class="modal-content">
                             <h4><?= DEL_MOD_TITLE ?></h4>
                             <p><?= DEL_MOD_CONTENT1 ?></p>
                             <p><?= DEL_MOD_CONTENT2 ?></p>
                         </div>
                         <div class="modal-footer">
                             <form action="artwork.php" method="POST">
                                 <label for="stepId"></label>
                                 <input id="stepId" class="hide" name="introId" value="<?= $artwork->id ?>">
                                 <label for="cancelDeletecontribs"></label>
                                 <input id="cancelDeletecontrib" type="button" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                                 <label for="confirmDeletecontrib"></label>
                                 <input id="confirmDeletecontrib" type="submit" name="confirmDelIntro" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                             </form>
                         </div>
                     </div>
                     <div id="updateStepModal<?= $artwork->id ?>" class="modal">
                         <div class="modal-content">
                             <h4><?= UP_MOD_TITLE ?></h4>
                             <p><?= UP_MOD_CONTENT1 ?></p>
                         </div>
                         <div class="modal-footer">
                             <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="<?= LINK_MOD_CANCEL ?>"><?= MODAL_BUTTON_NO ?></a>
                             <a href="updateIntroContent.php?id=<?= $artwork->id ?>" id="updateIntroButton" name="update" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" title="<?= LINK_MOD_CONFIRM ?>"><?= MODAL_BUTTON_YES ?></a>
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
     <div  class="container-fluid" >
         <div class="row justify-content-around center-align">
             <?php
             foreach ($getAllArtworksResult as $allArtwork)
             {
                 ?>
                 <div class="col s12 m6 l2" id="<?= $allArtwork->id ?>">
                     <div class="card">
                         <div class="card-image row">
                             <div class="col s12 m12 l12">
                                 <p><?= htmlspecialchars_decode($allArtwork->content) ?></p>
                                 <span class="card-title"><?= htmlspecialchars_decode($allArtwork->title) ?></span>                                
                             </div>
                         </div>
                         <div class="card-content center-align">                                                
                             <p class="artwork">Pubiée par : <?= htmlspecialchars_decode($allArtwork->gamerTag) ?></p>
                             <p class="artwork">Le <?= htmlspecialchars_decode($allArtwork->dateHour) ?></p>
                         </div>
                         <div class="card-action">
                             <?php
                             if (isset($_SESSION['isConnect']))
                             {
                                 // si l'utilisateur est connecté, on affiche les boutons permettant la modification et la suppression du contenu s'il en est l'auteur
                                 if ($_SESSION['id'] == $allArtwork->id_u01cc_users || $_SESSION['role'] == 1 || $_SESSION['role'] == 3)
                                 {
                                     ?>
                                     <div class="row">
                                         <div class="col s6 m6 l6 center-align">
                                             <a href="#deleteStepModal<?= $allArtwork->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_DELETE ?>"><i class="material-icons">delete</i></a>                           
                                         </div>
                                         <div class="col s6 m6 l6 center-align">
                                             <a href="#updateStepModal<?= $allArtwork->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_UPDATE ?>"><i class="material-icons">edit</i></a> 
                                         </div>
                                     </div>
                                     <?php
                                 }
                             }
                             ?>
                         </div>
                     </div>
                     <!-- modals de confirmation de suppression et modification -->
                     <div id="deleteStepModal<?= $allArtwork->id ?>" class="modal step">
                         <div class="modal-content">
                             <h4><?= DEL_MOD_TITLE ?></h4>
                             <p><?= DEL_MOD_CONTENT1 ?></p>
                             <p><?= DEL_MOD_CONTENT2 ?></p>
                         </div>
                         <div class="modal-footer">
                             <form action="artwork.php" method="POST">
                                 <label for="stepId"></label>
                                 <input id="stepId" class="hide" name="introId" value="<?= $allArtwork->id ?>">
                                 <label for="cancelDeletecontribs"></label>
                                 <input id="cancelDeletecontrib" type="button" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                                 <label for="confirmDeletecontrib"></label>
                                 <input id="confirmDeletecontrib" type="submit" name="confirmDelIntro" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                             </form>
                         </div>
                     </div>
                     <div id="updateStepModal<?= $allArtwork->id ?>" class="modal">
                         <div class="modal-content">
                             <h4><?= UP_MOD_TITLE ?></h4>
                             <p><?= UP_MOD_CONTENT1 ?></p>
                         </div>
                         <div class="modal-footer">
                             <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="<?= LINK_MOD_CANCEL ?>"><?= MODAL_BUTTON_NO ?></a>
                             <a href="updateIntroContent.php?id=<?= $allArtwork->id ?>" id="updateIntroButton" name="update" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" title="<?= LINK_MOD_CONFIRM ?>"><?= MODAL_BUTTON_YES ?></a>
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




