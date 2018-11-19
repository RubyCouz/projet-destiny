<?php
 include_once '../configuration.php';
 include_once '../controllers/updateIntroContentController.php';
 include_once 'header.php';
?>
<div class="container">
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <?php
             if (isset($_POST['submit']) && count($formError) == 0)
             {
                 ?>
                 <h2 class="center-align valign-wrapper">Étape modifiée avec succès</h2>
                 <?php
             }
             else
             {
                 ?>
                 <h1>Modifier l'introduction de votre tuto : </h1>
                 <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
             </div>
         </div>
         <div class="row">
             <form class="col s12 m12 l12" action="" method="POST">
                 <div class="row">
                     <div class="col s12 m12 l12 input-field">
                         <select name="categories" id="categories">
                             <option value=""><?= CAT_SELECT ?></option>
                             <option value="1"><?= CAT_RAID ?></option>
                             <option value="2"><?= CAT_QUEST ?></option>
                             <option value="3"><?= CAT_TUTO ?></option>
                             <option value="5"><?= CAT_STREAMING ?></option>
                             <option value="6"><?= CAT_VIDEO ?></option>
                             <option value="7"><?= CAT_ARTWORK ?></option>
                         </select>
                         <label for="categories"><?= CAT_SELECT ?> :</label>
                         <small class="error"><?= isset($formError['catégories']) ? $formError['catégories'] : '' ?></small>       
                     </div>
                 </div>
                 <div class="divider"></div>
                 <div class="row">
                     <div class="col s12 m12 l12 input-field">
                         <label for="tilte"><?= ADD_TITLE ?> :</label>
                         <input type="text" id="title" name="title" value="<?= isset($_POST['submit']) ? $updateIntroContribs->title : $getContribsByIdResult->title ?>" />
                         <small class="error"><?= isset($formError['title']) ? $formError['title'] : '' ?></small>          
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l12">
                         <label for="content" id="label"><?= ADD_REQUIRE ?> :</label>
                         <textarea id="content" class="tinymce-enabled-message" name="content"><?= isset($_POST['submit']) ? $updateIntroContribs->content : $getContribsByIdResult->content ?></textarea>
                         <small class="error"><?= isset($formError['content']) ? $formError['content'] : '' ?></small>          
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l12 center-align">
                         <button type="submit" id="submit" class="waves-effect waves-red btn-flat" name="submit"><?= ADD_VALID ?></button>
                     </div>    
                 </div>
             </form>
         </div>    
     </div>
     <?php
 }
 include 'footer.php';
?>