<?php
 include_once 'header.php';
 include_once '../controllers/nextAddContentController.php';
?>

<div class="container">
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <h1>Poursuivez votre tuto :</h1>
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
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <textarea id="contentStep" class="tinymce-enabled-message" name="contentStep"><?= isset($_POST['submit']) ? $addNextContent->contentStep : '' ?></textarea>
                    <label for="contentStep"></label>
                    <small class="error"><?= isset($formError['contentStep']) ? $formError['contentStep'] : '' ?></small>          
                </div>
            </div>

            <div class="row">
                <div class="col s6 m6 l6 center-align">
                    <button id="add" class="add-wysiwyg waves-effect waves-red btn-flat" name="submit"><?= ADD_STEP ?></button>
                </div>
                <div class="col s6 m6 l6 center-align">
                    <input type="submit" id="submit" class="waves-effect waves-red btn-flat" value="<?= ADD_VALID ?>" name="submit" />
                </div> 
            </div>                   
        </form>
    </div>
</div>

<?php
 include_once 'footer.php';
?>