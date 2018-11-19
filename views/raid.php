<?php
 include 'header.php';
 include '../controllers/raidController.php';
 var_dump( $getRaidStepResult);
?>
<!-- affichage tabs pour les étapes -->
<div class="row">
    <div class="col s12 l12 m12">
        <div class="row center-align">
            <div class="col s12 m12 l12">
                <ul class="tabs">
                    <?php
                     foreach ($getTitleRaidResult as $getTitleRaidResultDetail)
                     {
                         ?>
                         <li class="tab col"><a href="#intro<?= $getTitleRaidResultDetail->id ?>">Intro</a></li>
                         <?php
                         foreach ($getRaidStepResult as $getRaidStepResultDetail)
                         {
                             ?>
                             <li class="tab col"><a href="#step<?= $getRaidStepResultDetail->nextId ?>"><?= htmlspecialchars_decode($getRaidStepResultDetail->raidStep) ?></a></li>
                             <?php
                         }
                     }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row center-align raidSelect">
            <div class="col offset-l3 s6 m6 l6">
                <!-- liste déroulante pour la sélection du raid -->
                <form action="#" method="POST">
                    <label for="sumary"></label>
                    <select id="summary" name="summary">
                        <option value="">Selectionnez un raid</option>
                        <?php
                         foreach ($getTitleRaidResult as $getTitleRaidResultDetail)
                         {
                             ?>
                             <option value="<?= $getTitleRaidResultDetail->id ?>"><?= htmlspecialchars_decode($getTitleRaidResultDetail->title) ?></option>
                             <?php
                         }
                        ?>
                    </select>
                </form>            
            </div>
        </div>

        <?php
         // boucle pour l'affichage de l'intro du raid (table contribs)
         foreach ($getRaidIntroResult as $getRaidIntroResultDetail)
         {
             ?>
             <div class="row" id="intro<?= $getTitleRaidResultDetail->id ?>">
                 <div class="col s12 m12 l12">
                     <?php
                     if (isset($_SESSION['isConnect']))
                     {
                         if ($_SESSION['id'] == $getRaidStepResultDetail->id_u01cc_users)
                         {
                             ?>
                             <div class="row">
                                 <div class="col offset-s10 s1">
                                     <a href="#deleteModal" class="waves-effect waves-dark modal-trigger" title="Supprimer"><i class="material-icons">delete</i></a>                           
                                 </div>
                                 <div class="col s1">
                                     <a href="#updateModal" class="waves-effect waves-dark modal-trigger" title="Modifier"><i class="material-icons">edit</i></a> 
                                 </div>
                             </div>
                             <?php
                         }
                     }
                     ?>

                     <h1 class="center-align"><?= htmlspecialchars_decode($getRaidIntroResultDetail->title) ?></h1>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l12">
                         <?= htmlspecialchars_decode($getRaidIntroResultDetail->content) ?>
                     </div>
                 </div>
             </div>
             <?php
             // boucle affichant le contenu les étapes (raidSteps)
             foreach ($getRaidStepResult as $getRaidStepResultDetail)
             {
                 ?>
                 <div class="row" id="step<?= $getRaidStepResultDetail->nextId ?>">
                     <div class="col s12 m12 l12">
                         <?php
                         if (isset($_SESSION['isConnect']))
                         {
                             if ($_SESSION['id'] == $getRaidStepResultDetail->id_u01cc_users)
                             {
                                 ?>
                                 <div class="row">
                                     <div class="col offset-s10 s1">
                                         <a href="#deleteModal" class="waves-effect waves-dark modal-trigger" title="Supprimer"><i class="material-icons">delete</i></a>                           
                                     </div>
                                     <div class="col s1">
                                         <a href="#updateStepModal" class="waves-effect waves-dark modal-trigger" title="Modifier"><i class="material-icons">edit</i></a> 
                                     </div>
                                 </div>
                                 <?php
                             }
                         }
                         ?>
                         <h2><?= htmlspecialchars_decode($getRaidStepResultDetail->raidStep) ?></h2>
                     </div>
                     <div class="row">
                         <div class="col s12 m12 l12"><?= htmlspecialchars_decode($getRaidStepResultDetail->contentStep) ?>
                         </div>
                     </div>
                 </div>
                 <?php
             }
         }
        ?>

    </div>
</div>
<!-- modals de confirmation de suppression et modification -->
<div id="deleteModal" class="modal">
    <div class="modal-content">
        <h4>Suppression de contenu :</h4>
        <p>Êtes-vous sûr de vouloir supprimer ce contenu?</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="annulation"><?= MODAL_BUTTON_NO ?></a>
        <a href="#" id="acceptButton" name="valid" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat"><?= MODAL_BUTTON_YES ?></a>
    </div>
</div>
<div id="updateModal" class="modal">
    <div class="modal-content">
        <h4>Modification de contenu :</h4>
        <p>Êtes-vous sûr de vouloir modifier ce contenu?</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="annulation"><?= MODAL_BUTTON_NO ?></a>
        <a href="updateIntroContent.php?id=<?=  $getTitleRaidResultDetail->id ?>" id="acceptButton" name="valid" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat"><?= MODAL_BUTTON_YES ?></a>
    </div>
</div>
<div id="updateStepModal" class="modal">
    <div class="modal-content">
        <h4>Modification de contenu :</h4>
        <p>Êtes-vous sûr de vouloir modifier ce contenu?</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat" title="annulation"><?= MODAL_BUTTON_NO ?></a>
        <a href="updateStepContent.php?id=<?= $getRaidStepResultDetail->nextId ?>" id="acceptButton" name="valid" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat"><?= MODAL_BUTTON_YES ?></a>
    </div>
</div>
<?php
 include 'footer.php';
?>