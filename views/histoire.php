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
                    <li><a class="waves-effect waves-dark" href="Histoire.php">Histoire</a></li>
                    <li><a class="waves-effect waves-dark" href="guardians.php">Gardiens et protagonistes</a></li>
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
                
                <!-- dropdown goodies structure -->
                <ul id="dropdownGoodies" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="goodies.php#cat1">Catégorie 1</a></li>
                    <li><a class="waves-effect waves-dark" href="goodies.php#cat2">Catégorie 2</a></li>
                    <li><a class="waves-effect waves-dark" href="goodies.php#cat3">Catégorie 3</a></li>               
                </ul>
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo"><img src="../assets/img/logo.png" title="Logo Destiny" alt="Représentation du logo Destiny"/></a>
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
                         <li class="tab"><a href="#story">Histoire</a></li>                            
                        <li class="tab"><a href="#referencies">Références culturelles</a></li>
                    </ul>
                </div>
                <!-- onglets de navigation de la page en cours -->
                <div class="nav-content">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a href="#story">Histoire</a></li>                            
                        <li class="tab"><a href="#referencies">Références culturelles</a></li>
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
                        <div class="row">
                            <div class="col s12 m12 l12">
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
        <!-- contenu hitoire -->
        <div id="story">
            <div class="parallax-container">
                <div class="parallax"> 
                    <img src="../assets/img/destiny.jpg" title="Le Voyageur" alt="Attérissage du Voyageur sur Terre" />
                </div>
            </div>
            <div class="container">
                <div class="row section scrollspy">
                    <div class="col s12 m12 l12">
                        <h1><strong>Histoire de Destiny</strong></h1>
                        <h2><strong>Avant l'Age d'Or</strong></h2>
                        <div class="content">
                            <p>
                                Bien des siècles avant les évènements de <strong>Destiny</strong>, l'humanité subissait une période de transition difficile. L'amélioration globale des conditions de vie ont amené une 
                                augmentation de l'espérance de vie, de la population sur Terre et une baisse rapide des ressources disponibles de ce fait. Les scientifiques cherchent des solutions, mais les moyens technologiques
                                ne sont pas suffisament avancés, la colonisation de l'espace est encore difficile : les moyens de transports sont encore trop primitifs pour coloniser une autre planète, qui sont quant à elles trop 
                                éloignées pour les potentiels candidates à la colonisation.
                            </p> 
                        </div>
                        <h2><strong>L'Age d'Or</strong></h2>
                        <div class="content">
                            <p>
                                Malgrès l'avenir plutôt sombre qui se dessine pour l'humanité, les choses vont changer subitement. Détecté par les innombrables satellites que l'Homme à lancer durant la dernière période
                                de son évolution, un corps cléeste gigantesque fait son entrée dans le <strong>Système Solaire</strong>. Il s'arrète d'abord aux alentours de <strong>Mercure</strong>, puis <strong>Vénus</strong>, les 
                                <strong>lunes de Jupiter</strong>. Lorsque la masse s'arrête sur <strong>Mars</strong>, les nations humaines décident de s'allier, et de lancer la mission <strong>Ares One</strong>,
                                qui sera chargée de voyager jusque <strong>Mars</strong> et de découvrir ce mystérieux objet sur la planête rouge. Comme en 1969 pour les premiers pas de l-homme sur la Lune, l'évenement
                                est suivi par la Terre entière, et les images des premiers pas de l'Homme sur <strong>Mars</strong> sont retransmis dans le monde entier. Lorsque les caméras sont éteintes les quelques 
                                astronautes chargés de la mission partent à la recherche de l'anomalie. Ainsi est découvert ce que l'humanité appelera plus tard <strong>le Voyageur</strong> : 
                            </p>                        
                        </div>
                        <div class="responsive-video">                        
                            <iframe class="videoDestiny" src="https://www.youtube.com/embed/Ny7XhR4URZE?rel=0" frameborder="0" allowfullscreen></iframe>                  
                        </div>
                        <div class="content">
                            <p>
                                L'Homme n'arrrive pas encore à expliquer le sens de l'existence de cette immense sphère blanche, ni le pourquoi de cette visite. Une chose est sûr, <strong>le Voyageur</strong>
                                profite de sa venue dans le <strong>Système Solaire</strong> pour pour faire part de ses pouvoirs à l'humanité : ses passages sur <strong>Mercure, Vénus, Jupiter, Mars</strong>
                                n'ont pas été fait par haserd. Ces arrêts sur ces planètes lui ont permis de lancer une vaste opération de terraformation, permettant ainsi à l'Homme d'étendre sa civilisation.
                                <strong>Le Voyageur</strong> finit par se poser sur <strong>Terre</strong>. Ayant une connaissance infinie sur une infinité de sujets, il fait profiter de son savoir aux êtres
                                humains, qui s'élèvent alors bien plus haut et bien plus rapidement que ce qu'ils auraient pus espérer. Le voyage dans l'espace sur de plus longues distances va enfin être posible, rendant
                                la colonisation des proches planêtes enfin possible, la science va des bonds prodigieux, l'espérance de vie est multiplier par 3.  
                            </p>
                            <p>
                                Des colonies commencent par s'installer sur <strong>le Lune</strong>, puis sur <strong>Mars, Vénus...</strong> Sur <strong>Vénus</strong>, les scientifiques font des découvertes de plus en plus 
                                incroyables: <strong>le collectif d'Ishtar</strong> découvre les premières ruines <strong>Vexs</strong>. Sur <strong>Mars</strong>, Un certain <strong>Clovis Bray</strong> installe
                                un centre de recherche, entrainant la création d'une ville dans la foulé. Avec l'aide de ses scientifiques, il va révolutionner les technologies de l'époque, en inventant notamment 
                                l'<strong>ARIA</strong> (une nano-technologie améliorant la condition de l'humanité) et divers systèmes d'armement révolutionnaires.
                            </p>
                            <p>
                                Sur Terre, les scentifiques crééent les premiers <strong>Esprits Tutélaires</strong>. Ces I.A extrèmement développées sont destinées à la defense du peuple de la <strong>Terre</strong>.
                                Elles ont à leur disposition un arsenal d'équipement de pointe imaginé dans la foulé, notamment un nouveau type de satellite : les <strong>Warsats</strong>. Ces satellites de guerre forment
                                autour des planêtes équiper un vaste réseau de défense et de communication. Au centre de chaque réseau se trouve un <strong>esprit tutélaire</strong>.
                                Sur <strong>Terre</strong>, l'intelligence artificielle s'occupant de la défense se nomme <strong>Raspoutine</strong>, <strong>Charlemagne</strong> est en charge de <strong>Mars</strong>.
                                Dans le même sont conçus les premiers <strong>Exos</strong>. Ces machines anthropomorphiques soont dotées d'intelligence, de conscience, et servent dans un premier temps à protéger les humains
                                aussi bien sur <strong>Terre</strong> que dans les colonies.
                            </p>
                            <p>
                                Alors que l'humanité est à son apogée, les hommes ne font pas que de bonnes découverte : alors qu'il venait de capturer un spécimen <strong>Vexs</strong> vivant, 
                                <strong>l'Esprit Tutélaire de Venus</strong> est contraint de réagir face qu découverte de l'Homme. Sur la <strong>Lune</strong>, des scientifiques creusent de nombreux tunnels et tombent sur 
                                une forme de vie totalement inconnue qu'ils appelleront simplement <strong>"vers"</strong>. Ces vers amèneront les colons à faire la rencontre de la <strong>Ruche</strong>, rencontre
                                qui leur fut fatal.
                            </p>
                        </div> 
                        <h2><strong>La Chute</strong></h2>
                        <div class="content">
                            <p>
                                Tout allaient malgrès tous pour le mieux pour la civilisation humaine, rien ne semblait la stopper. C'est alors que <strong>Raspoutine</strong> détecte des signaux anormaux, 
                                qui se raproche de plus en plus du <strong>Système Solaire</strong>. Après analyses, l'I.A en déduit que l'anomalie est dotée d'intelligence, et qu'elle se raproche intentionnellement
                                de notre système.                            
                            </p>
                            <p>
                                Après d'autres analyses, <strong>Raspoutine</strong> en déduit que cette "chose" représente une menace pour l'humanité. Il prend le controle du systême de défense interplanétaire et s'emploie à 
                                trouver une solution. Alors que l'entité ne cesse de progresser, <strong>Raspoutine</strong> reste sans solution face à ce problème. Dépassant alors sa simple conditions d'I.A, il comprend
                                que toutes ses tentives seront infructueuses pour repousser cette menace. Dans le plus grand des secrets (sans que ni l'Homme, ni les autres <strong>Esprits Tutélaires</strong> ne soient au courant)
                                <strong>Raspoutine se reprogramme de lui-même et change ses protocoles de sécurité</strong>. Son but est maitenant de survivre à la menace quoiqu'il arrive.
                            </p>
                            <p>
                                Son nouveau protocole se dessine alors en 2 parties : en cas de contact, <strong>Raspoutine</strong> se désactivera, ainsi que toutes les défenses humaines; la seconde partie vise directement
                                le voyageur. si l'humanité est menacée d'extinction, le <strong>Voyageur</strong> peut être tenter de quitter <strong>le Terre</strong>. Son plan est alors de braquer toutes ses armes sur 
                                <strong>le Voyageur</strong> afin de l'obligé à rester et à protéger l'espèce humaine.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contenu reference culturelle -->
        <div id="referencies">
            <div class="container">
                <div class="row section scrollspy">
                    <div class="col s12 m12 l12">
                        <h1><strong>Références culturelles</strong></h1>
                        <h2>lorem ipsum</h2>
                        <p>            
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et pretium nisi, quis consectetur felis. Pellentesque feugiat congue facilisis. In hac habitasse platea dictumst. Praesent convallis eros diam, sit amet pretium odio interdum vel. Sed varius rutrum neque et tristique. Aliquam erat volutpat. Phasellus enim ligula, porta vitae neque euismod, interdum lacinia nibh. Donec id quam eros. Fusce molestie enim nec ante bibendum, et fermentum erat hendrerit.
                            Vestibulum ultrices justo eu turpis accumsan vehicula. Morbi posuere dictum dui non sagittis. Proin luctus tincidunt enim, eu malesuada odio eleifend vel. Phasellus luctus nisi sit amet dignissim volutpat. Praesent sit amet imperdiet sem. Vivamus quis nunc quis velit suscipit ultricies a vel orci. Praesent suscipit imperdiet purus, a euismod tellus vehicula a. Ut mi massa, luctus porttitor libero eget, convallis scelerisque mi. Cras cursus egestas facilisis. Nam luctus felis sit amet diam sodales, sed accumsan nisl pharetra.
                            Aliquam ornare lacus sit amet eros sodales, eu blandit nisi efficitur. Aenean quis rhoncus nisi. Ut at iaculis ante. Fusce nec ipsum porta, molestie libero eu, ullamcorper erat. Nulla laoreet malesuada convallis. Morbi suscipit sit amet sapien vel tincidunt. Ut faucibus, nulla sed consequat varius, purus nunc ullamcorper elit, non interdum metus arcu eu erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur pretium, lacus mattis egestas feugiat, sem urna posuere tellus, pulvinar bibendum dolor libero eu lectus. Nulla quis sem nec purus pharetra ullamcorper eu a nulla. Maecenas vel eros orci. Ut vulputate lorem nunc, non lacinia dui dignissim a. Praesent ut nulla eget ante rhoncus commodo. Phasellus quis nibh non purus iaculis commodo. Etiam quam tortor, faucibus ac ullamcorper in, lobortis sit amet felis.
                            Proin at tempor leo. Nunc venenatis ultrices elit, eu imperdiet dolor rhoncus sit amet. Cras ut feugiat augue. Fusce imperdiet ante arcu, eget gravida augue bibendum ac. Vivamus maximus tincidunt mattis. Maecenas gravida accumsan viverra. Sed sit amet dignissim orci, in lobortis erat. Aliquam erat volutpat. Pellentesque viverra aliquet nulla, ac mollis mi ullamcorper vitae. Pellentesque placerat porta sem sit amet viverra. Donec sit amet nunc sollicitudin, placerat mauris in, efficitur urna. Curabitur tempus ut nisi sit amet consectetur. Nulla pharetra purus vel lacus suscipit suscipit. Phasellus fermentum rutrum justo a consectetur. Nam vel odio eu dui tempor fermentum in nec lorem. Pellentesque fringilla lacus pellentesque mauris luctus, sed vehicula est luctus.
                            Proin tortor mi, consequat nec ipsum in, tincidunt imperdiet orci. Phasellus at metus pulvinar sapien malesuada feugiat. Pellentesque mollis mi id pretium gravida. Suspendisse consequat nibh velit, ut maximus nibh hendrerit sed. Curabitur nec aliquet turpis, non lacinia sem. Mauris id iaculis orci, vel porta neque. Nulla eu efficitur dolor. Sed pulvinar, felis non volutpat volutpat, dui sem eleifend ligula, nec volutpat turpis diam at metus. Pellentesque euismod est ac ligula fermentum porttitor. Nunc massa augue, ullamcorper eu varius eu, semper sit amet enim. Phasellus tincidunt, tellus quis fermentum sodales, ante velit dapibus leo, et pharetra magna ex ut massa. Donec at purus sit amet ex bibendum rhoncus. Suspendisse luctus, sapien vel viverra suscipit, ante lacus bibendum turpis, in scelerisque augue tellus id sem. Sed bibendum condimentum blandit. Morbi viverra lectus turpis, eu volutpat tortor tincidunt nec. Curabitur molestie, risus id dictum pulvinar, risus purus iaculis odio, a faucibus nulla nunc nec ipsum. 
                        </p>
                        <h2>lorem ipsum</h2>
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
