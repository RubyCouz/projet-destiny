<?php
 include 'header.php';
 include '../controllers/moderationController.php';
?>
<div class="container">
    <h1 class="center-align">Ajout en attente</h1>
    <div class="row center-align">
        <?php
         foreach ($viewNoModerationContentResult as $viewNoModerationContentResultDetail)
         {
             ?>
             <div class="col s12 m12 l12" id="<?= $viewNoModerationContentResultDetail->id ?>">
                 <div class="card blue-grey darken-1">
                     <div class="card-content white-text">
                         <span class="card-title"><?= $viewNoModerationContentResultDetail->title ?> </span>
                         <p><?= htmlspecialchars_decode($viewNoModerationContentResultDetail->content) ?></p>
                         <p>Par : <?= $viewNoModerationContentResultDetail->gamerTag ?></p>
                         <p>Le : <?= $viewNoModerationContentResultDetail->dateHour ?></p>
                         <p>Catégories : <?= $viewNoModerationContentResultDetail->name ?></p>                    
                     </div>
                     <div class="card-action">
                         <div class="row">
                             <div class="col s12 m6 l6">
                                 <a class="waves-effect waves-dark btn modal-trigger left-align" href="#deleteModal" data-id="<?= $viewNoModerationContentResultDetail->id ?>"><?= ADMIN_REFUSE ?></a>
                             </div>
                             <div class="col s12 m6 l6">
                                 <a class="waves-effect waves-dark btn modal-trigger right-align" href="#confirmModal" data-id="<?= $viewNoModerationContentResultDetail->id ?>"><?= ADMIN_ACCEPT ?></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> 
             <?php
         }
         foreach ($getAddNextContentResult as $getAddNextContentResultDetail)
         {
             ?>
        <div class="col s12 m12 l12 stepContent">
                 <div class="card blue-grey darken-1">
                     <div class="card-content white-text">
                         <span class="card-title"><?= $getAddNextContentResultDetail->title ?> </span>
                         <p><?= htmlspecialchars_decode($getAddNextContentResultDetail->contentStep) ?></p>
                         <p>Par : <?= $getAddNextContentResultDetail->gamerTag ?></p>
                         <p>Le : <?= $getAddNextContentResultDetail->dateHour ?></p>
                         <p>Catégories : <?= $getAddNextContentResultDetail->name ?></p>                    
                     </div>
                     <div class="card-action">
                         <div class="row">
                             <div class="col s12 m6 l6">
                                 <a class="waves-effect waves-dark btn modal-trigger left-align" href="#deleteModal" data-id="<?= $getAddNextContentResultDetail->id_u01cc_contribs ?>"><?= ADMIN_REFUSE ?></a>
                             </div>
                             <div class="col s12 m6 l6">
                                 <a class="waves-effect waves-dark btn modal-trigger right-align" href="#confirmModal" data-id="<?= $getAddNextContentResultDetail->id_u01cc_contribs ?>"><?= ADMIN_ACCEPT ?></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> 
             <?php
         }
        ?>
        <!-- accept modal structure -->
        <div id="confirmModal" class="modal inProgress">
            <div class="modal-content">
                <h4><?= MODAL_VALID ?></h4>
                <p><?= MODAL_VALID_QUESTION ?></p>
            </div>
            <div class="modal-footer">
                <div class="row center-align">
                    <div class="col s12 m6 l6">
                        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat"><?= MODAL_BUTTON_NO ?></a>
                    </div>
                    <div class="col s12 m6 l6">                     
                        <button id="acceptButton" name="valid" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat"><?= MODAL_BUTTON_YES ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete modal structure -->
        <div id="deleteModal" class="modal inProgress">
            <div class="modal-content">
                <h4><?= MODAL_DEL ?></h4>
                <p><?= MODAL_DEL_QUESTION ?></p>
            </div>
            <div class="modal-footer">
                <div class="row center-align">
                    <div class="col s12 m6 l6">
                        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat"><?= MODAL_BUTTON_NO ?></a>
                    </div>
                    <div class="col s12 m6 l6">
                        <button id="deleteButton" name="invalid" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat"><?= MODAL_BUTTON_YES ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php
     include_once 'footer.php';
    ?>