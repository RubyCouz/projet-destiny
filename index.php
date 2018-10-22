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
        <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="nav-extended">
                <!-- Dropdown lore Structure -->
                <ul id="dropdownLore" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="views/histoire.php">Histoire</a></li>
                    <li><a class="waves-effect waves-dark" href="views/guardians.php">Gardiens et protagonistes</a></li>
                    <li><a class="waves-effect waves-dark" href="views/ennemies.php">Factions ennemies</a></li>
                    <li><a class="waves-effect waves-dark" href="views/factions.php">Factions et marchands</a></li>
                </ul>
                <!-- Dropdown tuto Structure -->
                <ul id="dropdownTips" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="views/quest.php">Quêtes</a></li>
                    <li><a class="waves-effect waves-dark" href="views/raid.php">Raids</a></li>
                    <li><a class="waves-effect waves-dark" href="views/stuff.php">Stuffs</a></li>
                    <li><a class="waves-effect waves-dark" href="views/farm.php">Farm</a></li>
                </ul>
                <!-- Dropdown contribution Structure -->
                <ul id="dropdownContrib" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="views/video.php">Vidéos</a></li>
                    <li><a class="waves-effect waves-dark" href="views/streaming.php">Streaming</a></li>
                    <li><a class="waves-effect waves-dark" href="views/artwork.php">Artworks</a></li>
                </ul>
                <!-- Dropdown forum Structure -->
                <ul id="dropdownForum" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="views/forum.php">catégories</a></li>
                    <li><a class="waves-effect waves-dark" href="views/tchat.php">Tchat</a></li>
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
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img src="assets/img/logo.png" title="Logo Destiny" alt="Représentation du logo Destiny"/></a>
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
                        <!-- panier Modal Trigger -->
                        <li><a class="modal-trigger" href="#cart"><i class="material-icons "> shopping_cart</i></a></li>
                        <li><a class="waves-effect waves-dark btn modal-trigger" href="#login">Connexion</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#destiny">Destiny</a></li>
                        <li><a href="#destiny2">Destiny 2</a></li>
                    </ul>
                </div>
                <div class="nav-content">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a href="#destiny">Destiny</a></li>                            
                        <li class="tab"><a href="#destiny2">Destiny 2</a></li>
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
                <div class="row">
                    <div class="col s12 m12 l12">
                        <a href="views/subscribe.php" title="Inscrivez-vous!!">Pas encore membre? Inscrivez-vous!!</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Se connecter</a>
            </div>
        </div>
        <!-- Panier Modal Structure -->
        <div id="cart" class="modal">
            <div class="modal-content">
                <h4>Votre panier</h4>
                <p>Votre panier est vide.</p>
            </div>
            <div class="modal-footer">
                <form action="#" method="POST">
                    <input type="submit" class="waves-effect waves-dark btn" value="Valider la commande" />
                </form>
            </div>
        </div>
        <div id="destiny">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/accueil.jpg" title="Image accueil" alt="Image représentant Ikora au premier plan et 3 gardiens en arrière plan"/>
                </div>
            </div>
            <div class="content">
                <p>
                    Sorti le 9 Septembre  2014 en tant qu'exclusivité Sony sur Playstation 3, Playstation 4, XBOX360 et XBOX ONE Destiny est un jeu de type <strong>F.P.S</strong> (First Personn Shooter) avec une mécanique de <strong>M.M.O.R.P.G</strong> (Massive Multiplayer Online Role Playing Game). Vous êtes donc directement
                    dans la peau de votre personnage et avez la possibilité de jouer en ligne (c'est même plutôt recommander pour profiter pleinement du jeu et progresser correctement). Vous avez 
                    à votre disposition 3 classes de <strong>Gardiens</strong> (votre héros) dont vous pourrez évoluer les capacités au cour de votre périple. Plusieurs extension viennent s'y ajouter afin 
                    de prolonger l'histoire et la durée de vie du jeu en augmentant le palier de puissance maximale de votre avatar.
                </p>
                <h2><strong>Destiny</strong></h2>
                <p>L'histoire de Destiny se déroule dans un univers post-apocalyptique, au sein de notre système solaire.</p>
                <p>
                    Il y 700 ans de cele, une <strong>Gigantesque sphère mysterieuse</strong> fut découverte sur Mars. <strong>Le voyageur</strong> (ainsi appelé par les Humains lorsque'ils comprendront patiellement
                    son origine) a transmettra tout son savoir à l'humanité, ce qui marquera le début de <strong>l'Age d'Or</strong>. Il terraforma Mars, Mercure et Venus, permettant ainsi leur colonisation 
                    par les Hommes. Grâce à la technologie du représentant de <strong>la Lumière</strong>, les être humains vécurent 3 fois plus longtemps et purent voyager en dehors des limites de notre système solaire. 
                </p>
                <p>
                    Il fût toutefois rattrapé par son antagoniste, <strong>les Ténèbres</strong>, qui se jettèrent sur les protégés du <strong>Voyageur</strong>. Ce fût le début de <strong>la Chute</strong>, la fin de
                    <strong>l'Age d'Or</strong> de l'Humanité.
                </p>
                <p>
                    Au bord de l'extinction, les humains construisirent une <strong>Cité</strong>, à l'ombre du <strong>Voyageur</strong>. <strong>Les gardiens</strong> de <strong>la Tour</strong>, ultimes défenseur de <strong>Lumière</strong>, 
                    crurent qu'il pourraient contenir <strong>les Ténèbres</strong> (représentées ici par différentes races extra-terrestres belliqueuses) et repousser leur progression. C'était sans compter
                    leur force et leur nombre grandissant. 
                </p>
                <p>
                    <strong>Un Spectre</strong> (sorte d'intelligence artificiel, créée par le <strong>Voyageur</strong> avant son sommeil,  contenu dans un petit robot flottant en forme de cube) trouva en vous le courage, 
                    la volonté et la capacité à affronté <strong>les Ténèbres</strong>.
                </p>
                <p>Ainsi commence votre périple!</p>
                <p>Vous commencer votre quête par l'exploration du <strong>Cosmodrome</strong> (ancienne base de lancement russe, datant de<strong>l'Age d'Or</strong>), enquetant ainsi sur la provenance des menaces
                    peusant sur la race humaine. Vous découvrez ainsi un première races extra-terrestres incarnant <strong>les ténèbres</strong>: <strong>les Déchus</strong>.
                </p>
                <p>
                    Votre aventure se poursuit sur <strong>la Lune</strong>, où vous ferez la connaissance d'une deuxième race ennemie (<strong>la Ruche</strong>), puis sur Mars, planète reprise à l'Homme par 
                    <strong>les Cabals</strong>. Vous y trouverez également un autre race extra-terrestre: <strong>les Vexs</strong>.
                </p>
                <p>
                    Durant votre périple, vous apprenez l'existence du <strong>Coeur Noir</strong>, une entité appartenant aux <strong>ténèbre</strong> apparut dans notre système en oppposition à l'arrivée de
                    <strong>la Lumière du Voyageur</strong>. Vous devrez trouvez sa localisation et le détruire afin de ralentir la progression <strong>des Ténèbres</strong> et sauver <strong>la Cité</strong>.
                </p>
            </div>
            <!-- dlc1 les ténêbres souterraines -->

            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/thedarkbelow.jpg" title="Les Ténèbres Souterraines" alt="Image montrant 3 gardiens sur dans le gouffre des enfers, Cropta en fondu en arrière plan"/>
                </div>
            </div>
            <div class="content">
                <h2><strong>D.L.C 1 : Les Ténèbres souterraines</strong></h2>
                <p>Sorti le 9 décembre 2014, ce premier D.L.C nous en apprend plus sur <strong>La Ruche</strong></p>
                <p>
                    Alors que le <strong>Jardin Noir</strong> est détruit, l'aube d'un nouvel <strong>Age d'Or</strong> semble possible. Ce moment de calme estvite menacé par l'arrivée d'<strong>Eris Morn</strong> à la tour.
                    Ancienne gardienne, Eris a mené un assaut contre <strong>Cropta</strong> dans <strong>le Gouffre des Enfers</strong> sur la Lune, accompagnée de 5 autres gardiens. Ils furent vaincus, et 
                    <strong>Eris</strong> fut la seule survivante. Elle fut contrainte de se fondre parmis <strong>la Ruche</strong> pendant des années avant de pouvoir retourner sur Terre.
                </p>
                <p>
                    Elle nous informe de l'invasion de <strong>la Ruche</strong>, avec à sa tête, <strong>le prince des Ténèbres</strong> et <strong>fils d'Oryx</strong>, <strong>Cropta</strong>.
                </p>
                <p>
                    Vous aurez pour tache de décimer les rangs de <strong>la Ruche</strong> qui ont envahi <strong>le Cosmodrome</strong> et retourner sur la Lune pour détruire le cristal retennant <strong>l'âme de Cropta</strong>.
                    Votre ultime mission (sous forme du raid : <strong>La Chute de Cropta")</strong>sera de retourner au <strong>Gouffre des Enfers</strong> avec 5 autres gardiens pour vous débarrasser de <strong>Cropta</strong> dans son <strong>plan ascendant</strong>, mettant fin
                    à l'invasion de <strong>la Ruche</strong>.
                </p>
            </div>
            <!-- dlc2 la maison des loups -->
            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/housewolves.jpg" title="La Maison des Loups" alt="Représentation de la reine du Récif, Mara Sov et de son frère, Uldren Sov"/>
                </div>
            </div>
            <div class="content">
                <h2><strong>D.L.C 2 : La Maison des Loups</strong></h2>
                <p>
                    Le deuxième D.L.C de <strong>Destiny</strong> est commercialisé le 19 mai 2015. L'histoire est cette fois centré sur <strong>les déchus</strong>, ennemis les plus récurrents du jeu.
                    Cette extension apporte son lot de nouveauté :
                </p>
                <ul>
                    <li>De nouvelles missions et quêtes.</li>
                    <li>Un nouvel espace social : <strong>le Récif.</strong></li>
                    <li>Une augmentation du niveau du joueur et du niveau des amres et armures.</li>
                    <li>Un nouvel assaut.</li>
                    <li>Un nouveau mode de jeux PVE : <strong>la Prison des Vétérans</strong>.</li>
                    <li>Un nouveau mode de jeu PVP compétitif : <strong>le Jugement d'Osiris</strong>.</li>
                </ul>
                <p>Les déchus sont divisés en plusieurs "castes" appelées "Maison". On y retrouve : </p>
                <ul>
                    <li><strong>la Maison des Exilés.</strong></li>
                    <li><strong>la Maison des Rois.</strong></li>
                    <li><strong>la Maison des Diables.</strong></li>
                    <li><strong>la Maison de l'Hiver.</strong></li>
                    <li><strong>la Maison des Loups.</strong></li>            
                </ul>
                <p>
                    Cette dernière, défaites par les éveillés du <strong>Récif</strong>, prête allégeance à la reine du Récif <strong>Mara Sov</strong>. Jusque lors fidèles à la Reine, ils décident de la trahir suite à l'évasion
                    de <strong>Skolas</strong>, l'ancien <strong>Kall de la Maison des Loups</strong>.
                </p>
                <p>
                    Convaincu d'être le <strong>Kall de tout les Kalls</strong>, <strong>Skollas</strong> tente de réunir toute les maisons Déchus pour que son peuple retrouve sa gloire passée. 
                    Malgrés les griefs que les éveillés du <strong>Récif</strong> peuvent avoir à l'encontre des <strong>Gardiens</strong>, <strong>la Reine</strong> fait appelle à votre <strong>Lumière</strong> pour l'aider à régler
                    ce conflit et capturer <strong>Skolas</strong>.
                    Vous devrez contrecarrer les plans de celui-ci, alors qu'il tente de s'mparer de la technologie <strong>Vex</strong> pour arriver à ses fins.
                </p>
                <p>
                    Une fois capturé et incarcéré dans la <strong>Prison des Vétérans</strong>, vous pourrez accepter son défis, l'affronter à mort et récupérer le trésor tant convoité des éveillés.
                </p>
            </div>
            <!-- dlc 3 le roi des corrompu -->
            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/thetakenking.jpg" title="Le Roi des Corrompus" alt="Représentation d'Oryx, le Roi des Corrompus" />
                </div>
            </div>
            <div class="content">
                <h2><strong>D.L.C. 3 : Le Roi des Corrompus</strong></h2>
                <p>
                    La sortie de ce troisième D.L.C le 15 Septembre 2015 clos la première année de <strong>Destiny</strong> et marque un tournant dans le fonctionnement du jeu. Le niveau du joueur est 
                    augmenter jusqu'au niveau 40, le niveau de <strong>Lumière</strong> devient indépendant du niveau du joueur et est plafonner à 320 puis 335 en Avril 2016. <strong>L'infusion</strong> est mis en place, 
                    permettant ainsi au gardien d'augmenter son niveau de lumière. Elle s'applique aux armes et armures. Cependant ce système rend les armes obtenues précédemment totalement obsolètes, 
                    car non infusable. Cette extension ajoute au jeu : 
                </p>
                <ul>
                    <li>De nouvelles missions et quêtes annexes (plus que sur les 2 précédents D.L.C).</li>
                    <li>3 nouveaux assauts, plus un exclusif à la Playstation.</li>
                    <li>Une nouvelle zones d'exploration, <strong>le Cuirasser</strong>, se situant sur les anneaux de Saturne.</li>
                    <li>Un nouveau raid : <strong>la Chute du Roi.</strong></li>
                    <li>Un sytème de defis sur ce raid (sorti un peu plus tard).</li>
                    <li>De micro-contenus sous forme d'évènements.</li>
                </ul>
                <p>
                    <strong>Le Coeur du Jardin Noir</strong> détruit. <strong>Cropta</strong> mort. <strong>Skollas</strong> abattu. Toutes menaces semblent enfin
                    écartées, et l'aube d'un <strong>nouvel Age d'Or</strong> semblent maintenant possible.
                </p>
                <p>
                    C'était sans compter sur l'arrivée dans le système solaire, aux abords des anneaux de <strong>Saturne</strong>, d'une armada de vaisseaux venus de l'autre bout de la galaxie.
                    Face à cette menace, les <strong>éveillés</strong> du <strong>Récif</strong> envoient toute leurs forces de combat avec à leurs têtes 
                    <strong>la Reine Mara Sov</strong> et son frère, le <strong>Prince Uldren</strong>.
                </p>
                <p>
                    Alors que la bataille semblait gagnée, la flotte du récif fut dévasté par un énorme rayon provenant du plus gros vaisseau 
                    ennemis, <strong>le Cuirassé</strong>, balayant et détruisant tout sur son passage.
                </p>
                <p>
                    Peu de temps avant sa mort, <strong>Cropta</strong> a réussi à envoyer un ultime appel à l'aide à son père. En tuant le Prince de la <strong>Ruche</strong>, 
                    le <strong>Gardien</strong> n'a fait que s'attirer les foudres d'<strong>Oryx</strong>, <strong>le Roi des Corrompus</strong>, qui réclame vengeance.
                    Après la bataille des anneaux de Saturne, <strong>Oryx</strong> commence sa vendetta en attaquant la base cabal de <strong>Phobos</strong>.
                    En enquétant sur place, le <strong>Gardien</strong> apprendra qu'<strong>Oryx</strong> ne tue pas ses ennemis, mais les <strong>"corrompt</strong>, ce qui
                    lui permet de grossir les rangs de son armée.
                </p>
                <p>
                    Avec l'aide de <strong>Cayde-6</strong>, et contre les ordres du <strong>Commandant Zavala</strong>, le <strong>Gardien</strong> devra trouver un moyen de
                    se rendre sur le <strong>cuirassé</strong>, enquéter sur les <strong>Corrompus</strong> et vaincre <strong>Oryx</strong> afin de préserver la paix dans la
                    galaxie.
                </p>
            </div>
            <!-- dlc 4 les eigneurs de fer -->
            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/lordsofiron.jpg" title="Les Seigneurs de Fer" alt="Image montrant le seigneur Saladin de dos, face à la brèche du mur de la Cité"/>
                </div>
            </div>
            <div class="content">
                <h2><strong>D.L.C 4 : Les Seigneurs de Fer</strong></h2>
                <p>Ce quatrième et dernier D.L.C apporte son petit lot de nouveautés :</p>
                <ul>
                    <li>Augmentation du niveau de lumière à 385, puis à 400 avec l'apparition du raid prestige.</li>
                    <li>Nouvelle zone de combat : <strong>La Contré Infestée</strong>, une zone attenante au <strong>Cosmodrome</strong>.</li>
                    <li>2 nouveaux assauts.</li>
                    <li>Un nouveaux raid : <strong>Fureur Mécanique</strong>.</li>
                    <li>Un nouvel espace social : <strong>Le Temple de Fer</strong>.</li>
                    <li>Nouvelles missions et étapes de quêtes</li>        
                </ul>
                <p>
                    On peut également noter le retour du <strong>Gjallahorn</strong>, puis plus tard une mise à jour élevant le niveau du <strong>Caveau de verre</strong>
                    et de <strong>la Chute de Cropta</strong>, et un ajout de défis, le tout augmentant ainsi la puissances des équipement looter (armes et armures)
                    et remettant au goût du jour un certain nombre d'armes et armures devenues obsolètes suite à l'apparition de l'infusion.
                </p>
                <p>
                    Tout est redevenu calme depuis la mort d'<strong>Oryx</strong>. La paix reigne dans le Système Solaire et les <strong>Gardiens</strong> n'effectuent 
                    plus que des missions de routine. Cependant, les <strong>spectres</strong> remarquent que les <strong>Déchus</strong> se mettent à piller les anciens laboratoires
                    de l'<strong>Age d'Or</strong> un peu partout dans le Système Solaire. Les <strong>Déchus</strong> étant connus pour leur goût du pillage, l'<strong>Avant-Garde</strong>
                    n'y prète pas grande attention. Leur agissement devient suspect lorsqu'ils se regroupent tous sur Terre, dans une zone maintenue à l'écart
                    depuis des siècle proche du <strong>Cosmodrome</strong>, avec leur butin.
                </p>
                <p>
                    Missioné par le Seigneur Saladin, ancien <strong>Seigneur de Fer</strong> et actuel émissaire de la <strong>Baniière de Fer</strong>, le <strong>Gardien</strong> se rend au <strong>Pic de Felwinter</strong>, puis dans la <strong>Contré infestée</strong>
                    pour enquéter sur le phénomène. Ce faisant, il fait la découverte de l'<strong>Aria</strong>, une ancienne technologie inventée pendant
                    <strong>l'Age d'Or</strong>. Elle est auto-réplicative et et auto-assembléé. L'<strong>Aria</strong> était censé aidé l'Humanité pendant l'<strong>Age d'or</strong>, 
                    mais utilisé à mauvais escient elle a été confinée dans un bunker de <strong>Raspoutine</strong> et oubliée.
                </p>
                <p>
                    En revenant au <strong>Cosmodrome</strong> pour s'emparer de l'<strong>Aria</strong>, les <strong>Déchus</strong> réveillent les défenses de
                    <strong>Raspoutine</strong>, s'emparent d'un ancien bunker de <strong>la Cité</strong> sur le mur et active les défenses grâce à l'<strong>Aria</strong>.
                    Grâce à cette technologie, ils deviennent plus résistant, plus agressif : ainsi apparait les <strong>Déchus symbiotiques</strong>. Le <strong>Gardien</strong> est donc envoyé sur place pour reprendre les 
                    défense du mur, et pénétrer dans le bunker de <strong>Raspoutine</strong> afin de détruire une bonne fois pour toute l'<strong>Aria</strong>, ainsi que toute 
                    la menace déchus.
                </p>
            </div>
        </div>

        <!-- destiny 2 -->
        <div id="destiny2">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/Destiny2.jpg" title="Destiny 2" alt="Destiny 2" />
                </div>
            </div>
            <div class="content">
                <h2>Destiny 2</h2>
                <p>
                    Successeur de <strong>Destiny</strong>, il sort le 6 Septembre 2017 sur Playstation 4 et Xbox One, et le 24 Octobre sur PC. Il reprend 
                    dans les grandes lignes le fonctionnement de son prédécesseur (infusion des équipements, assauts, raids, factions alliées et ennemis...) et apporte quelques
                    changement au niveau du gameplay (le jeu se veut plus dynamique, certaines armes telles que le fusil de précision ou le fusil à fusion passent en arme lourdes, 
                    Disparitions des perks aléatoires sur les armes, disparitions des perks spécifiques aux raids, apparition de mods d'arme et d'armure pour améliorer leurs statistiques).
                    Le <strong>Jugement d'Osiris</strong> (épreuve compétitive) disparait et fait place au <strong>Jugement des Neufs</strong>, passant dans le même temps
                    toutes activités P.V.P en 4 vs 4, au lieu 6 vs 6 ou 3vs3.                    
                </p>
                <p>
                    Ayant éliminé les menaces <strong>Dechus, Corrompus, Vex</strong>, la <strong>Cité</strong> entre dans une nouvelle de paix. Paix qui sera de courte
                    durée, puisqu'elle subira les assauts des hordes <strong>Cabals</strong>, menées par le Général <strong>Dominus Ghaul</strong>.
                    Celui-ci veut s'en prendre au <strong>Voyageur</strong> et la <strong>Cité</strong>, dans le but de s'emparer de la <strong>Lumière des Gardiens</strong> et 
                    de leurs pouvoirs. Prise au dépourvu, <strong>l'Avant-Garde</strong> a du mal à organiser ses défenses, et malgrès les efforts des <strong>commandants
                        de l'Avant-Garde et des Gardiens</strong>, la <strong>la Cité</strong> tombe aux mains des <strong>Cabals</strong>, le <strong>Voyageur</strong>
                    est capturé et les gardiens défaits, privés de leur <strong>Lumière</strong>.
                </p>
            </div> 
            <!--dlc 1 la malédiction d'osiris -->
            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/osiris.jpg" title="la Malédiction d'Osiris" alt="Image montrant Osiris et son spectre Sagira" />
                </div>
            </div>
            <div class="content">
                <h2><strong>D.L.C 1 : La Malédiction d'Osiris</strong></h2>
                <p>De nouveaux contenus avec l'arrivée de ce D.L.C :</p> 
                <ul>
                    <li>Une nouvelle planête à explorer.</li>
                    <li>De nouvelles quêtes et missions.</li>
                    <li>De nouvelles armes, armures et cosmétiques.</li>
                    <li>2 nouveaux assauts1.</li>
                    <li>Une nouvelle <strong>antre de raid</strong>.</li>
                    <li>Nouvel espace social : <strong>Le Phare</strong>.</li>
                    <li>Augmentation du niveau de puissance à 330 (335 avec les mods).</li>
                </ul>
                <p>Arcaniste éxilé, <strong>Osiris</strong> est notamment obsédé par les <strong>Vexs</strong>. Il les étudient de près en compagnie de son cercle de disciples. Seulement sa soif de savoir
                    a mis un puissant <strong>Vex</strong>, <strong>Panoptès</strong> (du grec "celui qui voit tous) <strong>l'Esprit Infini</strong>, en travers de sa route. <strong>Osiris</strong> se retrouve
                    pris au piège alors qu'il explore une des infinités de simulations créées par les <strong>Vexs</strong>. Il force alors <strong>Sagira</strong>, son <strong>spectre</strong>, à traverser un portail
                    pour rejoindre la réalité et chercher de l'aide. C'est alors que le <strong>Gardien</strong> est envoyé pour enquéter sur <strong>Mercure</strong> sur l'orgine d'un signal. Il y découvre
                    le spectre mourant, parvient à transférer ses données dans son spectre et part alors à la recherche d'<strong>Osiris</strong>.
            </div>
            <!-- dlc 2 l'esprit tu télaire -->
            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/warmind.jpg" title="l'Esprit Tutélaire" alt="Anastasia Bray et son spectre" />
                </div>
            </div>
            <div class="content">
                <h2>D.L.C 2 : L'Esprit Tutélaire</h2>
                <p>Sorti le 8 Mai 2018, il n'apporte que peu de contenu et de nouveauté :</p>
                <ul>
                    <li>Une nouvelle zone d'exploration : <strong>Le bassin d'Hellas, sur Mars.</strong></li>
                    <li>De nouvelles quêtes et missions.</li>
                    <li>De nouvelles armes, armures et cosmétiques.</li>                   
                    <li>Augmentation du niveau de puissance à 380 (385 avec les mods)</li>
                </ul>
                <p>
                    Après la mort de <strong>Ghaul</strong>, une vaste vague de <strong>Lumière</strong> déferle sur le Système Solaire. Elle réchauffe les planêtes, dont <strong>Mars</strong>, affaiblissant les couches
                    de glaces présentes. Couplé à une chute pour l'instant inexpliquée des <strong>Warsats</strong> par <strong>Raspoutine</strong>, cette couche de glace cède et libère les hordes de <strong>la Ruche</strong>
                    emprisonnées à l'intérieur depuis plusieurs années.
                </p>
                <p>
                    Alors qu'elle enquête sur son passé dans le <strong>Bassin d'Hélias</strong>, <strong>Ana Bray</strong> assiste aux évènements et contact l'<strong>Avant-Garde</strong>, qui envoie dans la foulé un 
                    <strong>Gardien</strong> pour mener l'enquête.
                </p>
            </div>
            <!-- dlc 3 renégat -->
            <div class="parallax-container">
                <div class="parallax">
                    <img src="assets/img/forsaken.jpg" title="Renégat" alt="Image montrant le Gardien portant le cadavre de Cayde-6" />
                </div>
            </div>
            <div class="content">
                <h2>D.L.C 3 : Renégat</h2>
                <p>Disponible le 4 Septembre 2018 ,ce D.L.C promet de gros changement dans <strong>Destiny 2</strong>. On peut noter : </p>
                <ul>
                    <li>L'appartition d'un nouveau mode de jeu mélant le P.V.P et le P.V.E : <strong>Gambit</strong>.</li>
                    <li>Un nouvel espace social : <strong>La Cités des Rêves.</strong></li>
                    <li>Un nouveaux raid.</li>
                    <li>4 nouveaux assauts.</li>
                    <li>Une refonte du fonctionnment des mods.</li>
                    <li>le retour des perks aléatoires.</li>
                    <li>Un système de clan plus avantageux..</li>
                </ul>
                <p>
                    Le prince Uldren Sov a survécu à l'assaut contre les <strong>Corrompus</strong>, et s'est écrasé sur <strong>Mars</strong>. Pensant que sa soeur (<strong>la Reine Mara Sov</strong>)
                    est toujours vivante et bien décider à reprendre <strong>Le Récif</strong>, il s'allie avec des <strong>Barons Déchus</strong> qu'il a libéré de la <strong>Prison des Vétérans</strong>. <strong>Pétra Venj</strong>
                    eu vent de cette évasion et avec l'aide de <strong>Cayde-6</strong>, elle tente d'arréter le Prince. <strong>Uldren et les Barons Déchus</strong> prennent le dessus, et <strong>Uldren</strong> tue <strong>Cayde-6</strong>.
                    <strong>L'Avant-Garde</strong> envoie alors un <strong>Gardien</strong> pour venger la mort de <strong>Cayde</strong> et stopper <strong>Uldren</strong>.
                </p>
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
        <script src="assets/js/materialize.min.js"></script> 
        <script src="assets/js/script2.js"></script>
    </body>
</html>
