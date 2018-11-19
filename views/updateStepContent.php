<?php
 include_once '../configuration.php';
 include_once '../controllers/updateStepContentController.php';
 include_once 'header.php';
?>

<div class="container">
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <h1>Modifier une étape de votre tuto</h1>
            <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
        </div>
    </div>
    <div class="row">
        <form class="col s12 m12 l12" action="#" method="POST">
            <div class="divider"></div>            
            <div class="row">
                <div class="col s12 m12 l12 input-field">
                    <label for="raidStep" class="raidStep"><?= ADD_RAID_STEP ?> :</label>
                    <input type="text" id="raidStep" name="raidStep" value="<?= isset($_POST['submit']) ? $updateStepContent->raidStep : $getStepByIdResult->raidStep ?>" />
                    <small class="error"><?= isset($formError['raidStep']) ? $formError['raidStep'] : '' ?></small>          
                </div>
            </div>         
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <textarea id="contentStep" class="tinymce-enabled-message" name="contentStep"><?= isset($_POST['submit']) ? $updateStepContent->contentStep : $getStepByIdResult->contentStep ?></textarea>
                    <label for="contentStep"></label>
                    <small class="error"><?= isset($formError['contentStep']) ? $formError['contentStep'] : '' ?></small>          
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12 center-align">
                    <input type="submit" id="submit" class="waves-effect waves-red btn-flat" value="<?= ADD_VALID ?>" name="submit" />
                </div> 
            </div>                   
        </form>
    </div>
</div>

<?php
 include_once 'footer.php';
?>