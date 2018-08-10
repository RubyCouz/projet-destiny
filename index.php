<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Projet Destiny</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/materialize.min.css" /> 
        <link rel="stylesheet" href="assets/css/style.css" />

    </head>
    <body id="home">
        <!-- Navbar -->
        <div class="navbar-fixed"> 
            <!-- Dropdown lore Structure -->
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="Histoire.php#story">Histoire</a></li>
                <li><a href="gardians.php#characters">Gardiens et protagonistes</a></li>
                <li><a href="ennemies.php#ennemies">Factions ennemies</a></li>
                <li><a href="factions.php#factions">Factions et marchands</a></li>


            </ul>
            <!-- Dropdown tuto Structure -->
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="quest.php">Quêtes</a></li>
                <li><a href="raid.php">Raids</a></li>
                <li><a href="stuff.php">Stuffs</a></li>
                <li><a href="farm.php">Farm</a></li>
            </ul>
            <!-- Dropdown contribution Structure -->
            <ul id="dropdown3" class="dropdown-content">
                <li><a href="video.php">Vidéos</a></li>
                <li><a href="streaming.php">Streaming</a></li>
                <li><a href="artwork.php">Artworks</a></li>
            </ul>
            <!-- Dropdown forum Structure -->
            <ul id="dropdown4" class="dropdown-content">
                <li><a href="forum.php">catégories</a></li>
                <li><a href="tchat.php">Tchat</a></li>
            </ul>
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Logo de Destiny</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
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
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Lore de Destiny<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Tuto et asctuces<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">Contributions<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown4">Forum<i class="material-icons right">arrow_drop_down</i></a></li>
                        <!-- <li><a href="#">Tchat</a></li> -->
                        <li><a href="#">"profil pic"</a></li>
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">S'inscrire</a></li>
                    </ul>
                </div>
            </nav>
            <ul class="sidenav" id="mobile-demo">

                <li><a href="#"data-target="dropdown1">Lore de Destiny</a></li>
                <li><a href="#"data-target="dropdown2">Tuto et astuces</a></li>
                <li><a href="#"data-target="dropdown3">Contributions</a></li>
                <li><a href="#"data-target="dropdown4">Forum</a></li>
                <!-- <li><a href="#">Tchat</a></li> -->
                <li><a href="#">"profil pic"</a></li>
                <li><a href="#">Connexion</a></li>
                <li><a href="#">S'inscrire</a></li>
            </ul>
        </div>
        <!-- container parallax -->
        <div class="container-fluid">
            <div class="parallax-container">
                <div class="picture parallax"><img src="assets/img/accueil.jpg" /></div>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.

                Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.

                Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis. 
            </div>
            <div class="parallax-container">
                <div class="picture parallax"><img src="assets/img/thedarkbelow.jpg" /></div>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.

                Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.

                Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis. 
            </div>
            <div class="parallax-container">
                <div class="picture parallax"><img src="assets/img/housewolves.jpg"/></div>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.

                Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.

                Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis. 
            </div>
            <div class="parallax-container">
                <div class="picture parallax"><img src="assets/img/thetakenking.jpg" /></div>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.

                Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.

                Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis. 
            </div>
            <div class="parallax-container">
                <div class="picture parallax"><img src="assets/img/lordsofiron.jpg" /></div>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.

                Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.

                Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis. 
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
