<?php
 include_once '../configuration.php';
 include_once '../controllers/updateIntroContentController.php';
 include_once 'header.php';
?>
<div class="container">
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <?php
             if (isset($_POST['submit']) && count($updateIntroError) == 0)
             {
                 ?>
                 <h2><?= CONFIRM_UPDATE_INTRO ?></h2>
                 <?php
             }
             else
             {
                 ?>
                 <h1><?= UPDATE_TITLE_INTRO ?> : </h1>
                 <p class="error center-align"><?= isset($updateIntroError['submit']) ? $updateIntroError['submit'] : '' ?></p>
             </div>
         </div>
         <div class="row">
             <form class="col s12 m12 l12" action="" method="POST">
                 <div class="row">
                     <div class="col s12 m12 l12 input-field">
                         <select name="categories" id="categories">
                             <option value="" <?= isset($_POST['submit']) && isset($formError['categories']) ? 'disabled selected' : 'disabled selected' ?>><?= CAT_SELECT ?></option>
                             <option value="1" <?= isset($_POST['submit']) && $_POST['categories'] == 1 || $getContribsByIdResult->id_u01cc_categoriesContribs == 1 ? 'selected' : '' ?>><?= CAT_RAID ?></option>
                             <option value="2" <?= isset($_POST['submit']) && $_POST['categories'] == 2 || $getContribsByIdResult->id_u01cc_categoriesContribs == 2 ? 'selected' : '' ?>><?= CAT_QUEST ?></option>
                             <option value="3" <?= isset($_POST['submit']) && $_POST['categories'] == 3 || $getContribsByIdResult->id_u01cc_categoriesContribs == 3 ? 'selected' : '' ?>><?= CAT_TUTO ?></option>
                             <option value="5" <?= isset($_POST['submit']) && $_POST['categories'] == 5 || $getContribsByIdResult->id_u01cc_categoriesContribs == 5 ? 'selected' : '' ?>><?= CAT_STREAMING ?></option>
                             <option value="6" <?= isset($_POST['submit']) && $_POST['categories'] == 6 || $getContribsByIdResult->id_u01cc_categoriesContribs == 5 ? 'selected' : '' ?>><?= CAT_VIDEO ?></option>
                             <option value="7" <?= isset($_POST['submit']) && $_POST['categories'] == 7 || $getContribsByIdResult->id_u01cc_categoriesContribs == 7 ? 'selected' : '' ?>><?= CAT_ARTWORK ?></option>
                         </select>
                         <label for="categories"><?= CAT_SELECT ?> :</label>
                         <small class="error"><?= isset($updateIntroError['categories']) ? $updateIntroError['categories'] : '' ?></small>       
                     </div>
                 </div>
                 <div class="divider"></div>
                 <div class="row">
                     <div class="col s12 m12 l12 input-field">
                         <label for="tilte"><?= ADD_TITLE ?> :</label>
                         <input type="text" id="title" name="title" value="<?= isset($_POST['submit']) ? $updateIntroContribs->title : $getContribsByIdResult->title ?>" />
                         <small class="error"><?= isset($updateIntroError['title']) ? $updateIntroError['title'] : '' ?></small>          
                     </div>
                 </div>
                 <div class="row hide-on-med-and-down">
                     <div class="col s12 m12 l12">
                         <label for="content" id="label"><?= ADD_REQUIRE ?> :</label>
                         <textarea id="content" class="tinymce-enabled-message" name="content"><?= isset($_POST['submit']) ? $updateIntroContribs->content : $getContribsByIdResult->content ?></textarea>
                         <small class="error"><?= isset($updateIntroError['content']) ? $updateIntroError['content'] : '' ?></small>          
                     </div>
                 </div>
                 <div class="row hide-on-large-only">
                     <div class="col s12 m12 l12">
                         <label for="content" id="label"><?= ADD_REQUIRE ?> :</label>
                         <textarea id="content" name="content"><?= isset($_POST['submit']) ? $updateIntroContribs->content : '' ?></textarea>
                         <small class="error"><?= isset($updateIntroError['content']) ? $updateIntroError['content'] : '' ?></small>          
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l12 center-align">
                         <input type="submit" id="submit" class="waves-effect waves-red btn-flat" name="submit" value="<?= ADD_VALID ?>" />
                     </div>    
                 </div>
             </form>
         </div>    
     </div>
     <?php
 }
 include 'footer.php';
?>