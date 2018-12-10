<?php
 include '../controllers/questController.php';
 include 'header.php';
?>
<div class="container-fluid">
    <!-- affichage tabs pour les étapes -->
    <div class="row">
        <div class="col s12 m12 l12"> 
            <ul class="tabs tabs-fixed-width">
                <?php
                 if (isset($_POST['summary']))
                 {
                     ?>
                     <li class="tab col center-align" ><a href="#intro<?= $_POST['summary'] ?>" title="<?= LINK_TABS_INTRO ?>"><?= TABS_INTRO ?></a></li>
                     <?php
                     foreach ($getQuestResult as $quest)
                     {
                         ?>
                         <li class="tab col center-align"><a href="#step<?= $quest->id ?>" title="<?= htmlspecialchars_decode($quest->raidStep) ?>"><?= htmlspecialchars_decode($quest->raidStep) ?></a></li>
                         <?php
                     }
                 }
                ?>
            </ul>
        </div>
    </div>
</div>
<!-- liste déroulante pour la sélection du raid -->
<div class="container raidSelect">
    <div class="row center-align">
        <div class="col s6 offset-s3">
            <form action="#" method="POST" id="select">
                <label for="summary"></label>
                <select id="summary" name="summary">
                    <option value=""><?= QUEST_SELECT ?></option>
                    <?php
                     foreach ($getTitleQuestResult as $titleQuest)
                     {
                         ?>
                         <option value="<?= $titleQuest->id ?>" <?= isset($_POST['summary']) && $_POST['summary'] == $titleQuest->id ? 'selected' : '' ?>><?= $titleQuest->title ?></option>
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
     <!-- section intro quête -->
     <div class="container" id="intro<?= $getQuestResult[0]->id_u01cc_contribs ?>">
         <div class="row">
             <?php
             // affichage des boutons de modifcation et de suppression en cas d'utilisateur connecté
             if (isset($_SESSION['isConnect']))
             {
                 // si l'utilisateur est connecté, on affiche les boutons permettant la modification et la suppression du contenu s'il en est l'auteur
                 if ($_SESSION['id'] == $quest->id_u01cc_users || $_SESSION['role'] == 1 || $_SESSION['role'] == 3)
                 {
                     ?>
                     <div class="col s1 offset-s10">
                         <a href="#deleteIntroModal" class="waves-effect waves-dark modal-trigger" title="<?= LINK_DELETE ?>"><i class="material-icons">delete</i></a>                           
                     </div>
                     <div class="col s1">
                         <a href="#updateIntroModal" class="waves-effect waves-dark modal-trigger" title="<?= LINK_UPDATE ?>"><i class="material-icons">edit</i></a> 
                     </div>
                     <!-- modals de confirmation de suppression et modification -->
                     <div id="deleteIntroModal" class="modal contribs">
                         <div class="modal-content">
                             <h4><?= DEL_INTRO_TITLE ?> :</h4>
                             <p><?= DEL_INTRO_CONTENT1 ?></p>
                             <p><?= DEL_INTRO_CONTENT2 ?></p>
                             <p><?= DEL_INTRO_CONTENT3 ?></p>
                         </div>
                         <div class="modal-footer">
                             <form action="quest.php" method="POST">
                                 <label for="introID"></label>
                                 <input id="introID" class="hide" name="introID" value="<?= $getQuestResult[0]->id_u01cc_contribs ?>">
                                 <input id="cancelDeleteIntro" type="button" name="cancel" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                                 <input id="confirmDeleteIntro" type="submit" name="confirmDelIntro" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                             </form>
                         </div>
                     </div>
                     <div id="updateIntroModal" class="modal">
                         <div class="modal-content">
                             <h4><?= UP_MOD_TITLE ?> :</h4>
                             <p><?= UP_MOD_CONTENT1 ?></p>
                         </div>
                         <div class="modal-footer">
                             <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="<?= LINK_MOD_CANCEL ?>"><?= MODAL_BUTTON_NO ?></a>
                             <a href="updateIntroContent.php?id=<?= $getQuestResult[0]->id_u01cc_contribs ?>" id="acceptButton" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" title="<?= LINK_MOD_CONFIRM ?>"><?= MODAL_BUTTON_YES ?></a>
                         </div>
                     </div>
                     <?php
                 }
             }
             ?>
         </div>
         <!-- affichage du titre et du contenu servant d'intro -->
         <div class="row">
             <div class="col s12 m12 l12">
                 <h1><?= htmlspecialchars_decode($getQuestResult[0]->title) ?></h1>
             </div>
         </div>            
         <div class="row">
             <div class="col s12 m12 l12"><?= htmlspecialchars_decode($getQuestResult[0]->content) ?></div>
         </div>
     </div>
     <?php
     foreach ($getQuestResult as $quest)
     {
         ?>
         <!-- affichage des étapes -->
         <div  class="container <?= $quest->id_u01cc_contribs ?>" id="step<?= $quest->id ?>">
             <div class="row">
                 <?php
                 if (isset($_SESSION['isConnect']))
                 {
                     // si l'utilisateur est connecté, on affiche les boutons permettant la modification et la suppression du contenu s'il en est l'auteur
                     if ($_SESSION['id'] == $quest->id_u01cc_users || $_SESSION['role'] == 1 || $_SESSION['role'] == 3)
                     {
                         ?>

                         <div class="col s1 offset-s10">
                             <a href="#deleteStepModal<?= $quest->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_DELETE ?>"><i class="material-icons">delete</i></a>                           
                         </div>
                         <div class="col s1">
                             <a href="#updateStepModal<?= $quest->id ?>" class="waves-effect waves-dark modal-trigger" title="<?= LINK_UPDATE ?>"><i class="material-icons">edit</i></a> 
                         </div>

                         <!-- modals de confirmation de suppression et modification -->
                         <div id="deleteStepModal<?= $quest->id ?>" class="modal step">
                             <div class="modal-content">
                                 <h4><?= DEL_MOD_TITLE ?> :</h4>
                                 <p><?= DEL_MOD_CONTENT1 ?></p>
                                 <p><?= DEL_MOD_CONTENT2 ?></p>
                             </div>
                             <div class="modal-footer">
                                 <form action="quest.php" method="POST">
                                     <label for="stepId"></label>
                                     <input id="stepId" class="hide" name="stepId" value="<?= $quest->id ?>">
                                     <label for="cancelDeleteStep"></label>
                                     <input id="cancelDeleteStep" type="button" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_NO ?>" />
                                     <label for="confirmDeleteStep"></label>
                                     <input id="confirmDeleteStep" type="submit" name="confirmDelStep" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                                 </form>
                             </div>
                             <div id="updateStepModal<?= $quest->id ?>" class="modal">
                                 <div class="modal-content">
                                     <h4><?= UP_MOD_TITLE ?> :</h4>
                                     <p><?= UP_MOD_CONTENT1 ?></p>
                                 </div>
                                 <div class="modal-footer">
                                     <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="<?= LINK_MOD_CANCEL ?>"><?= MODAL_BUTTON_NO ?></a>
                                     <a href="updateStepContent.php?id=<?= $quest->id ?>" id="updateStepButton" name="update" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" title="Confirmation"><?= MODAL_BUTTON_YES ?></a>
                                 </div>
                             </div>
                         </div>
                         <?php
                     }
                 }
                 ?>
             </div>
             <!-- affichage du contenu et du titre des étapes -->
             <div class="row">
                 <div class="col s12 m12 l12">
                     <h2><?= htmlspecialchars_decode($quest->raidStep) ?></h2>
                 </div>
             </div>            
             <div class="row">
                 <div class="col s12 m12 l12"><?= htmlspecialchars_decode($quest->contentStep) ?>
                 </div>
             </div>
         </div>
         <?php
     }
 }
 include_once 'footer.php';
?>