
<!-- wysiwyg -->
<!--            <div id="copy" class="hide">
                <div class="row  type-wysiwyg">
                    <div class="input-field col s12 m12 l12">
                        <textarea id="raidContent" class="tinymce-enabled-message-new" name="raidContent"><?= isset($_POST['submit']) ? $addContent->raidContent : '' ?></textarea>
                        <label for="raidContent"></label>
                        <small class="error"><?= isset($formError['raidContent']) ? $formError['raidContent'] : '' ?></small>          
                    </div>
                </div>
            </div>-->

<textarea id="mceEditorID" class="mceEditorID form-control" cols="10" name="description" rows="5" placeholder="Description"></textarea>


<script src="link">
    // affichage de plusieur wisiwyg
$('#add').click(function () {
    var b = 2;
    var a = '<textarea id="mceEditorID' + b + '"></textarea>';
    $('.textareas').append(a);
var editorID = 'mceEditorID' + b;
tinymce.EditorManager.execCommand('mceAddEditor', false, editorID);
b++;
});
    // duplication des input étapes
//    function applyMCE() {
//        tinyMCE.init({
//            mode: "textareas",
//            selector: '.tinymce-enabled-message',
//            editor_selector: ".tinymce-enabled-message",
//        });
//    }
//    function AddRemoveTinyMce(editorId) {
//        if (tinyMCE.get(editorId))
//        {
//            tinyMCE.EditorManager.execCommand('mceFocus', false, editorId);
//            tinyMCE.EditorManager.execCommand('mceRemoveEditor', true, editorId);
//
//        } else {
//            tinymce.EditorManager.execCommand('mceAddEditor', false, editorId);
//        }
//    }
//    applyMCE();
////    $('a.toggle-tinymce').die('click').live('click', function (e) {
////        AddRemoveTinyMce('description1');
////        var lbl = $(this).text() == 'Off' ? 'On' : 'Off';
////        $(this).text(lbl);
////    });
//    $('a.add-wysiwyg').click(function (e) {
//
//
//        e.preventDefault();
//        var content = jQuery('#copy .type-wysiwyg'),
//                element = null;
//        for (var i = 0; i < 1; i++) {
//            element = content.clone();
//            var divId = 'id_' + jQuery.now();
//            element.attr('id', divId);
//            element.find('.remove-type').attr('targetDiv', divId);
//            element.find('.tinymce-enabled-message-new').attr('id', 'txt_' + divId);
//            element.appendTo('#copy');
//            AddRemoveTinyMce('txt_' + divId);
////            var divider = '<div class="divider"></div>'
////                    + '<div class="row">'
////                    + '<div class="col s12 m12 l12 input-field">'
////                    + '<label for="raidStep" class="raidStep">Étape :</label>'
////                    + '<input type="text" id="raidStep" name="raidStep" value="<?= isset($_POST[\'submit\']) ? $addContent->raidStep : \'\' ?>" />'
////                    + '<small class="error"><?= isset($formError[\'raidStep\']) ? $formError[\'raidStep\'] : \'\' ?></small>  '
////                    + '</div>'
////                    + '</div>';
////            ('#copy').append(divider);
//        }
//        ;
//    });
//
////    jQuery(".remove-type").die('click').live('click', function (e) {
////        var didConfirm = confirm("Are you sure You want to delete");
////        if (didConfirm == true) {
////            var id = jQuery(this).attr('data-id');
////            var targetDiv = jQuery(this).attr('targetDiv');
////            jQuery('#' + targetDiv).remove();
////            // }
////            return true;
////        } else {
////            return false;
////        }
////    });
</script>
<!-- liste contenu en attente de valdiation -->
  <div class="row center-align">
        <table>
            <thead>
                <tr>
                    <th><?= INPROGRESS_VALID_TITLE ?></th>
                    <th><?= INPROGRESS_VALID_GT ?></th>
                    <th><?= INPROGRESS_VALID_CAT ?></th>
                    <th><?= INPROGRESS_VALID_DATE ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                 foreach ($viewNoModerationContentResult as $viewNoModerationContentResultDetail)
                 {
                     ?>
                     <tr>
                         <td><?= $viewNoModerationContentResultDetail->title ?></td>
                         <td><?= $viewNoModerationContentResultDetail->gamerTag ?></td>
                         <td><?= $viewNoModerationContentResultDetail->dateHour ?></td>
                         <td><?= $viewNoModerationContentResultDetail->name ?></td>
                         <td class="right-align">
                             <a href="moderationDetail.php?id=<?= $viewNoModerationContentResultDetail->id ?>" class="waves-effect waves-red btn-flat">Voir la contribution</a>
                         </td>
                     </tr>
                     <?php
                 }
                ?>
            </tbody>
        </table>
    </div>

