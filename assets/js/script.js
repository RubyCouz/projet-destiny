$(document).ready(function () {
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
    $('.scrollspy').scrollSpy();
    $('.js-scrollTo').on('click', function () { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1000; // Durée de l'animation (en ms)
        $('html, body').animate({scrollTop: $(page).offset().top}, speed); // Go
        return false;
    });
});
