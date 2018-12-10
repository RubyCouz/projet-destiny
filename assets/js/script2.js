$(document).ready(function () {
    //menu burger mobil
    $('.button-collapse').sideNav();
    // menu drop down
    $('.dropdown-button').dropdown(
            {
                inDuration: 300,
                outDuration: 225,
                constrainWidth: true, //true => adapte le dropdown à la taille des onglets, false => adpate à la taille des liens à l'intérieur
                hover: true, // S'active au survol, false => clic pour s'activer
                gutter: 0, // Spacing from edge
                belowOrigin: true, // deffilement du dropdown sous l'onglet, false => defilment sur l'onglet
                alignment: 'left', // alignement sur la gauche des liens dans le dropdown
                stopPropagation: false // Stops event propagation
            });
    //dropdown mobil
    $('.dropdown-button-mobil').dropdown(// menu drop down
            {
                inDuration: 300,
                outDuration: 225,
                constrainWidth: true, //true => adapte le dropdown à la taille des onglets, false => adpate à la taille des liens à l'intérieur
                hover: false, // S'active au survol, false => clic pour s'activer
                gutter: 0, // Spacing from edge
                belowOrigin: true, // deffilement du dropdown sous l'onglet, false => defilment sur l'onglet
                alignment: 'left', // alignement sur la gauche des liens dans le dropdown
                stopPropagation: false // Stops event propagation
            });
    //controle du smoothscroll
    $('.js-scrollTo').on('click', function () { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1000; // Durée de l'animation (en ms)
        $('html, body').animate({scrollTop: $(page).offset().top}, speed); // Go
        return false;
    });

    $('.parallax').parallax(); // active l'effet parallax
    $('.weaponPic').materialbox(); // agrandissement de l'image au clic dessus
    $('.goodiesPicMin').materialbox(); // agrandissement de l'image au clic dessus
    // control des tabs
    $('ul.tabs').tabs();
    //controle du date picker
    $('.datepicker').pickadate({
        selectMonths: true, // creation d'un dropdown pour la selection du mois
        selectYears: 100, // creation d'un dropdown pour la selection de l'annee
        //tableaux servant  à l'affichage des jours et des mois, entiers et abrégés
        monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
        weekdaysFull: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
        weekdaysLetter: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        //format d'affichage dans l'input
        format: 'dd/mm/yyyy',
        //affichage des boutons dans le footer du datepicker
        today: 'Aujourd\'hui',
        clear: 'Effacer',
        close: 'Ok',
        closeOnSelect: false, // fermeture à la selection de la date
        container: undefined // ex. 'body' will append picker to body
    });
    $('select').material_select();
//affichage wysiwig
    function applyMCE() {
        tinyMCE.init({
            //langue
            language: 'fr_FR',
            // mode de tinymce
            mode: 'specific_textareas',
            //selection du champs a passer en wysiwyg
            selector: '.tinymce-enabled-message',
            // theme
            theme: 'modern',
            mobile: {
                theme: 'mobile',
                plugins: ['autosave', 'lists', 'autolink']
            },
            // gestion des plugins
            plugins: [
                'image, media, autolink, responsivefilemanager',
                " advlist anchor autolink colorpicker contextmenu fullscreen help image imagetools",
                " lists link media noneditable preview",
                " searchreplace table textcolor visualblocks wordcount"
            ],
            //gestion du menu
            menubar: 'file edit insert view format fontsizeselect table tools help',
            //gestion de la barre d'outils
            toolbar: [
                'undo redo | styleselect | bold italic | link image media | alignleft aligncenter alignright alignjustify | bullist numlist'
            ],
            //enlève le "powered by..."
            branding: false,
            //gestion du plugin uploader filemanager
            external_filemanager_path: '/filemanager/',
            filemanager_title: 'Responsive Filemanager',
            external_plugins: {'filemanager': '/filemanager/plugin.min.js'}
        });
    }
    applyMCE();
// gestion des boutons du formulaire d'ajout de contenu   
    $('#categories').change(function () {
// selon le choix de l'utilisateur
        if (($('#categories option:selected').val()) == 1 || ($('#categories option:selected').val()) == 2 || ($('#categories option:selected').val()) == 3) {
//activation du bouton approprié, et désactivation de l'autre afin d'éviter les erreurs
            $('#nextstep').removeClass('hide');
            $('#label').removeClass('hide');
            $('#send').addClass('hide');
        } else {
            $('#send').removeClass('hide');
            $('#nextstep').addClass('hide');
            $('#label').addClass('hide');
        }
    }
    );
    // récupération de la valeur de la liste déroulante permettant la sélection d'une quête  
    $('#summary').change(function () {
        $('#select').submit();
    });
    // déclenchement de la modal
    $('.modal').modal({
        ready: function (modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            //récupération de l'id de l'élément affiché et envoie sur l'élément de confirmation pour validation en base de donnée 
            //pas de soluce internet pour materialize
            $('#acceptButton').attr('data-id', trigger.attr('data-id'));
            $('#deleteButton').attr('data-id', trigger.attr('data-id'));
            $('.stepContent').attr('class', trigger.attr('data-id'));
            $('#deleteIntroButton').attr('data-id', trigger.attr('data-id'));
            $('#deleteStepButton').attr('data-id', trigger.attr('data-id'));
        }
    });
    //gestion de la validation ou de la suppressiond de contenu lors de la modération
    //au click sur le bouton
    $('#acceptButton').click(function () {
// on stock la valeur de data-id dans la variable id
        var id = $(this).attr('data-id');
        //appel ajax pour envoye le data-id vers le controlleur
        $.post('../controllers/moderationController.php', {
            id: id, // definion et envoie l'id dans le controlleur
            valid: $(this).val() // definition et envoie du nom du bouton 
        }, function (data) { //execution de la fonction correspondante dans le controlleur
            if (data == true) { // si la fonction return retourne true
                $('#' + id).hide(); // on cache la catégorie validé 
                $('.' + id).hide(); // on cache l'étape validé
            }
        },
                'JSON');
    });
    $('#deleteButton').click(function () {
        var id = $(this).attr('data-id');
        $.post('../controllers/moderationController.php', {
            id: id,
            invalid: $(this).val()
        }, function (data) {
            if (data == true) {
                $('#' + id).hide();
                $('.' + id).hide();
            }
        },
                'JSON');
    });


    $('#email').blur(function () {
        $.post('../controllers/subscribeController.php', {emailVerify: $(this).val()}, function (data) {
            if (data == 1) {
                $('#emailError').removeClass('hide');
                $('#register').hide();
            } else {
                $('#emailError').addClass('hide')
                $('#register').show();
            }
        },
                'JSON');
    });
    $('#gamertag').blur(function () {
        $.post('../controllers/subscribeController.php', {gtVerify: $(this).val()}, function (data) {
            if (data == 1) {
                $('#gtError').removeClass('hide');
                $('#register').hide();
            } else {
                $('#gtError').addClass('hide')
                $('#register').show();
            }
        },
                'JSON');
    });
    //modification ou suppression de contenu après sa validation et son affichage
//    $('#deleteIntroButton').click(function () {
//        var id = $(this).attr('data-id');
//        console.log(id);
//        $.post('../controllers/questFinalController.php', {
//            id: id,
//            deleteIntro: $(this).val()
//        }, function (data) {
//            if (data == true) {
//            }
//        }, 'JSON');
//    });
//    $('#deleteStepButton').click(function (e) {
//        e.preventDefault();
//        console.log('ok');
//        var id = $(this).attr('data-id');
//        console.log(id);
//        $.post('../controllers/questFinalController.php', {
//            id: id,
//            deleteStep: $(this).val()
//        }, function (data) {
//            if (data == true) {
//            }
//        }, 'JSON');
//    });
});