<!-- affichage contenu en attente de validation detail -->
<?php
 include 'header.php';
 include '../controllers/moderationController.php';
?>
<div class="container">
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <h1><?= $viewNoModerationContentResult->title ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <div><?= $viewNoModerationContentResult->content ?></div>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <p><?= INPROGRESS_BY ?> : <?= $viewNoModerationContentResult->gamertag ?></p>
            <p><?= INPROGRESS_DATE ?> : <?= $viewNoModerationContentResult->dateHour ?></p>
            <p><?= INPROGRESS_CAT ?> : <?= $viewNoModerationContentResult->name ?></p>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12 m6 l6">
            <a href="#confirmDeleteModal" class="waves-effect waves-dark btn modal-trigger">Supprimer la publication</a>
        </div>
        <div class="col s12 m6 l6">
            <a href="#confirmAcceptModal" class="waves-effect waves-dark btn modal-trigger">Valider la publications</a>
        </div>
    </div>
</div>
<!-- accept modal structure -->
<div id="acceptModal" class="modal">
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
                <form action="#" method="POST">
                    <label for="confirmAcceptModal"></label>
                    <input type="submit" id="confirmAcceptModal" name="valid" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                </form>
            </div>
        </div>
    </div>
</div>
<!-- delete modal structure -->
<div id="deleteModal" class="modal">
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
                <form action="#" method="POST">
                    <label for="confirmDeleteModal"></label>
                    <input type="submit" id="confirmDeleteModal" name="delete" class="modal-action modal-close waves-effect modal-trigger waves-dark btn-flat" value="<?= MODAL_BUTTON_YES ?>" />
                </form>        
            </div>
        </div>
    </div>
</div>
<!-- confirm accept modal structure -->
<div id="confirmAcceptModal" class="modal">
    <div class="modal-content">
        <h4><?= MODAL_CONFIRMATION ?></h4>
        <p><?= MODAL_CONFIRM_ADD ?></p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat"><?= MODAL_BUTTON_OK ?></a>                
    </div>
</div>
<!-- confirm delete modal structure -->
<div id="confirmDeleteModal" class="modal">
    <div class="modal-content">
        <h4><?= MODAL_CONFIRMATION ?></h4>
        <p><?= MODAL_CONFIRM_DEL ?></p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat"><?= MODAL_BUTTON_OK ?></a>                
    </div>
</div>
<?php
 include_once 'footer.php';
?>



