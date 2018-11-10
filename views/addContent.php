<?php
 include 'header.php';
 include '../controllers/addContentController.php';
?>
<!-- script permettant l'implantation et le fonctionnement du wysiwyg -->

<!-- formulaire d'ajout de contenu sur le site -->
<div class="container">
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <h1>Créez votre tuto :</h1>
            <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
        </div>
    </div>
    <div class="row">
        <form class="col s12 m12 l12" action="<?= isset($_POST['next']) ? 'nextAddContent.php' : '#' ?>" method="POST">
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
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12 m12 l12 input-field">
                    <label for="tilte"><?= ADD_TITLE ?> :</label>
                    <input type="text" id="title" name="title" value="<?= isset($_POST['submit']) ? $addContent->title : '' ?>" />
                    <small class="error"><?= isset($formError['title']) ? $formError['title'] : '' ?></small>          
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <label for="content" class="hide" id="label"><?= ADD_REQUIRE ?> :</label>
                    <textarea id="content" class="tinymce-enabled-message" name="content"><?= isset($_POST['submit']) ? $addContent->content : '' ?></textarea>
                    <small class="error"><?= isset($formError['content']) ? $formError['content'] : '' ?></small>          
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 center-align hide" id="nextstep">
                    <button type="submit" id="next" class="waves-effect waves-red btn-flat" name="next"><?= ADD_NEXT_STEP ?></button>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 center-align hide" id="send">
                    <button type="submit" id="submit" class="waves-effect waves-red btn-flat" value="Valider" name="submit">Valider</button>
                </div>    
            </div>
        </form>
    </div>    
</div>

<?php
 include_once 'footer.php';
?>