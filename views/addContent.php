<?php
 include_once '../configuration.php';
 include '../controllers/addContentController.php';
 include 'header.php';
 if (isset($_POST['submit']) && count($formError) == 0)
 { //message de confirmation en cas de contribution artwork et video
     ?>
     <div class="container">
         <div class="row">
             <div class="col s12 m12 l12">
                 <h1 class="center-align"><?= ADD_CONTENT_SUCCESS ?></h1>
             </div>
         </div>
         <div class="row">
             <div class="col s12 m12 l12"
                 <a href="addContent.php" title="<?= LINK__BACK ?>" class="waves-effect waves-dark btn right-align">Retour</a>
             </div>
         </div>
     </div>
     <?php
 }
 else
 {
     ?>
     <div class="container">
         <div class="row center-align">
             <div class="col s12 m12 l12">
                 <h1><?= ADD_CONTENT_TITLE ?> :</h1>
                 <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
             </div>
         </div>
         <div class="row">
             <form class="col s12 m12 l12" action="#" method="POST">
                 <div class="row">
                     <div class="col s12 m12 l12 input-field">
                         <!-- choix des catégories de contributions -->
                         <select name="categories" id="categories">
                             <option value=""><?= CAT_SELECT ?></option>
                             <option value="1" <?= isset($_POST['categories']) && $_POST['categories'] == 1 ? 'selected' : '' ?>><?= CAT_RAID ?></option>
                             <option value="2" <?= isset($_POST['categories']) && $_POST['categories'] == 2 ? 'selected' : '' ?>><?= CAT_QUEST ?></option>
                             <option value="3" <?= isset($_POST['categories']) && $_POST['categories'] == 3 ? 'selected' : '' ?>><?= CAT_TUTO ?></option>
                             <option value="6" <?= isset($_POST['categories']) && $_POST['categories'] == 6 ? 'selected' : '' ?>><?= CAT_VIDEO ?></option>
                             <option value="7" <?= isset($_POST['categories']) && $_POST['categories'] == 7? 'selected' : '' ?>><?= CAT_ARTWORK ?></option>
                         </select>
                         <label for="categories"><?= CAT_SELECT ?> :</label>
                     </div>
                 </div>
                 <div class="divider"></div>
                 <div class="row">
                     <div class="col s12 m12 l12 input-field">
                         <label for="tilte"><?= ADD_TITLE ?> :</label>
                         <input type="text" id="title" name="title" value="<?= isset($_POST['submit']) || isset($_POST['next']) ? $addContent->title : '' ?>" />
                         <p><small class="error"><?= isset($formError['title']) ? $formError['title'] : '' ?></small></p>          
                     </div>
                 </div>
                 <!-- TinyMCE -->
                 <div class="row hide-on-med-and-down">
                     <div class="col s12 m12 l12">
                         <label for="content" class="hide" id="label"><?= ADD_REQUIRE ?> :</label>
                         <textarea id="content" class="tinymce-enabled-message" name="content"><?= isset($_POST['submit']) || isset($_POST['next']) ? $addContent->content : '' ?></textarea>
                         <small class="error"><?= isset($formError['content']) ? $formError['content'] : '' ?></small>          
                     </div>
                 </div>
                 <div class="row hide-on-large-only">
                     <div class="col s12 m12 l12">
                         <label for="content" class="hide" id="label"><?= ADD_REQUIRE ?> :</label>
                         <textarea id="content" name="content"><?= isset($_POST['submit']) || isset($_POST['next']) ? $addContent->content : '' ?></textarea>
                         <small class="error"><?= isset($formError['content']) ? $formError['content'] : '' ?></small>          
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l12 right-align hide" id="nextstep">
                         <input type="submit" id="next" class="waves-effect waves-red btn-flat" name="next" value="<?= ADD_NEXT_STEP ?>" />
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12 m12 l12 right-align hide" id="send">
                         <input type="submit" id="submit" class="waves-effect waves-red btn-flat" name="submit" value="<?= ADD_VALID ?>" />
                     </div>    
                 </div>
             </form>
         </div>    
     </div>
     <?php
 }
 include_once 'footer.php';
?>