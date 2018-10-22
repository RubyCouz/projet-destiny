<?php
include 'goodiesController.php';
?>
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
                        <!-- panier Modal Trigger -->
                        <li><a class=" modal-trigger" href="#cart"><i class="material-icons "> shopping_cart</i></a></li>
                        <li><a class="waves-effect waves-dark btn modal-trigger" href="#login">Connexion</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#destiny">Destiny</a></li>
                        <li><a href="#destiny2">Destiny 2</a></li>
                    </ul>
                </div>
                <!--  <div class="nav-content">
                      <ul class="tabs tabs-transparent">
                          <li class="tab"><a href="#destiny">Destiny</a></li>                            
                          <li class="tab"><a href="#destiny2">Destiny 2</a></li>
                      </ul>
                  </div> -->
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
        <!--affichage des articles à l'aide de cards -->
        <div class="container" id="#">
            <div class="row justify-content-around" id="#">
                <?php

                function displayArray($cardArray) {
                    //modèle pour une card produit
                    ?>
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <!-- card -->
                            <div class="card card-panel hoverable">
                                <!-- section pour l'image --> 
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?= $cardArray['picture'] ?>" title="<?= $cardArray['title'] ?>" alt="<?= $cardArray['alt'] ?>" />
                                </div>
                                <!-- contenu de la card -->
                                <div class="card-content">
                                    <span class="card-title activator"><?= $cardArray['title'] ?><i class="material-icons right">more_vert</i>
                                    </span>
                                <!--    <p> <?= $cardArray['description'] ?></p> -->
                                    <div class="row right-align" id="#">
                                        <div class="col s12 m12 l12" id="#">
                                            <p><?= $cardArray['price'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row center-align" id="#">
                                        <div class="col s12 m12 l12" id="#">
                                            <div class="card-action" id="#">
                                                <form action="goodies.php" method="POST">
                                                    <label for="add"></label>
                                                    <input type="submit" id="add" class="waves-effect waves-dark btn add" value="Ajouter au panier" />
                                                </form>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- affichage de la description du produit en cliquant sur la photo -->
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Description<i class="material-icons right">close</i></span>
                                    <p> <?= $cardArray['description'] ?><br />
                                    <p> <?= $cardArray['descriptionList'] ?></p>
                                    <div class="row valign-wrapper">
                                        <!-- pour affichage des miniatures -->
                                        <div class="col s12 m12 l4">
                                            <img class="goodiesPicMin" src=" <?= $cardArray['picture'] ?>" title="<?= $cardArray['title'] ?>" alt="<?= $cardArray['alt'] ?>" />
                                        </div>
                                        <div class="col s12 m12 l4">
                                            <img class="goodiesPicMin" src=" <?= $cardArray['minPic1'] ?>" title="<?= $cardArray['title'] ?>" alt="<?= $cardArray['alt'] ?>" />
                                        </div>
                                        <div class="col s12 m12 l4">
                                            <img class="goodiesPicMin" src="<?= $cardArray['minPic2'] ?>" title="<?= $cardArray['title'] ?>" alt="<?= $cardArray['alt'] ?>" />
                                        </div>
                                    </div>
                                    <div class="row right-align" id="#">
                                        <div class="col s12 m12 l12" id="#">
                                            <p> <?= $cardArray['price'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row left-align" id="#">
                                        <div class="col s12 m12 l12" id="#">
                                            <div class="card-action" id="#">
                                                <form action="goodies.php" method="POST">
                                                    <label for="add"></label>
                                                    <input type="submit" id="add" class="waves-effect waves-dark btn addCart" value="Ajouter au panier" />
                                                </form>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
                foreach ($card as $info => $cardArray) {
                    ?>
                    <div class="col s12 m12 l4">
                        <?= displayArray($cardArray) ?>
                    </div>
                <?php } ?>
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
