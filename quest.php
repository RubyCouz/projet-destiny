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
            <!-- Dropdown sommaire quete Structure -->
            <ul id="dropdown5" class="dropdown-content">
                <li><a href="#touchOfMAlice">Once de Mechanceté</a></li>
                <li><a href="#blackSpindle">Fuseau Noir</a></li>
                <li><a href="#aceOfSpadee">As de pique</a></li>
                <li><a href="#">...</a></li>
            </ul>
            <nav>
                <div class="nav-wrapper">
                    <a href="index.php#home" class="brand-logo">Logo de Destiny</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li class="tab"><a class="right-align dropdown-trigger" href="#!" data-target="dropdown5">sommaire<i class="material-icons right">arrow_drop_down</i></a></li>

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
        <div id="touchOfMalice" class="row section scrollspy">
            <div class="col s12 m12 l12">
                <h2>L'Once de Méchanceté</h2>
                <div class="row">
                    <div class="col s12 m12 l6">
                        <img class="weaponPic"src="assets/img/touchofmalice.jpg" title="once de méchanceté" alt="image représentant l'once de méchanceté" />                        
                    </div>
                    <div class="col s12 m12 l6">
                        <p>          
                            L'Once de Méchanceté est un fusil d'éclaireur arbore un look plutôt singulier, et possède des améliorations uniques:
                        </p>
                        <ul>
                            <li class="titleList">Améliorations principales</li>
                            <ul>
                                <li class="listStyle"><b>Dégats cinétiques</b></li>
                                <li class="listStyle"><b>Once de méchanceté : </b>La dernière cartouche du chargeur réapparait et inflige plus de dégats, mais puise dans l'énergie vitale.</li>
                                <li class="listStyle"><b>Once de miséricorde : </b>Si vous effectuez 3 frags rapides, le porteur de l'arme récupère une partie de  ses points de vie.</li>
                                <li class="listStyle"><b>Oeil de la tempète : </b>Plus vos point de vie sont faible, plus cette arme devient précise.</li>
                            </ul>
                            <li class="titleList">Améliorations colonne 1</li>
                            <ul>
                                <li class="listStyle"><b>Balistique fine : </b>Recul plus important, bonus de portée.</li>
                                <li class="listStyle"><b>Contrôle de dérive : </b>Le recul es davantage prévisible et contolable, la portée est pénalisée.</li>
                                <li class="listStyle"><b>Ballistique atténuée : </b>Recul réduit, puissance d'impact pénalisée.</li>
                            </ul>
                            <li class="titleList">Améliorations colonne 2</li>
                            <ul>
                                <li class="listStyle"><b>Chargeur rapide : </b>Rechargez cette arme encore plus rapidement.</li>
                                <li class="listStyle"><b>Instantanné : </b>Vous pouvez viser avec cette arme à une vitesse incroyable.</li>
                                <li class="listStyle"><b>Canon rayé : </b>La portée et la précision sont améliorés.</li>
                            </ul>
                        </ul>         
                    </div>
                </div>

                <div class="content">
                    <p>  
                        Cette arme est obtenu via une longue série de quêtes proposées par Eris Morn. Plusieus partie la composent, et peuvent être effectuées dans un ordre quelconque
                        (l'extension "le Roi des Corrompus" est requis pour l'obtention de cette arme). Une arme à posséder, très utile dans certaines conditions!
                    </p>
                    <h3>Un passé fragmenté</h3>                    
                    <ol>
                        <li>Récupérez un premier <b>fragment calcifié sur le cuirassé</b> et rapportez le à Eris Morn à la Tour. Ceci activera la première étape de quête.</li>
                        <li>Eris vous demandera alors de récupérer <b>5 autres frangments calcifiés</b>. Retournez la voir une fois que vous les possédés.</li>
                    </ol>
                    <h3>Crampes d'estomac (partie 1)</h3>
                    <ol>
                        <li>Pour activer cette étape de quête, retournez sur le cuirassé et récupérez un <b>total de 15 fragment calcifiés</b></li>
                        <li>Eris vous proposera alors de vous rendre dans le <b>bunker War-4</b> et de tuer <b>Bracus</b>, un centurion corrompu.</li>
                    </ol>
                    <h3>L'appétit Ancestrale</h3>
                    <ol>
                        <li>
                            Vous devez préparer un rituel. Pour cele, procédez à l'ouverture de raid <b>La chute du Roi</b> et pénétrer dans l'instance afin d'activer une nouvelle étape de quête.
                            Eris vous chargera de récupérer <b>3 objets dans le raid :</b>
                            <ul>
                                <li><b>La Lame de la Famine : </b>s'obtient en tuant le <b>Prêtre de guerre.</b></li>
                                <li><b>Le Voile d'Ir Anuk : </b>se récupère en tuant <b>les filles d'Oryx.</b></li>
                                <li><b>Le Coeur affamé : </b>est obtenu après la défaite <b>d'Oryx</b></li>
                            </ul>
                        </li>
                        <li>La deuxième partie de cette étape consiste à récupérer plusieurs ressources : 
                            <ul>
                                <li><b>50 pièces d'armes</b></li>
                                <li><b>25 spores de vers</b></li>
                                <li><b>50 flocons d'hadium</b> (s'obtient sur le cuirassé)</li>
                            </ul>
                        </li>
                    </ol>
                    <h3>Crampe d'estomac (partie 2)</h3>
                    <ol>
                        <li>L'étape suivante de la quête se débloque en récuprant un <b>total de 30 fragments calcifiés</b>.</li>
                        <li>Eris vous demandera de faire l'assaut de <b>l'Esprit Eternel</b> dans lequel vous devrez tuer <b>Morgath</b>, un chevalier se trouvant dans la salle du Boss.</li>
                        <li>Récupérer ensuite <b>45 fragments calcifiés</b> pour poursuivre la quête</li>
                        <li>Eris vous dirigera alors vers Phobos, ou vous devrez refaire la mission <b>"Etreinte de la peur"</b> où vous devrez abattre <b>Mar-Zik</b>, une prétresse de la Ruche.</li>
                        <li>Une fois <b>Mar-Zik</b> à terre, vous pourrez retourner voir Eris Morn pour enfin obtenir votre Once de Méchanceté que vous aurez amplement mérité!</li>
                    </ol>
                </div>
            </div>
        </div>
        <div id="blackspindle" class="row section scrollspy">
            <div class="col s12 m12 l12">
                <h2>Le Fuseau Noir</h2>
                <div class="row">
                    <div class="col s12 m12 l6">
                        <img class="weaponPic"src="assets/img/blackspindle.png" title="fuseau noir" alt="image représentant le fuseau noir" />                        
                    </div>
                    <div class="col s12 m12 l6">
                        <p>          
                            Digne succésseur du Marteau Noir, le Fuseau Noir est une arme à posséder absolument. Ce fusil de précison est une des armes armes indispensables pour un dps correct sur les boss, notamment en raid. Il faut toutefois contrroler
                            son recul pour qu'il soit réellement efficace.
                        </p>

                        <ul>
                            <li class="titleList">Améliorations principales</li>
                            <ul>
                                <li class="listStyle"><b>Dégats solaires</b></li>
                                <li class="listStyle"><b>Clou blanc : </b>Une succession de 3 tirs rapides de précision remplissent automatiquement le chargeur.</li>
                                <li class="listStyle"><b>Deuxième chances : </b>Lorsqu'un tir rate sa cible, une unitions sera peut-être ajoutée au chargeur.</li>
                            </ul>
                            <li class="titleList">Améliorations colonne 1</li>
                            <ul>
                                <li class="listStyle"><b>Embuscade SKH25 : </b>Système de visée souple et vif. Maniement très facile. saura récompenser les tireurs agiles.</li>
                                <li class="listStyle"><b>Systac SLS15 : </b>Lunnette à grossissement moyen. Utile en toutes circonstances, pour parer aux situation simprévues.</li>
                                <li class="listStyle"><b>Faucon SLR15 : </b>Lunette de précision à grossissement moyen. Portée et aquisition de cible améliorées.</li>
                            </ul>
                            <li class="titleList">Améliorations colonne 2</li>
                            <ul>
                                <li class="listStyle"><b>Instantané : </b>Vous pouvez viser avec cette arme à une vitesse incroyable.</li>
                                <li class="listStyle"><b>Chargeur rapide : </b>Rechargez cette arme encore plus rapidement.</li>
                                <li class="listStyle"><b>Equilibre idéal : </b>Le recul de cette arme est extrèmeement faible.</li>
                            </ul>
                        </ul>           
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">

                        <div class="content">
                            <p>  
                                Initialement obtenu en lançant la <b> mission épique du jour "Aveugle à la lumière"</b>, il est désormais possible de lancer directement la mission en épique à n'importe 
                                quel moment.
                            </p>
                            <h3>Etapes</h3>                    
                            <ol>
                                <li>Lancez donc la mission <b>"Aveugle à la lumière"</b> en épique.</li>
                                <li>Progressez normalement jusqu'aux salles aux verrous.</li>
                                <li>
                                    Une fois dans la troisième salle aux verroux (celle qui possèdent donc trois verroux, sans l'ouvrir), sprintez jusqu'à la porte se trouvant à droite de la 
                                    porte verrouillée. Vous vous trouverez alors dans <b>"Le Labyrinthe de sable"</b>. <b>ATTENTION : si l'escouade entière meurt avant l'arrivée dans cette salle, la porte sera verrouillée.</b> Vous devrez alors recommencer la mission
                                    afin d'accéder au passage secret.
                                </li>
                                <li>Emprunter l'ascenseur et continuer votre chemin jusqu'à la prochaine porte. A partir de là s'enclenche un timer de 10 minutes.</li>
                                <li>
                                    Vous avez donc 10 minutes pour nettoyer 3 salles et tuer le boss de fin. Les 2 premières sont assez simples à nettoyer, détruiser d'abord les boules noires, cela évitera
                                    aux ennemis de revenir indéfiniment. Ajuster votre arsenal en fonction de la resistance des ennemis, si vous avez un chasseur en ronde nuit dans votre escouade, 
                                    n'hésitez pas à générer des orbes de lumières afin de recharger les supers rapidement et les utilisés le plus possible. 
                                </li>
                                <li>
                                    Les choses vont se corser une fois dans la salle du boss. <b>Driviks</b> se tiendra au centre de la salle, à la même place que Taniks, et accompagné d'une belle tripoté
                                    de corrompus.
                                    <ol>
                                        <li>
                                            Une des techniques consiste à enchainer le boss à l'épée dans une bulle de titans. le mieux est d'avoir 2 titans afin d'enchainer les bulles. Néttoyer ensuite la salle
                                            en priviliégiant d'abord les boules noires, pour la même raison vu précédemment.
                                        </li>
                                        <li>
                                            Faute de Titan avec une bulle, vous pouvez nettoyer la salle, en commençant par les boules noires, tout en gardant un DPS sur le boss dès que possible. Utilisez alors autant
                                            que possible vos supers, armes lourdes et autres sniper. Les arcanistes en <b>rîte de l'orage</b> sont très efficaces pour nettoyer tout ces petit corrompu tenant compagnie au boss.
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                            <p>
                                A noter qu'une fois le timer enclancher, l'escouade peux mourrir autant de fois que possible, vous arez toujours la possibilité de revenir. En contre-partie, lorsuae que le timer
                                se termine, l'escouade retoure en orbite. Il vous faudra alors relancer la mission du début pour refaire une tentive.
                            </p>
                            <p>
                                C'est une mission qui est loin d'être facile, prévoyer une escouade composée de gardiens à 290+ de lumières, avec un bon arsenal qui pique!
                                Vous obtiendrez le <b>Fuseau Noir</b> dès la chute du boss. Vous pouvez également une chance de looter un vaisseau en récompense de fin de mission, 
                                <b>le Chanteur de Vienne :</b>
                            </p>
                            <img class="weaponPic" src="assets/img/chanteurvienne.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
