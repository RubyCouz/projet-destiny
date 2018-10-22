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
                <!-- dropdown summary raid structure -->
                <ul id="dropdownRaid" class="dropdown-content">
                    <li><a class="js-scrollTo" href="#atheon">Le CAveau de Verre</a></li>
                    <li><a class="js-scrollTo" href="#cropta">La Chute de Cropta</a></li>
                    <li><a class="js-scrollTo" href="#Oryx">La Chute du Roi</a></li>
                    <li><a class="js-scrollTo" href="#aksis">Fureur Mécanique</a></li>
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
                        <li class="tab"><a class="dropdown-button" href="#!" data-activates="dropdownRaid">sommaire<i class="material-icons right">arrow_drop_down</i></a></li>
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
                        <li class="tab"><a href="#door">Ouverture du caveau</a></li>                            
                        <li class="tab"><a href="#defense">Defense des Failles</a></li>
                        <li class="tab"><a href="#destruct">Destruction des Oracles</a></li>                            
                        <li class="tab"><a href="#templier">Le Templier</a></li>   
                        <li class="tab"><a href="#labyrinthe">Le Labyrinthe des Gorgones</a></li>  
                        <li class="tab"><a href="#keyMaster">Le maître des Clés</a></li>                            
                        <li class="tab"><a href="#atheon">Athéon</a></li>                            

                    </ul>
                </div>
            </nav>
        </div>
        <!-- login modal -->
        <div id="login" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h3>Connexion</h3>
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
        <div id="door">
            <div class="row section scrollspy">
                <div class="col s12 m12 l12">
                    <h2><strong>Le Caveau de Verre</strong></h2>
                    <div class="parallax-container">
                        <div class="parallax">
                            <img class="weaponPic" src="../assets/img/vaultofglass.jpg" title="Caveau de Verre" alt="Image représentant le Caveau de Verre" />
                        </div>
                    </div>
                    <p class="content">
                        Premier raid de Destiny, il rescelle quelques secrets, et il vous faudra beaucoup de communication, de reactivité et de concentration pour en venir à bout.
                    </p>
                    <div class="content">
                        <div class="row">
                            <div class="col s12 mt12 l12">
                                <h3><strong>Ouverture de la porte</strong></h3>
                                <p>                        
                                    Le raid débute sur l'ouverture de la porte du Caveau. La zone se divise en 3 parties, chacune possédant une "plaque" à défendre. Faites 3 binômes, qui défendront chacun un portail
                                    des vagues d'ennemis tentant d'approcher. La prise de ces zones permet l'édification d'un monolithe, qui va à son tour ouvrir la porte du Caveau.
                                </p>
                                <p> Si une plaque est capturée par l'ennemi, le monolithe cessera son ascension, et se désagrégera petit à petit.</p>
                                <p>
                                    Une étape qui ne devrait pas trop vous poser de soucis si vous êtes coordonnés, attentif et réactif.
                                    Une fois l'élévation du monolithe effectué, la porte s'ouvrira, et vous donnera accès au premier coffre de ce raid.   
                                </p>
                                <img class="weaponPic" src="../assets/img/atheonplaque.jpg" title="Plaque" alt="Plaque à activer et tenir pour ouvrir le Caveau de Verre" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="defense">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="content">
                        <h3><strong>La salle du Templier</strong></h3>            
                        Salle du premier boss de ce raid, les difficultés vont commencer à se montrer! Il y aura 3 séquences sur cette salle : 
                        <ol>
                            <li>Défense de déchirure</li>
                            <li>Destruction d'oracles</li>
                            <li>Combat contre le Templier</li>
                        </ol>
                        <h3><strong>Défense des déchirures</strong></h3>
                        <p>
                            La séquence commence avec la défense de 3 déchirures de l'assaut de vexs qui vont tenter de se sacrifier dessus.
                            <img class="weaponPic" src="../assets/img/dechirure.jpeg" title="Déchirure" alt="Une déchirure dans la salle du Templier" />
                        </p>
                        <p>
                            De manière générale, il est conseillé de diviser la salle en 3 : <strong>droite, gauche et centre (milieu)</strong>. On place alors un binôme sur chaque zone pour défendre les 
                            déchirures.
                        </p>
                        <p>
                            Pour la première phase, il n'y a que <strong>la dechirure du centre à défendre</strong>.
                            Faites attention à <strong>la malédiction laissée par les fanitiques vex</strong>. Si toutefois vous êtes touchés, vous trouverez un <strong>puit de purification au centre de la salle</strong>.
                            Le voyage étant souvant risqué à cause des vagues d'ennemis, il est fortement conseillé d'éviter ces "flaques" de malédiction.
                        </p>
                        <p>
                            Lors de la seconde phase, <strong>les déchirures de droite et de gauche</strong> seront à défendre.
                        </p>
                        <p> Et enfin pour la dernière phase de défense <strong>des déchirures</strong>, vous allez devoir défendre les <strong>3 en même temps</strong>.</p>
                        <p>
                            Pas de grandes difficultés sur cette séquence, bien qu'il est important de communiquer. Selon l'importance des vagues d'ennemis se jetant sur les déchirures, il
                            est plus que bienvenue qu'un gardien se trouvant sur un coté plutôt calme aille préter main forte sur une zone plus submergée. N'hésitez donc pas à demander de l'aide
                            si vous êtes dépassés par les hordes de vexs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="destruct">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="content">
                        <h3><strong>Destruction des oracles</strong></h3>
                        <p>
                            Une fois les déchirures défendues, vous devrez détruires des <strong>oracles</strong> qui vont apparaître un peu partout dans la salle. Leurs positions seront <strong>toujours identiques</strong> 
                            à chaque apparition. Vous avez la possibilité de repérer la <strong>position de l'oracle en fonction de la note de musique joué</strong> lors de l'apparition. il faudra alors le détruire le plus vite 
                            possible, au rique de voir toute l'escouade maudite et périr sous l'effet de cette malédiction.
                        </p>
                        <p>
                            Pour détruire ces <strong>oracles assez rapidement</strong>, <strong>la Buveuse d'obscurité</strong> (épée exotique abyssale) reste une valeur sûre, le <strong>Fleuret Prétorien</strong> (fusion lootable dans le
                            <strong>Caveau de Verre</strong>) ou autre fusil à fusion ayant des perks similaires feront l'affaire également, ainsi que n'importe quelle arme ayant un fort impact.
                            <img class="weaponPic" src="../assets/img/oracle.jpg" title="Oracle" alt="Image d'un oracle, Caveau de Verre, salle du Templier" />
                        </p>
                        <p>Pas de gros changement au niveau stratégie sur cette séquence, 3 binômes se partagent la salle et s'occupent chacun de leur coté.</p>
                        <p>
                            Histoire de pimenter un peu les choses, des vexs vont apparaitres continuellement afin de vous empécher de détruire les oracles. Ne prétez pas attention aux snipers se trouvant
                            sur les plateformes autour de la salle, ils apparaissent sans cesse au fur et à mesure que vous les tuer. Cachez vous, évitez leur tirs au maximum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="templier">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="content">
                        <h3>Combat contre le Templier</h3>
                        <p>Nous verrons dans cette partie la manière standard, ainsi que la manière pour compléter <strong>le défis du Templier</strong>.</p>
                        <p>
                            Pas de binômes pour ici, simplement une personne qui va s'occuper de la <strong>relique</strong>, et les 5 autres qui vont s'occuper de nettoyer la salle et détruire les oracles.
                            Le choix du <strong>porteur de la relique</strong> est très important, c'est lui qui va mener la danse, et qui devra être assez agile et resistant si vous voulez faire le défis.
                            Que ça soit pour l'une ou l'autre technique, veillez à bien lancer le combat en aillant tous votre <strong>barre de super remplie au maximum</strong>, ainsi que votre stock de 
                            munitions lourdes et spéciales soient plein à craquer. N'hésitez pas pour cela à lancer quelques tours dans le vide afin de faire monter votre super et votre stock de munitions
                            plus rapidement.
                            <img class="weaponPic" src="../assets/img/reliquevault.jpeg" title="relique" alt="relique dans le caveau de verre" />
                        </p>
                        <h5><strong>Stratégie classique</strong></h5>
                        <p>
                            Dès que l'escouade est prête (munitions et super à fond), le porteur prend la <strong>relique</strong> et se positionne sur la partie gauche de la salle. Il s'occupera des 3 oracles apparaissant
                            sur cette partie de la salle, et des quelques harpie qui trainent pour faire monter la charge de la relique.
                            Les 5 autres gardiens reste sur la partie droite de la salle, au niveau du gros pilier de droite. ils seront alors protéger des tirs du boss, ainsi que des harpies.
                            Un des 5 gardiens peut se positionner sur la gauche pour donner un coup de main au porteur si besoin. Les oracles apparaissent par 2, veillez à détruire les 2 oracles avant
                            de commencer la phase de DPS.
                        </p>
                        <p>
                            Une fois que le <strong>porteur de relique</strong> est prêt (barre de charge de la relique chargée à fond), il déclenche la phase de DPS (en coordination avec les autres
                            gardiens) en lançant le super de la relique sur le <strong>Templier</strong> pour faire tomber son <strong>bouclier</strong>.
                            Dès lors, la phase de DPS commence : tous les gardiens tirent sur le <strong>Templier</strong> avec armes lourde ou spéciales(<strong>le gjallahorn et l'Image de l'Esprit Dormant</strong> sont très 
                            efficaces, <strong>le Fuseau Noir et le Brise-Glace</strong> font très bien le travail aussi) et les supers.
                            Les chasseurs possedant le <strong>Rodeur Nocturne</strong> sont très efficaces, la <strong>Ronde Nuit</strong> peut augmenter le DPS de l'escouade sur le boss. Un titan peut mettre une 
                            bulle en <strong>arme de lumière</strong> entre les 2 piliers un peu en retrait, pour augmenter un peu plus encore le DPS.
                            Veillez à esquiver les tirs du boss tout en tenant compte des dégats de zones qui sont très important (d'où l'utilité de la bulle du titan, attention à ne pas tirer
                            dedans au lance roquette)
                            <img class="weaponPic" src="../assets/img/templier.jpg" title="Templier" alt="image du Templier dans le viseur du Brise-Glace" />
                        </p>
                        <p>
                            Après quelques secondes de DPS, si le boss n'est pas tombé, il va entreprendre une téléportation vers un autre point (marqué par une sorte d'aura) de la salle (sur la droite ou sur la gauche, toujours au 
                            même endroit) et reprendre son bouclier. Il faut donc recommencer une autre phase où il faudra redétruire des oracles, charger la relique et attendre le signal du porteur.
                        </p>
                        <p>Une fois le <strong>Templier</strong> abattu, la porte au fond de la salle s'ouvrira, vous donnant accès à la suite du raid</p>
                        <h5><strong>Défis du Templier</strong></h5>
                        <p>Pas de grand changement pour le <strong>defis du Templier</strong>, il suffit juste de bloquer sa téléportation en se positionnant sur sa zone de téléportation, et le tuer sans qu'il
                            puisse se téléporter. C'est ici que le choix du <strong>porteur de relique</strong> est crucial. C'est lui qui devra bloquer la téléportation du boss à chaque fois qu'il entreprendra 
                            celle-ci.                            
                        </p>
                        <p>
                            Dès le début de la phase de DPS, le <strong>porteur</strong> devra surveiller l'endroit où le <strong>Templier</strong> va se téléporter et tenir la zone jusqu'à la prochaine téléportation. 
                            Pour tenir la position, il devra faire face aux tir du boss. C'est à ce moment qu'il devra activer le bouclier de la <strong>relique</strong> pour se protéger. Une fois la salve 
                            de tirs passée, la prochaine zone de téléportation apparaitra (à gauche si la première était à droite et vice-versa). Le porteur n'aura que quelques secondes pour rejoindre 
                            cette zone et empecher la téléportation du boss. Pour cela le porteur doit être assez agile pour aller rapidement sur la zone, et résistant face au tirs des vexs qui 
                            accompagneront le boss. Le chemin le plus conseillé pour passer d'une zone de téléportation à l'autre est de passez derrière les 2 pilliers. Les gardiens s'occupant du DPS 
                            devront faire attention lors de leurs tirs de roquettes, sous peine de mourrir sous l'explosion de leurs projectiles sur le porteur. Pour aider le porteur, un titan peut poser 
                            une bulle en armure de lumière derrière le pilier de droite afin de donner un bouclier supplémentaire au <strong>porteur de relique</strong>.
                        </p>
                        <p>
                            Cette phase demande beaucoup de <strong>réctivité et de concentration</strong> de la part du <strong>porteur de relique</strong> ainsi que de la communication entre lui et les autres gardiens.
                            Si un gardien meurt, le défis peut être complété.
                        </p>
                        <p>
                            Une fois le boss vaincus, la porte s'ouvre, vous laissant accès à la prochaine zone du raid. Notez vous que vous avez un chemin alternatif vous menant droit à un <strong>coffre
                                où vous avez la possibilité de looter un objet (arme ou armure) exotique</strong>. Lorsque vous êtes au niveau de l'emplacement de la déchirurre du centre, déplacez vous sur le 
                            <strong>coté gauche de la salle</strong>. sur le <strong> situé à votre droite</strong>, vous devriez apercevoir un <strong>trou légèrement en hauteur</strong> (prenez le temps de regarder, il est difficilement visible).
                            Pas de panique si toutefois vous oubliez <strong>le passage secret</strong>, vous avez la possibilité de récupérer le <strong>coffre exotique</strong> en passant par <strong>le Labyrinthe des Gorgones</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="labyrinthe">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="content">
                        <h3><strong>Le labyrinthe des Gorgones</strong></h3>
                        <p>
                            Cette phase du raid est un peu plus tranquille, mais saura mettre vos nerfs à rude épreuve. Vous attérissez dans un <strong>labyrinthe</strong> dont vous devrez trouver la sortie. vous trouverez
                            dans ce dédale de pierre <strong>des Gorgones</strong>. Ce sont des sortes d'Harpies, mais elles ne vous tireront pas dessus. En contre-partie, elles ont la possibilité de détecter vos mouvements et les
                            que vous pouvez faire lors de vos déplacements.
                            <img class="weaponPic" src="../assets/img/gorgonespic.jpg" title="Gorgone" alt="Une gorgone dans le Labyrinthe des gorgones" />
                            Lorsque vous vous faites détecter par une <strong>Gorgone</strong>, elle tuera toute l'escouade en quelques secondes et vous devrez recommencer le chemin depuis le début. Notez que vous avez <strong>la possibilité de les détruire</strong> en tirant tous dessus en 
                            même temps, à l'arme lourde de préférence. Là encore, <strong>la Buveuse d'Obscurité ou le Gjallahorn</strong> sont très efficaces, les super égelemant, que ça soit super de DPS ou améliorant le DPS.
                        </p>
                        <p>
                            Il n'y a pas de technique spéciale, juste <strong>2 chemins possibles</strong>. Prenez votre temps, avancer doucement et en groupe. Si toutefois l'escouade entière n'arrive pas à passez ensemble, il est 
                            toujours possible qu'un joueur passe tout seul, pendant que les autres retouren en orbite et le rejoigne une fois le labyrinthe traversé.
                        </p>
                        <p>
                            Le labyrinthe passé, le chemin débouchera sur un vaste canyon ou des plateformes apparaissent et disparaissent. Pas de secret, pour rejoindre l'autre coté, il
                            vous faudra sauter de plateforme en plateforme. Vous arriverez alors sur la dernière salle du <strong>Caveau de Verre</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="keyMaster">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="content">
                        <h3><strong>Le Maître des Clés</strong></h3>
                        <p><strong>Le Maître de Clés</strong> n'a rien d'effrayant, il s'apparente à une <strong>Hydre</strong></p>
                        <p>
                            Vous devrez <strong>diviser votre excouade en 2 groupes de 3</strong>. Chacun d'eux se positionneras de chaque coté de la salle où se trouve un <strong>portail</strong>.
                            Commencer par nettoyer la salle dans un premier temps, puis abattez le <strong>Maître des clés</strong> dès qu'il apparait (<strong> au centre de la salle</strong>).
                            Une fois mort, il laissera sur son cadavre une <strong>relique identique à celle utilisée sur le Templier</strong>. Un premier groupe activera le portail en restant sur la
                            plaque correspondante, pedant que le second groupe prendra la relique et passera un portail <strong>pour se téléporter sur Mars (portail de gauche) ou sur Vénus (poratil de droite)</strong>. 
                            <strong>Le porteur de relique</strong> devra se charger de purifier des ténèbres ses 2 camarades, leur permettant ainsi de nettoyer la salle et récupérer une autre relique.
                            Une fois revenu dans l'ultime salle du raid, il faudra répéter l'opération sur l'autre portail.
                        </p>
                        <p>
                            Si vous vous en sentez capable, vous pouvez dans un premier temps faire les 2 portails en même temps. Dans ce cas, un seul gardien s'occupe de tenir le portail
                            et les 2 autres se téléporte pour aller chercher la relique. Si dans votre escouade il y a un ou plusieurs chasseurs équipés
                            du <strong>Rodeur Nocturne et du Gjallahorn</strong> et en <strong>Pistolero</strong>, il est tout à fait possible qu'il se téléporte sur Vénus tout seul : un coup de <strong>Pistolero</strong>
                            sur l'Hydre en arrivant, un coup de Gjallahorn sur les ennemis l'entourant et le tour est joué. Il ne reste plus qu'à aller chercher la relique et à rentrer vite fait.
                        </p>
                        <p>
                            Une fois les 3 reliques réunis dans la <strong>salle d'Athéon</strong>, elles disparaitront, et une déchirure fera son apparition. Il faudra la défendre (comme sur <strong>la salle du Templier</strong>)
                            de l'assaut des vexs. Ils vont apparaitre par les 2 portails, ainsi que du fond de la salle. une fois les hordes de vexs repoussées, vous pourrez enfin affronter le boss final, <strong>Athéon</strong>.
                        </p>
                        <p>Sur cette phase, il est important d'avoir <strong>une bonne communication</strong>, notamment pour que <strong>les porteurs de relique</strong> sachent <strong>quand purififer leurs coéquipiers</strong>.</p>

                    </div>
                </div>
            </div>
        </div>
        <div id="atheon">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="content">
                        <h3><strong>Athéon</strong></h3>
                        <p>
                            <img class="weaponPic" src="../assets/img/atheon.jpg" title="Athéon" alt="image représentant Athéon dans le Caveau de Verre" />
                            Enfin vous vous trouvez face à <strong>Athéon</strong>! La stratégie pour le battre est assez similaire, à quelques exceptions prètes. Ainsi, vous n'aurez plus le choix de décider qui va
                            se téléporter sur quelle planête. <strong>3 personnes sont choisies aléatoirement</strong> et sont envoyées soit sur <strong>Mars</strong>, soit sur <strong>Vénus</strong>. Aux personne téléportéés donc de dire dès que possible
                            sur quelle planête elles ont atterri pour que les gardiens restant puissent <strong>ouvrir le portail correspondant</strong> et le protéger des harpies explosives qui le prendront d'assauts.
                            Pour rappel le portail de <strong>gauche correspond à Mars</strong>, et celui de <strong>droite à Vénus</strong>.
                        </p>
                        <h3><strong>Stratégie classique</strong></h3>
                        <p> 
                            Pour les gardiens envoyés sur Mars ou Vénus : un gardien s'empare de <strong>la relique et s'occupe de purifier ses camarades si nécessaire</strong>pendant que les 2 autres devront nettoyer la salle
                            et tirer sur des oracles qui apparaitront en hauteur. <strong>ATTENTION : vous devez détruire rapidement les oracles dans leur ordre d'appariton, sous peine de faire mourrir 
                                toute l'escouade</strong>.
                            <img class="weaponPic" src="../assets/img/oracleatheon.jpg" title="Plan des oracles sur Mars et Vénus" alt="Plan des oracles sur Mars et Vénus" />
                        </p>
                        <p>Une fois revenus de leur téléportation, tous les gardiens se retrouvent sur la <strong>petite plateforme au centre de la salle</strong>, face à <strong>Atheon</strong></p>
                        <p>
                            Commence alors la <strong>phase de DPS</strong>. <strong>Le porteur de relique</strong> se positionnera devant ses camarades d'escouade et activera le bouclier de la relique afin de 
                            protéger tout le monde des tirs <strong>d'Athéon</strong>. En arrivant sur la plateforme, un titan peut activer une bulle en arme de lumière pour augementer le DPS sur le boss, 
                            et donnez un peu de protection le temps que le <strong>porteur de relique</strong> se mettent en position. Lors de la <strong>phase de DPS</strong>, il est important de rester dans le bouclier de la
                            relique et de ne pas tirer au <strong>lance roquettes à l'intérieur</strong>. Utilisez les mêmes armes que pour le DPS du Templier, elles sont également très efficaces sur le boss de fin.
                            Enfin sachez qu'à <strong>l'intérieur du bouclier</strong>, vous avez votre super qui se <strong>recharge très rapidement</strong>. N'hésitez donc pas à en abuser. Notez en contre-partie que pour tirer leur 
                            flèche, les chasseurs devront être en <strong>dehors du bouclier</strong>. La meilleur solution reste alors de sauter pour lancer la flèche su Athéon.
                            <img class="weaponPic" src="../assets/img/atheondps.jpg" title="3 gardiens" alt="Phase de dps sur le boss final, Athéon" />
                        </p>
                        <p>
                            Une fois cette phase de DPS terminée, il ne reste plus qu'à recommencer de la même façon, en étant téléporté peut être sur une autre planète. Recommencer donc jusqu'à la mort 
                            boss final.
                        </p>
                        <p>
                            Sachez que vous avez la possibilité de looter sur ce boss <strong>L'Exégèse des vexs</strong>
                            <img class="weaponPic" src="../assets/img/exegesevex.jpg" title="Exégèse des vexs" alt="Représentation de l'Exégèse des vexs" />
                        </p>
                        <h3><strong>Défis d'Athéon</strong></h3>
                        <p>
                            Il n'y a pas de grand changement dans la stratégie pour battre <strong>Athéon</strong>, tous les gardiens devront seulement <strong>détruire un oracle chacun</strong> lors de la <strong>phase de téléportation</strong>.
                            Pour ce faire : 3 gardiens seront envoyés soit sur Mars, soit sur Vénus. Un gardiens prend la <strong>relique</strong>, les 2 autres nettoient la salle et détruisent les <strong>2 premiers oracles</strong> et 
                            se positionnent devant le portail, <strong>prêts à être purifier</strong> avant de retourner dans la salle d'<strong>Athéon</strong>. Le <strong>porteur de relique</strong> détruit le <strong>troisième oracle</strong> et va purifier ses camarades. Ils pourront
                            alors retourner dans la première salle en toute sécurité. 2 autres gardiens prendront leurs places pour détruire les <strong>oracles 4 et 5</strong>. Le porteur, toujours près du potail purifie les gardiens avant
                            leur retour dans la salle du boss et enfin le dernier peut se téléporter et détruire le <strong>dernier oracle</strong>. Pour gagner du temps il est possible que le porteur revienne avec les gardiens qui ont détruits
                            les oracles 4 et 5, et se mettent en position pour le DPS du boss. Le sixième gardien à le temps d'aller détruire le dernier oracle et de revenir sur la plateforme de DPS.
                        </p>
                        <p>
                            Veillez à ce qu'il y ait toujours <strong>une personne sur la plaque pour maintenir le portail ouvert</strong>, prenez le soin de tuer les harpies environnantes, <strong>communiquer</strong>, choisissez un ordre de passage si
                            ça peut vous aidez et soyez vif! Vous n'avez que peu de tmeps pour détruire les oracles et revenir pour prendre la place de vos camarades restés sur la plaque.
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