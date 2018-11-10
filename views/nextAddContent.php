<?php 
 include_once 'header.php';
 include_once 'nextAddContentController.php'
 ?>
<div class="container">
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <h1>Créez votre tuto :</h1>
            <p class="error center-align"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
        </div>
    </div>
    <div class="row">
        <form class="col s12 m12 l12" action="#" method="POST">
            <div class="divider"></div>            
            <div class="row">
                <div class="col s12 m12 l12 input-field">
                    <label for="raidStep" class="raidStep"><?= ADD_RAID_STEP ?> :</label>
                    <input type="text" id="raidStep" name="raidStep" value="<?= isset($_POST['submit']) ? $addContent->raidStep : '' ?>" />
                    <small class="error"><?= isset($formError['raidStep']) ? $formError['raidStep'] : '' ?></small>          
                </div>
            </div>         
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <textarea id="raidContent" class="tinymce-enabled-message" name="raidContent"><?= isset($_POST['submit']) ? $addContent->raidContent : '' ?></textarea>
                    <label for="raidContent"></label>
                    <small class="error"><?= isset($formError['raidContent']) ? $formError['raidContent'] : '' ?></small>          
                </div>
            </div>

            <div class="row">
                <div class="col s6 m6 l6 center-align">
                    <button id="add" class="add-wysiwyg waves-effect waves-red btn-flat" name="add"><?= ADD_STEP ?></button>
                </div>
                <div class="col s6 m6 l6 center-align">
                    <input type="submit" id="submit" class="waves-effect waves-red btn-flat" value="Valider" name="submit" />
                </div> 
            </div>                   
        </form>
    </div>
</div>
<?php 
include_once 'footer.php';
?>