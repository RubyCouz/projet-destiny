<?php
 session_start();
 include_once '../configuration.php';
 include_once '../controllers/headerController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="../assets/css/materialize.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="nav-extended">
                <!-- Dropdown lore Structure -->
                <ul id="dropdownLore" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'histoire.php?id=' . $_SESSION['id'] : 'histoire.php' ?>">Histoire</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'guardians.php?id=' . $_SESSION['id'] : 'guardians.php' ?>">Gardiens et protagonistes</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'ennemies.php?id=' . $_SESSION['id'] : 'ennemies.php' ?>">Factions ennemies</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'factions.php?id=' . $_SESSION['id'] : 'factions.php' ?>">Factions et marchands</a></li>
                </ul>
                <!-- Dropdown tuto Structure -->
                <ul id="dropdownTips" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'quest.php?id=' . $_SESSION['id'] : 'quest.php' ?>">Quêtes</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'raid.php?id=' . $_SESSION['id'] : 'raid.php' ?>">Raids</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'tuto.php?id=' . $_SESSION['id'] : 'tuto.php' ?>">Tutoriels</a></li>
                </ul>
                <!-- Dropdown contribution Structure -->
                <ul id="dropdownContrib" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'video.php?id=' . $_SESSION['id'] : 'video.php' ?>">Vidéos</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'streaming.php?id=' . $_SESSION['id'] : 'streaming.php' ?>">Streaming</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'artwork.php?id=' . $_SESSION['id'] : 'artwork.php' ?>">Artworks</a></li>
                </ul>
                <!-- Dropdown forum Structure -->
                <ul id="dropdownForum" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'forum.php?id=' . $_SESSION['id'] : 'forum.php' ?>">catégories</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'tchat.php?id=' . $_SESSION['id'] : 'tchat.php' ?>">Tchat</a></li>
                </ul>
                <!-- Dropdown profil structure -->
                <ul id="dropdownProfil" class="dropdown-content">
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'profil.php?id=' . $_SESSION['id'] : 'profil.php' ?>">Profil</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'farm.php?id=' . $_SESSION['id'] : 'farm.php' ?>">Historique</a></li>
                    <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'addContent.php?id=' . $_SESSION['id'] : 'histoire.php' ?>">Ajouter un contenu</a>
                    </li>
                </ul>

                <div class="nav-wrapper">
                    <a href="home.php" class="brand-logo"><img src="../assets/img/logo.png" title="Logo Destiny" alt="Représentation du logo Destiny"/></a>
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
                        <li><a class="" href="goodies.php">Goodies</a></li>
                        <!-- panier Modal Trigger -->
                        <li><a class="modal-trigger" href="#cart"><i class="material-icons "> shopping_cart</i></a></li>
                        <!-- <li><a href="#">Tchat</a></li> -->
                        <li>                      
                            <?php
                             if (!isset($_SESSION['isConnect']))
                             {
                                 ?>
                                 <a class="waves-effect waves-dark btn modal-trigger" href="#login"><?= NAV_CONECT ?></a>
                                 <?php
                             }
                             else
                             {
                                 ?>
                                 <a class="dropdown-button" href="#!" data-activates="dropdownProfil"><?= sprintf(NAV_WELCOME, $_SESSION['gamerTag']) ?></a>
                             </li>
                             <li><a class="waves-effect waves-dark btn modal-trigger" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect"><?= NAV_DISCONECT ?></a></li>
                             <?php
                         }
                        ?>
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
                    <form action="<?= isset($_SESSION['isConnect']) ? $_SERVER['PHP_SELF'] . '?id=' . $_SESSION['id'] : '' ?>" method="POST" class="col s12 m12 l12">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <input id="gamerTag" type="text" name="gamerTag" class="validate" />
                                <label for="gamerTag">Pseudo :</label>
                                <small class="error"><?= isset($_POST['submit']) && isset($formError['gamerTag']) ? $formError['gamerTag'] : '' ?></small>          
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <input id="password" type="password" class="validate" name="password" />
                                <label for="password">Mot de passe :</label>
                                <small class="error"><?= isset($_POST['submit']) && isset($formError['password']) ? $formError['password'] : '' ?></small>          
                            </div>
                        </div>
                        <div class="row" id="#">
                            <div class="col s12 m12 l12" id="#">
                                <input type="checkbox" id="remind" />
                                <label for="remind">Se souvenir de moi</label>                                
                            </div>
                        </div>
                        <div class="row right-align">
                            <div class="col s12 m12 l12">
                                <input type="submit" class="right-align waves-effect waves-red btn-flat" value="Se connecter"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <a href="subscribe.php" title="Inscrivez-vous!!">Pas encore membre? Inscrivez-vous!!</a>
                    </div>
                </div>
            </div>
        </div>

