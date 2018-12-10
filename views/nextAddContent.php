<?php
 include_once '../configuration.php';
 include_once '../controllers/nextAddContentController.php';
 include_once 'header.php';
?>

<div class="container">
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <?php
             if (isset($_POST['submit']) && count($formError) == 0)
             {
                 ?>
                 <h2 class="center-align valign-wrapper"><?= ADD_NEXTCONTENT_SUCCESS ?></h2>
                 <?php
             }
             else
             {
                 ?>
                 <h1><?= ADD_NEXTCONTENT_TITLE ?> :</h1>
                 <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
             </div>
         </div>
         <div class="row">
             <form class="col s12 m12 l12" action="#" method="POST">
                 <div class="divider"></div>            
                 <div class="row">
                     <div class="col s12 m12 l12 input-field">
                         <label for="raidStep" class="raidStep"><?= ADD_RAID_STEP ?> :</label>
                         <input type="text" id="raidStep" name="raidStep" value="<?= isset($_POST['submit']) ? $addNextContent->raidStep : '' ?>" />
                         <small class="error"><?= isset($formError['raidStep']) ? $formError['raidStep'] : '' ?></small>          
                     </div>
                 </div>         
                 <div class="row hide-on-med-and-down">
                     <div class="input-field col s12 m12 l12">
                         <textarea id="contentStep" class="tinymce-enabled-message" name="contentStep"><?= isset($_POST['submit']) ? $addNextContent->contentStep : '' ?></textarea>
                         <label for="contentStep"></label>
                         <small class="error"><?= isset($formError['contentStep']) ? $formError['contentStep'] : '' ?></small>          
                     </div>
                 </div>
                 <div class="row hide-on-large-only">
                     <div class="input-field col s12 m12 l12">
                         <textarea id="contentStep" name="contentStep"><?= isset($_POST['submit']) ? $addNextContent->contentStep : '' ?></textarea>
                         <label for="contentStep"></label>
                         <small class="error"><?= isset($formError['contentStep']) ? $formError['contentStep'] : '' ?></small>          
                     </div>
                 </div>

                 <div class="row hide-on-med-and-down">
                     <div class="col s6 m6 l6 center-align">
                         <input type="submit" id="add" class="add-wysiwyg waves-effect waves-red btn-flat" name="next" value="<?= ADD_STEP ?>" />
                     </div>
                     <div class="col s6 m6 l6 center-align">
                         <input type="submit" id="submit" class="waves-effect waves-red btn-flat" name="submit" value="<?= ADD_VALID ?>" />
                     </div> 
                 </div>                   
                 <div class="hide-on-large-only">
                     <div class="row right-align">
                         <div class="col s12 m12 l12">
                             <input type="submit" id="add" class="add-wysiwyg waves-effect waves-red btn-flat" name="next" value="<?= ADD_STEP ?>" />
                         </div>
                     </div>
                     <div class="row right-align">
                         <div class="col s12 m12 l12">
                             <input type="submit" id="submit" class="waves-effect waves-red btn-flat" name="submit" value="<?= ADD_VALID ?>" />
                         </div> 
                     </div>     
                 </div>
             </form>
         </div>
     </div>
     <?php
 }
 include_once 'footer.php';
?>