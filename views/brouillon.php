
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