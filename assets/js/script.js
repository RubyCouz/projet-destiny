$(document).ready(function () {
    //$('.modal').modal(); //déclenchement de la fenêtre modal
    //$('.parallax').parallax(); //déclenchement de l'effet parallax
    //$('.sidenav').sidenav(); // fonctionnement de la navbar
    //$('.weaponPic').materialbox(); // agrandissement des photos  lorsqu'on clic dessus
    //$('.goodiesPicMin').materialbox(); // agrandissement des photos  lorsqu'on clic dessus
    //$(".dropdown-trigger").dropdown(); //permet le déclenchement du dropdown sur les onglets de la navbar
    //$('.scrollspy').scrollSpy(); //permet au scrollspy (suivi de la position de la page sur les onglers) de fonctionner
    // permet un smoothscroll en cliquant sur un lien vers une ancre
    $('.js-scrollTo').on('click', function () { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1000; // Durée de l'animation (en ms)
        $('html, body').animate({scrollTop: $(page).offset().top}, speed); // Go
        return false;
    });
});