navbar
<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="../assets/css/materialize.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>
    <body>
        <div class="navbar-fixed">
         Dropdown lore Structure 
        <ul id="dropdownLore" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'histoire.php?id=' . $_SESSION['id'] : 'histoire.php' ?>">Histoire</a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'guardians.php?id=' . $_SESSION['id'] : 'guardians.php' ?>">Gardiens et protagonistes</a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'ennemies.php?id=' . $_SESSION['id'] : 'ennemies.php' ?>">Factions ennemies</a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'factions.php?id=' . $_SESSION['id'] : 'factions.php' ?>">Factions et marchands</a></li>
        </ul>
         Dropdown tuto Structure 
        <ul id="dropdownTips" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'quest.php?id=' . $_SESSION['id'] : 'quest.php' ?>">Quêtes</a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'raid.php?id=' . $_SESSION['id'] : 'raid.php' ?>">Raids</a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'tuto.php?id=' . $_SESSION['id'] : 'tuto.php' ?>">Tutoriels</a></li>
        </ul>
         Dropdown contribution Structure 
        <ul id="dropdownContrib" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'video.php?id=' . $_SESSION['id'] : 'video.php' ?>">Vidéos</a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'streaming.php?id=' . $_SESSION['id'] : 'streaming.php' ?>">Streaming</a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'artwork.php?id=' . $_SESSION['id'] : 'artwork.php' ?>">Artworks</a></li>
        </ul>
         Dropdown forum Structure 
        <ul id="dropdownForum" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'forum.php?id=' . $_SESSION['id'] : 'forum.php' ?>">Catégories</a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'tchat.php?id=' . $_SESSION['id'] : 'tchat.php' ?>">Tchat</a></li>
        </ul>
            <nav>
                <div class="nav-wrapper">
                    <a href="home.php" class="brand-logo"><img src="../assets/img/logo.png" title="Logo Destiny" alt="Représentation du logo Destiny"/></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" required />
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownLore">Lore de Destiny<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownTips">Tuto et asctuces<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownContrib">Contributions<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownForum">Forum<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li>
                            <?php
                             if (!isset($_SESSION['isConnect']))
                             {
                                 ?>
                                 <a class="waves-effect waves-dark btn modal-trigger" href="#login"><?= NAV_CONECT ?></a>
                                 <?php
                             }
                             else
                             {
                                 ?>
                                 <span class="hello"><?= isset($_SESSION['gamerTag']) ? sprintf(NAV_WELCOME, $_SESSION['gamerTag']) : '' ?></span class>
                             </li>
                             <li><a class="waves-effect waves-dark btn modal-trigger" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect"><?= NAV_DISCONECT ?></a></li>
                             <?php
                         }
                        ?>
                    </ul>
                    <?php
                     if (isset($_SESSION['isConnect']))
                     {
                         ?>
                          menu interaction utilisateur 
                         <div class="fixed-action-btn toolbar">
                             <a class="btn-floating btn-large">
                                 <i class="large material-icons">menu</i>
                             </a>
                             <ul>
                                 <li class="waves-effect waves-dark"><a href="<?= isset($_SESSION['isConnect']) ? 'profil.php?id=' . $_SESSION['id'] : 'profil.php' ?>" title="Profil"><i class="material-icons">person</i></a></li>
                                 <li class="waves-effect waves-dark"><a href="<?= isset($_SESSION['isConnect']) ? 'farm.php?id=' . $_SESSION['id'] : 'farm.php' ?>" title="Historique"><i class="material-icons">assignment</i></a></li>
                                 <li class="waves-effect waves-dark"><a href="<?= isset($_SESSION['isConnect']) ? 'addContent.php?id=' . $_SESSION['id'] : 'histoire.php' ?>" title="Ajouter un contenu"><i class="material-icons">publish</i></a></li>
                                 <li class="waves-effect waves-dark"><a href="<?= isset($_SESSION['isConnect']) ? 'nextAddContent.php?id=' . $_SESSION['id'] : 'nextAddContent.php' ?>" title="Poursuivre l'ajout d'un tuto"><i class="material-icons">playlist_add</i></a></li>
                                 <li class="waves-effect waves-dark"><a href="<?= isset($_SESSION['isConnect']) ? 'moderation.php?id=' . $_SESSION['id'] : 'moderation.php' ?>" title="Modération"><i class="material-icons">supervisor_account</i></a></li>
                             </ul>
                         </div>
                         <?php
                     }
                    ?>
                     mobile 
                    <ul class="side-nav" id="mobile-demo">
                        <li>
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" required />
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownLore">Lore de Destiny<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownTips">Tuto et asctuces<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownContrib">Contributions<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownForum">Forum<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="#">Tchat</a></li> 
                        <li>
                            <?php
                             if (!isset($_SESSION['isConnect']))
                             {
                                 ?>
                                 <a class="waves-effect waves-dark btn modal-trigger" href="#login"><?= NAV_CONECT ?></a>
                                 <?php
                             }
                             else
                             {
                                 ?>
                                 <a class="dropdown-button" href="#" data-activates="dropdownProfil"><?= isset($_SESSION['gamerTag']) ? sprintf(NAV_WELCOME, $_SESSION['gamerTag']) : '' ?><i class="material-icons right">menu</i></a>
                             </li>
                             <li><a class="waves-effect waves-dark btn modal-trigger" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect"><?= NAV_DISCONECT ?></a></li>
                             <?php
                         }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>    
         login modal 
        <div id="login" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Connexion</h4>
                 formulaire de connexion 
                <div class="row" id="#">
                    <form action="<?= isset($_SESSION['isConnect']) ? $_SERVER['PHP_SELF'] . '?id=' . $_SESSION['id'] : '' ?>" method="POST" class="col s12 m12 l12">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <input id="gamerTag" type="text" name="gamerTag" class="validate" />
                                <label for="gamerTag"><?= FORM_GT ?> :</label>
                                <small class="error"><?= isset($_POST['submit']) && isset($formError['gamerTag']) ? $formError['gamerTag'] : '' ?></small>          
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <input id="password" type="password" class="validate" name="password" />
                                <label for="password"><?= FORM_PASSWORD ?> :</label>
                                <small class="error"><?= isset($_POST['submit']) && isset($formError['password']) ? $formError['password'] : '' ?></small>          
                            </div>
                        </div>
                        <div class="row" id="#">
                            <div class="col s12 m12 l12" id="#">
                                <input type="checkbox" id="rememberMe" name="rememberMe" />
                                <label for="rememberMe"><?= FORM_REMEMBERME ?></label>                                
                            </div>
                        </div>
                        <div class="row right-align">
                            <div class="col s12 m12 l12">
                                <input type="submit" class="right-align waves-effect waves-red btn-flat" name="connect" value="<?= FORM_CONNECT ?>"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <a href="subscribe.php" title="Inscrivez-vous!!"><?= FORM_SIGNUP ?></a>
                    </div>
                </div>
            </div>
        </div>

-->