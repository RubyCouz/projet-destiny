<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Projet Destiny</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/materialize.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>
    <body id="home">
        <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="nav-extended">
                <!-- Dropdown lore Structure -->
                <ul id="dropdownLore" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="histoire.php">Histoire</a></li>
                    <li><a class="waves-effect waves-dark" href="gardians.php">Gardiens et protagonistes</a></li>
                    <li><a class="waves-effect waves-dark" href="ennemies.php">Factions ennemies</a></li>
                    <li><a class="waves-effect waves-dark" href="factions.php">Factions et marchands</a></li>
                </ul>
                <!-- Dropdown tuto Structure -->
                <ul id="dropdownTips" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="quest.php">Quêtes</a></li>
                    <li><a class="waves-effect waves-dark" href="raid.php">Raids</a></li>
                    <li><a class="waves-effect waves-dark" href="stuff.php">Stuffs</a></li>
                    <li><a class="waves-effect waves-dark" href="farm.php">Farm</a></li>
                </ul>
                <!-- Dropdown contribution Structure -->
                <ul id="dropdownContrib" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="video.php">Vidéos</a></li>
                    <li><a class="waves-effect waves-dark" href="streaming.php">Streaming</a></li>
                    <li><a class="waves-effect waves-dark" href="artwork.php">Artworks</a></li>
                </ul>
                <!-- Dropdown forum Structure -->
                <ul id="dropdownForum" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="forum.php">catégories</a></li>
                    <li><a class="waves-effect waves-dark" href="tchat.php">Tchat</a></li>
                </ul>
                <!-- dropdown summary structure -->
                <ul id="dropdownSummary" class="dropdown-content">
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#destiny">Destiny</a></li>
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#darkBelow">DLC 1 : Les Ténèbres Souterraines</a></li>
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#houseWolves">DLC 2 : La Maison des Loups</a></li>
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#takenKing">DLC 3 : Le Roi des Corrompus</a></li>
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#ironLords">DLC 4 : Les Seigneurs de Fer</a></li>
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#destiny2">Destiny 2</a></li>
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#osiris">DLC 1 : La Malédiction d'Osiris</a></li>
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#warmind">DLC 2 : L'Esprit Tutélaire</a></li>
                    <li><a class="js-scrollTo waves-effect waves-dark" href="#forsaken">DLC 3 : Renégat</a></li>
                </ul>
                <!-- dropdown goodies structure -->
                <ul id="dropdownGoodies" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="goodies.php#cat1">Catégorie 1</a></li>
                    <li><a class="waves-effect waves-dark" href="goodies.php#cat2">Catégorie 2</a></li>
                    <li><a class="waves-effect waves-dark" href="goodies.php#cat3">Catégorie 3</a></li>               
                </ul>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img src="../assets/img/logo.png" title="Logo Destiny" alt="Représentation du logo Destiny"/></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
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
                        <!-- <li><a href="#">Tchat</a></li> -->
                        <li><a href="#">"profil pic"</a></li>
                        <li><a class="" href="goodies.php">Goodies</a></li>
                        <li><a class="waves-effect waves-dark btn modal-trigger" href="#login">Connexion</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#destiny">Destiny</a></li>
                        <li><a href="#destiny2">Destiny 2</a></li>
                    </ul>
                </div>
                <div class="nav-content">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a href="#titan">Titan</a></li>                            
                        <li class="tab"><a href="#warlock">Arcaniste</a></li>
                        <li class="tab"><a href="#hunter">Chassseur</a></li>
                        <li class="tab"><a href="#pnj">Autres protagonistes</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- login modal -->
        <div id="login" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Connexion</h4>
                <!-- formulaire de connexion -->
                <div class="row" id="#">
                    <form action="#" method="POST" class="col s12 m12 l12">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <input id="gamertag" type="text" class="validate">
                                <label for="gamertag">Gamertag</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Mot de passe</label>
                            </div>
                        </div>
                        <div class="row" id="#">
                            <div class="col s12 m12 l12" id="#">
                                <input type="checkbox" id="remind" />
                                <label for="remind">Se souvenir de moi</label>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Valider</a>
            </div>
        </div>
        <div class="" id="titan">
            <div class="container-fluid">
                <div id="titan" class="row section scrollspy">
                    <div class="col s12 m12 l12">
                        <div class="parallax-container" id="destiny">
                            <div class="picture parallax"><img src="../assets/img/titan.jpg" title="titan" alt="image d'un titan" /></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l12" id="#">
                        <h2>Titan</h2>
                        <div class="content" id="#">
                            <p>
                                <strong>Les Titans</strong> sont des <strong>Gardiens</strong> valeureux, dotés d'une grande puissance et équipés d'une épaisse armure. Ce sont eux qui ont bati le <strong>mur de protection entourant la Cité</strong>
                                et qui le protège. Le <strong>Titan</strong> est un gardien de la Paix, jurant de protéger les plus faibles ainsi que ceux se trouvant derrière lui. En redoutable alliés, ils se sont forgés dans le dévouement, la force et le 
                                sacrifice.
                            </p>
                            <p>Les titans possèdent 3 pouvoirs (<strong>doctrines</strong>) pour accomplir leur tache de protection, 2 pour l'attaque et une pour la défense : </p>
                            <ul>
                                <li>Assaillant.</li>
                                <li>Brise-soleil.</li>
                                <li>Sentinelle (anciennement Défenseur).</li>
                            </ul>
                        </div>
                        <h3>Doctrine 1 : Assaillant</h3>
                        <div class="row valign-wrapper" id="#">
                            <div class="col s12 m12 l6" id="#">
                                <p>            
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                                    Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                                    Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                                    Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                                    Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                                </p>                            
                            </div>
                            <div class="col s12 m12 l6" id="#">
                                <img  class="weaponPic" src="../assets/img/striker.jpg" title="titan assaillant" alt="image représentant l'arbre de doctrine du titan assaillant" />
                            </div>
                        </div>
                        <h3>Doctrine 2 : Brise-soleil</h3>
                        <div class="row valign-wrapper" id="#">
                            <div class="col s12 m12 l6" id="#">
                                <img  class="weaponPic" src="../assets/img/sunbreaker.jpg" title="titan brise-soleil" alt="image représentant l'arbre de doctrine du titan brise-soleil" />
                            </div>
                            <div class="col s12 m12 l6" id="#">
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
                    <h3>Doctrine 3 : Sentinelle</h3>
                    <div class="row valign-wrapper" id="#">
                        <div class="col s12 m12 l6" id="#">
                            <p>            
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                                Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                                Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                                Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                                Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                            </p>                            
                        </div>
                        <div class="col s12 m12 l6" id="#">
                            <img  class="weaponPic" src="../assets/img/sentinel.png" title="titan sentinel" alt="image représentant l'arbre de doctrine du titan sentinelle" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="" id="warlcok">
            <div class="container-fluid">
                <div id="warlock" class="row section scrollspy">
                    <div class="col s12 m12 l12">
                        <div class="parallax-container" id="destiny">
                            <div class="picture parallax"><img src="../assets/img/warlock.jpg" title="arcaniste" alt="image d'un arcaniste" /></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l12" id="#">
                        <h2>Arcaniste</h2>
                        <div class="content" id="#">
                            <p>
                                <strong>Les Titans</strong> sont des <strong>Gardiens</strong> valeureux, dotés d'une grande puissance et équipés d'une épaisse armure. Ce sont eux qui ont bati le <strong>mur de protection entourant la Cité</strong>
                                et qui le protège. Le <strong>Titan</strong> est un gardien de la Paix, jurant de protéger les plus faibles ainsi que ceux se trouvant derrière lui. En redoutable alliés, ils se sont forgés dans le dévouement, la force et le 
                                sacrifice.
                            </p>
                            <p>Les titans possèdent 3 pouvoirs (<strong>doctrines</strong>) pour accomplir leur tache de protection, 2 pour l'attaque et une pour la défense : </p>
                            <ul>
                                <li>Assaillant.</li>
                                <li>Brise-soleil.</li>
                                <li>Sentinelle (anciennement Défenseur).</li>
                            </ul>
                        </div>
                        <h3>Doctrine 1 : Rîte de l'orage</h3>
                        <div class="row valign-wrapper" id="#">
                            <div class="col s12 m12 l6" id="#">
                                <p>            
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                                    Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                                    Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                                    Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                                    Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                                </p>                            
                            </div>
                            <div class="col s12 m12 l6" id="#">
                                <img  class="weaponPic" src="../assets/img/thunder.jpg" title="arcaniste rîte de l'orage" alt="image représentant l'arbre de doctrine de l'arcaniste en rite de l'orage" />
                            </div>
                        </div>
                        <h3>Doctrine 2 : Lame de l'Aube</h3>
                        <div class="row valign-wrapper" id="#">
                            <div class="col s12 m12 l6" id="#">
                                <img  class="weaponPic" src="../assets/img/dawnblade.png" title="arcaniste lame de l'aube" alt="image représentant l'arbre de doctrine de l'arcaniste en lame de l'aube" />
                            </div>
                            <div class="col s12 m12 l6" id="#">
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
                    <h3>Doctrine 3 : Voie Abyssale</h3>
                    <div class="row valign-wrapper" id="#">
                        <div class="col s12 m12 l6" id="#">
                            <p>            
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                                Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                                Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                                Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                                Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                            </p>                            
                        </div>
                        <div class="col s12 m12 l6" id="#">
                            <img  class="weaponPic" src="../assets/img/voidWalker.png" title="arcaniste voie abyssale" alt="image représentant l'arbre de doctrine de l'arcaniste en voie abyssale" />
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="" id="hunter">
            <div class="container-fluid">
                <div id="hunter" class="row section scrollspy">
                    <div class="col s12 m12 l12">
                        <div class="parallax-container" id="destiny">
                            <div class="picture parallax"><img src="../assets/img/hunter.jpg" title="chasseur" alt="image d'un chasseur" /></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l12" id="#">
                        <h2>Chasseur</h2>
                        <div class="content" id="#">
                            <p>
                                <strong>Les Titans</strong> sont des <strong>Gardiens</strong> valeureux, dotés d'une grande puissance et équipés d'une épaisse armure. Ce sont eux qui ont bati le <strong>mur de protection entourant la Cité</strong>
                                et qui le protège. Le <strong>Titan</strong> est un gardien de la Paix, jurant de protéger les plus faibles ainsi que ceux se trouvant derrière lui. En redoutable alliés, ils se sont forgés dans le dévouement, la force et le 
                                sacrifice.
                            </p>
                            <p>Les titans possèdent 3 pouvoirs (<strong>doctrines</strong>) pour accomplir leur tache de protection, 2 pour l'attaque et une pour la défense : </p>
                            <ul>
                                <li>Assaillant.</li>
                                <li>Brise-soleil.</li>
                                <li>Sentinelle (anciennement Défenseur).</li>
                            </ul>
                        </div>
                        <h3>Doctrine 1 : Pistolero</h3>
                        <div class="row valign-wrapper" id="#">
                            <div class="col s12 m12 l6" id="#">
                                <p>            
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                                    Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                                    Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                                    Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                                    Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                                </p>                            
                            </div>
                            <div class="col s12 m12 l6" id="#">
                                <img  class="weaponPic" src="../assets/img/pistolero.jpg" title="chasseur pistolero" alt="image représentant l'arbre de doctrine du chasseur pistolero" />
                            </div>
                        </div>
                        <h3>Doctrine 2 : Grâce Survoltée</h3>
                        <div class="row valign-wrapper" id="#">
                            <div class="col s12 m12 l6" id="#">
                                <img  class="weaponPic" src="../assets/img/arcstrider.jpg" title="chasseur en grâce survoltéé" alt="image représentant l'arbre de doctrine du chasseur grâce survoltée" />
                            </div>
                            <div class="col s12 m12 l6" id="#">
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
                    <h3>Doctrine 3 : Ronde de Nuit</h3>
                    <div class="row valign-wrapper" id="#">
                        <div class="col s12 m12 l6" id="#">
                            <p>            
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                                Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                                Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                                Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                                Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                            </p>                            
                        </div>
                        <div class="col s12 m12 l6" id="#">
                            <img  class="weaponPic" src="../assets/img/nightwatch.jpg" title="chasseur ronde de nuuit" alt="image représentant l'arbre de doctrine du chasseur ronde de nuit" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="" id="pnj">
        </div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../assets/js/materialize.min.js"></script>
        <script src="../assets/js/script2.js"></script>
    </body>
</html>
