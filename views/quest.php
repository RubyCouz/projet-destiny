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
                        <li class="tab"><a href="#touchOfMalice">Once de Méchanceté</a></li>                            
                        <li class="tab"><a href="#blackSpindle">Fuseau Noir</a></li>
                        <li class="tab"><a href="#aceOfSpade">As de Pique</a></li>                            
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
        <div id="touchOfMalice">       
            <div class="row section scrollspy">
                <div class="col s12 m12 l12">
                    <h2>L'Once de Méchanceté</h2>
                    <div class="row">
                        <div class="col s12 m12 l6">
                            <img class="weaponPic" src="../assets/img/touchofmalice.jpg" title="Once de Méchanceté" alt="Image représentant l'Once de Méchanceté" />                        
                        </div>
                        <div class="col s12 m12 l6">  
                            <p>L'Once de Méchanceté est un fusil d'éclaireur arborant un look plutôt singulier, et possède des améliorations uniques:</p>
                            <div class="valign-wrapper">
                                <ul>
                                    <li class="titleList">Améliorations principales</li>
                                    <ul>
                                        <li class="listStyle"><strong>Dégats cinétiques</strong></li>
                                        <li class="listStyle"><strong>Once de méchanceté : </strong>La dernière cartouche du chargeur réapparait et inflige plus de dégats, mais puise dans l'énergie vitale.</li>
                                        <li class="listStyle"><strong>Once de miséricorde : </strong>Si vous effectuez 3 frags rapides, le porteur de l'arme récupère une partie de  ses points de vie.</li>
                                        <li class="listStyle"><strong>Oeil de la tempète : </strong>Plus vos point de vie sont faible, plus cette arme devient précise.</li>
                                    </ul>
                                    <li class="titleList">Améliorations colonne 1</li>
                                    <ul>
                                        <li class="listStyle"><strong>Balistique fine : </strong>Recul plus important, bonus de portée.</li>
                                        <li class="listStyle"><strong>Contrôle de dérive : </strong>Le recul es davantage prévisible et contolable, la portée est pénalisée.</li>
                                        <li class="listStyle"><strong>Ballistique atténuée : </strong>Recul réduit, puissance d'impact pénalisée.</li>
                                    </ul>
                                    <li class="titleList">Améliorations colonne 2</li>
                                    <ul>
                                        <li class="listStyle"><strong>Chargeur rapide : </strong>Rechargez cette arme encore plus rapidement.</li>
                                        <li class="listStyle"><strong>Instantanné : </strong>Vous pouvez viser avec cette arme à une vitesse incroyable.</li>
                                        <li class="listStyle"><strong>Canon rayé : </strong>La portée et la précision sont améliorés.</li>
                                    </ul>
                                </ul>         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12 l12">

                            <div class="content">
                                <p>  
                                    Cette arme est obtenu via une longue série de quêtes proposées par Eris Morn. Plusieurs parties la composent, et peuvent être effectuées dans un ordre quelconque
                                    (l'extension "le Roi des Corrompus" est requis pour l'obtention de cette arme). Une arme à posséder, très utile dans certaines conditions!
                                </p>
                                <h3>Un passé fragmenté</h3>                    
                                <ol>
                                    <li>Récupérez un premier <strong>fragment calcifié sur le cuirassé</strong> et rapportez le à Eris Morn à la Tour. Ceci activera la première étape de quête.</li>
                                    <li>Eris vous demandera alors de récupérer <strong>5 autres frangments calcifiés</strong>. Retournez la voir une fois que vous les possédés.</li>
                                </ol>
                                <h3>Crampes d'estomac (partie 1)</h3>
                                <ol>
                                    <li>Pour activer cette étape de quête, retournez sur le cuirassé et récupérez un <strong>total de 15 fragment calcifiés</strong></li>
                                    <li>Eris vous proposera alors de vous rendre dans le <strong>bunker War-4</strong> et de tuer <strong>Bracus</strong>, un centurion corrompu.</li>
                                </ol>
                                <h3>L'appétit Ancestrale</h3>
                                <ol>
                                    <li>
                                        Vous devez préparer un rituel. Pour cele, procédez à l'ouverture de raid <strong>La chute du Roi</strong> et pénétrer dans l'instance afin d'activer une nouvelle étape de quête.
                                        Eris vous chargera de récupérer <strong>3 objets dans le raid :</strong>
                                        <ul>
                                            <li><strong>La Lame de la Famine : </strong>s'obtient en tuant le <strong>Prêtre de guerre.</strong></li>
                                            <li><strong>Le Voile d'Ir Anuk : </strong>se récupère en tuant <strong>les filles d'Oryx.</strong></li>
                                            <li><strong>Le Coeur affamé : </strong>est obtenu après la défaite <strong>d'Oryx</strong></li>
                                        </ul>
                                    </li>
                                    <li>La deuxième partie de cette étape consiste à récupérer plusieurs ressources : 
                                        <ul>
                                            <li><strong>50 pièces d'armes</strong></li>
                                            <li><strong>25 spores de vers</strong></li>
                                            <li><strong>50 flocons d'hadium</strong> (s'obtient sur le cuirassé)</li>
                                        </ul>
                                    </li>
                                </ol>
                                <h3>Crampe d'estomac (partie 2)</h3>
                                <ol>
                                    <li>L'étape suivante de la quête se débloque en récuprant un <strong>total de 30 fragments calcifiés</strong>.</li>
                                    <li>Eris vous demandera de faire l'assaut de <strong>l'Esprit Eternel</strong> dans lequel vous devrez tuer <strong>Morgath</strong>, un chevalier se trouvant dans la salle du Boss.</li>
                                    <li>Récupérer ensuite <strong>45 fragments calcifiés</strong> pour poursuivre la quête</li>
                                    <li>Eris vous dirigera alors vers Phobos, ou vous devrez refaire la mission <strong>"Etreinte de la peur"</strong> où vous devrez abattre <strong>Mar-Zik</strong>, une prétresse de la Ruche.</li>
                                    <li>Une fois <strong>Mar-Zik</strong> à terre, vous pourrez retourner voir Eris Morn pour enfin obtenir votre Once de Méchanceté que vous aurez amplement mérité!</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="blackSpindle">
            <div class="row section scrollspy">
                <div class="col s12 m12 l12">
                    <h2>Le Fuseau Noir</h2>
                    <div class="row">
                        <div class="col s12 m12 l6">
                            <img class="weaponPic"src="../assets/img/blackspindle.png" title="Fuseau Noir" alt="Image représentant le Fuseau Noir" />                        
                        </div>
                        <div class="col s12 m12 l6">
                            <p>          
                                Digne succésseur du Marteau Noir, le Fuseau Noir est une arme à posséder absolument. Ce fusil de précison est une des armes armes indispensables pour un dps correct sur les boss, notamment en raid. Il faut toutefois contrroler
                                son recul pour qu'il soit réellement efficace.
                            </p>
                            <div class="valign-wrapper">
                                <ul>
                                    <li class="titleList">Améliorations principales</li>
                                    <ul>
                                        <li class="listStyle"><strong>Dégats solaires</strong></li>
                                        <li class="listStyle"><strong>Clou blanc : </strong>Une succession de 3 tirs rapides de précision remplissent automatiquement le chargeur.</li>
                                        <li class="listStyle"><strong>Deuxième chances : </strong>Lorsqu'un tir rate sa cible, une unitions sera peut-être ajoutée au chargeur.</li>
                                    </ul>
                                    <li class="titleList">Améliorations colonne 1</li>
                                    <ul>
                                        <li class="listStyle"><strong>Embuscade SKH25 : </strong>Système de visée souple et vif. Maniement très facile. saura récompenser les tireurs agiles.</li>
                                        <li class="listStyle"><strong>Systac SLS15 : </strong>Lunnette à grossissement moyen. Utile en toutes circonstances, pour parer aux situation simprévues.</li>
                                        <li class="listStyle"><strong>Faucon SLR15 : </strong>Lunette de précision à grossissement moyen. Portée et aquisition de cible améliorées.</li>
                                    </ul>
                                    <li class="titleList">Améliorations colonne 2</li>
                                    <ul>
                                        <li class="listStyle"><strong>Instantané : </strong>Vous pouvez viser avec cette arme à une vitesse incroyable.</li>
                                        <li class="listStyle"><strong>Chargeur rapide : </strong>Rechargez cette arme encore plus rapidement.</li>
                                        <li class="listStyle"><strong>Equilibre idéal : </strong>Le recul de cette arme est extrèmeement faible.</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12 l12">

                            <div class="content">
                                <p>  
                                    Initialement obtenu en lançant la <strong> mission épique du jour "Aveugle à la lumière"</strong>, il est désormais possible de lancer directement la mission en épique à n'importe 
                                    quel moment.
                                </p>
                                <h3>Etapes</h3>                    
                                <ol>
                                    <li>Lancez donc la mission <strong>"Aveugle à la lumière"</strong> en épique.</li>
                                    <li>Progressez normalement jusqu'aux salles aux verrous.</li>
                                    <li>
                                        Une fois dans la troisième salle aux verroux (celle qui possèdent donc trois verroux, sans l'ouvrir), sprintez jusqu'à la porte se trouvant à droite de la 
                                        porte verrouillée. Vous vous trouverez alors dans <strong>"Le Labyrinthe de sable"</strong>. <strong>ATTENTION : si l'escouade entière meurt avant l'arrivée dans cette salle, la porte sera verrouillée.</strong> Vous devrez alors recommencer la mission
                                        afin d'accéder au passage secret.
                                    </li>
                                    <li>Emprunter l'ascenseur et continuer votre chemin jusqu'à la prochaine porte. A partir de là s'enclenche un timer de 10 minutes.</li>
                                    <li>
                                        Vous avez donc 10 minutes pour nettoyer 3 salles et tuer le boss de fin. Les 2 premières sont assez simples à nettoyer, détruiser d'abord les boules noires, cela évitera
                                        aux ennemis de revenir indéfiniment. Ajuster votre arsenal en fonction de la resistance des ennemis, si vous avez un chasseur en ronde nuit dans votre escouade, 
                                        n'hésitez pas à générer des orbes de lumières afin de recharger les supers rapidement et les utilisés le plus possible. 
                                    </li>
                                    <li>
                                        Les choses vont se corser une fois dans la salle du boss. <strong>Driviks</strong> se tiendra au centre de la salle, à la même place que Taniks, et accompagné d'une belle tripoté
                                        de corrompus.
                                        <ol>
                                            <li>
                                                Une des techniques consiste à enchainer le boss à l'épée dans une bulle de titans. le mieux est d'avoir 2 titans afin d'enchainer les bulles. Néttoyer ensuite la salle
                                                en priviliégiant d'abord les boules noires, pour la même raison vu précédemment.
                                            </li>
                                            <li>
                                                Faute de Titan avec une bulle, vous pouvez nettoyer la salle, en commençant par les boules noires, tout en gardant un DPS sur le boss dès que possible. Utilisez alors autant
                                                que possible vos supers, armes lourdes et autres sniper. Les arcanistes en <strong>rîte de l'orage</strong> sont très efficaces pour nettoyer tout ces petit corrompu tenant compagnie au boss.
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
                                    Vous obtiendrez le <strong>Fuseau Noir</strong> dès la chute du boss. Vous pouvez également une chance de looter un vaisseau en récompense de fin de mission, 
                                    <strong>le Chanteur de Vienne :</strong>
                                </p>
                                <img class="weaponPic" src="../assets/img/chanteurvienne.jpg" title="Le Chanteur de Vienne" alt="Représentationdu vaisseau le Chanteur de Vienne"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="aceOfSpade">
            <div class="row section scrollspy">
                <div class="col s12 m12 l12">
                    <h2>L'AS de Pique</h2>
                    <div class="row">
                        <div class="col s12 m12 l6">
                            <img class="weaponPic" src="../assets/img/aceofspade.jpg" title="As de pique" alt="image représentant l'As de pique" />                        
                        </div>
                        <div class="col s12 m12 l6">
                            <p>          
                                Revolver de Cayde-6, cette arme possède des perks la rapprochant de la Grande Fauheuse. Equipé de <strong>Luciole</strong> et d'<strong>Indomptable</strong>, ce revolver peut être redoutable en pve.
                            </p>
                            <div class="valign-wrapper">                            
                                <ul>
                                    <li class="titleList">Améliorations principales</li>
                                    <ul>
                                        <li class="listStyle"><strong>Dégats cinétiques</strong></li>
                                        <li class="listStyle"><strong>Troisième oeil : </strong>Mire stable. Optimisé pour offrir un meilleur contrôle du recul.</li>
                                        <li class="listStyle"><strong>Indomptable : </strong>Les frags de précision placent dans votre chargeur une balle tirée de votre réserve de munitions.</li>
                                        <li class="listStyle"><strong>Luciole : </strong>Les frags de précision avec cette arme font exploser la cible.</li>
                                    </ul>
                                    <li class="titleList">Améliorations colonne 1</li>
                                    <ul>
                                        <li class="listStyle"><strong>Main//Ferme : </strong>Recul plus important, bonus de portée.</li>
                                        <li class="listStyle"><strong>Tir//Rapide : </strong>Mise en mire souple. Maniement facile et rapide.</li>
                                        <li class="listStyle"><strong>Juste//Visée : </strong>Mire polyvalente. Léger, avec un bon contrôle du recul. Acquisition de cible efficace.</li>
                                    </ul>
                                    <li class="titleList">Améliorations colonne 2</li>
                                    <ul>
                                        <li class="listStyle"><strong>Canon renforcé : </strong>Portée augmentée. Stabilité réduite.</li>
                                        <li class="listStyle"><strong>Munitions de gros calibre : </strong>Des munitions de gros calibres conçues pour stopper net les cibles les plus imposantes. Les surcroit de poid rend toutefois 
                                            l'arme moins maniable.</li>
                                        <li class="listStyle"><strong>Equilibre idéal : </strong>Le recul de cette arme est extrêment faible.</li>
                                    </ul>
                                </ul>         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="content">
                                <p>  
                                    Vous pouvez récuperer cette armes <strong>uniquement avec le chasseur</strong>, en passant des rangs de faction auprès de Banshee-44, l'armurier de la Tour.
                                </p>
                                <div class="row">
                                    <div class="s12 m12 l12">
                                        <img class="weaponPic" src="../assets/img/armurier.jpg" />
                                    </div>
                                </div>
                                <h3>Etapes:</h3>                    
                                <ol>
                                    <li class="aceList">Passez rang 3 auprès de Banshee</li>
                                    <ul>
                                        <li>Réalisez des tests d'armes de terrains, disponible tous les mercredi (250 points par arme)</li>
                                        <li>
                                            Rendez les objet de type DVALIN-RAS8711-FRxxx (lootable de façon aléatoire sur n'importe quelle planète, peu importe l'activité). Vous obtiendrez 400 point d'estime par relique
                                        </li>
                                        <li>
                                            Au rang 2, vous obtiendrez un quête pour récupérer <strong>le Perforeur</strong>, fusil de précision légendaire propre au chasseur également. Cela vous créditeras de 200 points d'estime en plus.
                                        </li>
                                    </ul>
                                    <li class="aceList">Collecter des données d'armes</li>
                                    <ul>
                                        <li>Réaliser 100 frags au revolver en ayant activer une <strong>télémétrie d'arme principale</strong> (que vous pouvez acheter auprès de votre armurier préféré)</li>
                                    </ul>
                                    <li class="aceList">Récupérez des pièces détachées</li>
                                    <ul>
                                        <li>Démantelez des revolvers rares ou légendaires pour récupérer les pièces d'armes nécessaires à l'obtention de l'As de Pique</li>
                                        <li>Si vous possédez encore des revolvers de l'année 1, c'est le moment de vous en débarasser, 2 armes légendaires démantelées valident la quête.</li>
                                    </ul>
                                </ol>
                            </div>
                        </div>
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