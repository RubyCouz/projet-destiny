<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Histoire et références</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/materialize.min.css" /> 
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <!-- Navbar -->
        <div class="navbar-fixed"> 
            <!-- Dropdown lore Structure -->
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="Histoire.php#story"class>Histoire</a></li>
                 <li><a href="gardians.php#characters">Gardiens et protagonistes</a></li>
                <li><a href="ennemies.php#ennemis">Factions ennemies</a></li>
                <li><a href="factions.php#factions">Factions et marchands</a></li>

            </ul>
            <!-- Dropdown tuto Structure -->
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="#!">Quêtes</a></li>
                <li><a href="#!">Raids</a></li>
                <li><a href="#!">Stuffs</a></li>
                <li><a href="#!">Farm</a></li>

            </ul>
            <!-- Dropdown contribution Structure -->
            <ul id="dropdown3" class="dropdown-content">
                <li><a href="#!">Vidéos</a></li>
                <li><a href="#!">Streaming</a></li>
                <li><a href="#!">Artworks</a></li>
            </ul>
            <!-- Dropdown forum Structure -->
            <ul id="dropdown4" class="dropdown-content">
                <li><a href="#!">catégories</a></li>
                <li><a href="#!">Tchat</a></li>
            </ul>
            <nav class="nav-extend">
                <div class="nav-wrapper">
                    <a href="index.php#home" class="brand-logo">Logo de Destiny</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" required>
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </li>
                        <li><a class="center-align dropdown-trigger" href="#" data-target="dropdown1">Lore de Destiny<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="center-align dropdown-trigger" href="#!" data-target="dropdown2">Tuto et asctuces<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="center-align dropdown-trigger" href="#!" data-target="dropdown3">Contributions<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="center-align dropdown-trigger" href="#!" data-target="dropdown4">Forum<i class="material-icons right">arrow_drop_down</i></a></li>
                        <!-- <li><a href="#">Tchat</a></li> -->
                        <li><a href="#">"profil pic"</a></li>
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">S'inscrire</a></li>
                    </ul>
                    <div class="nav-content">
                        <ul class="tabs">
                            <div class="section table-of-contents">
                                <div class="row">
                                    <div class="col s6 m6 l6">
                                        <li class="tab"><a class="js-scrollTo center" href="#story">Histoire</a></li>                                        
                                    </div>
                                      <div class="col s6 m6 l6">                                        
                                        <li class="tab"><a class="js-scrollTo center" href="#reference">Références culturelles</a></li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
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
        <div id="story" class="row section scrollspy">
            <div class="col s12 m12 l12">
                <h2>Histoire de Destiny</h2>
                <p>            
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                    Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                    Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                    Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                    Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                </p>
                <p>            
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                    Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                    Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                    Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                    Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                </p>
                <p>            
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit. Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra. Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis. Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus. Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                </p>
            </div>
        </div>
        <div id="reference" class="row section scrollspy">
            <div class="col s12 m12 l12">
                <h2>Références culturelles</h2>
                <h3>lorem ipsum</h3>
                <p>            
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                    Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                    Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                    Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                    Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                </p>
                <h3>lorem ipsum</h3>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                    Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                    Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                    Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                    Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                </p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>