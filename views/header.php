<?php
 session_start();
 include_once '../configuration.php';
 include_once '../controllers/headerController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Destiny Project</title>
        <link rel="stylesheet" href="../assets/css/materialize.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>
    <body>
        <!-- Dropdown lore Structure -->
        <ul id="dropdownLore" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'histoire.php?id=' . $_SESSION['id'] : 'histoire.php' ?>"  title="<?= LINK_STORY ?>"><?= NAV_STORY ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'guardians.php?id=' . $_SESSION['id'] : 'guardians.php' ?>" title="<?= LINK_GUARDIAN ?>"><?= NAV_GUARDIAN ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'ennemies.php?id=' . $_SESSION['id'] : 'ennemies.php' ?>" title="<?= LINK_ENNEMIES ?>"><?= NAV_ENNEMIES ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'factions.php?id=' . $_SESSION['id'] : 'factions.php' ?>" title="<?= LINK_FACTION ?>"><?= NAV_FACTION ?></a></li>
        </ul>
        <!-- Dropdown tuto Structure -->
        <ul id="dropdownTips" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'quest.php?id=' . $_SESSION['id'] : 'quest.php' ?>" title="<?= LINK_QUESTS ?>"><?= NAV_QUESTS ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'raid.php?id=' . $_SESSION['id'] : 'raid.php' ?>" title="<?= LINK_RAID ?>"><?= NAV_RAID ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'tuto.php?id=' . $_SESSION['id'] : 'tuto.php' ?>" title="<?= LINK_TUTO ?>"><?= NAV_TUTO ?></a></li>
        </ul>
        <!-- Dropdown contribution Structure -->
        <ul id="dropdownContrib" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'video.php?id=' . $_SESSION['id'] : 'video.php' ?>" title="<?= LINK_VIDEO ?>"><?= NAV_VIDEO ?></a></li>
<!--                        <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'streaming.php?id=' . $_SESSION['id'] : 'streaming.php' ?>" title="<?= LINK_STREAMING ?>"><?= NAV_STREAMING ?></a></li>-->
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'artwork.php?id=' . $_SESSION['id'] : 'artwork.php' ?>" title="<?= LINK_ARTWORKS ?>"><?= NAV_ARTWORKS ?></a></li>
        </ul>
        <!--                     Dropdown forum Structure 
                            <ul id="dropdownForum" class="dropdown-content">
                                <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'forum.php?id=' . $_SESSION['id'] : 'forum.php' ?>" title="<?= LINK_FORUM ?>"><?= NAV_FORUM ?></a></li>
                                <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'tchat.php?id=' . $_SESSION['id'] : 'tchat.php' ?>" title="<?= LINK_TCHAT ?>"><?= NAV_TCHAT ?></a></li>
                            </ul>-->


        <!-- dorpdown mobil -->
        <!-- Dropdown lore Structure -->
        <ul id="dropdownMobilLore" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'histoire.php?id=' . $_SESSION['id'] : 'histoire.php' ?>"  title="<?= LINK_STORY ?>"><?= NAV_STORY ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'guardians.php?id=' . $_SESSION['id'] : 'guardians.php' ?>" title="<?= LINK_GUARDIAN ?>"><?= NAV_GUARDIAN ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'ennemies.php?id=' . $_SESSION['id'] : 'ennemies.php' ?>" title="<?= LINK_ENNEMIES ?>"><?= NAV_ENNEMIES ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'factions.php?id=' . $_SESSION['id'] : 'factions.php' ?>" title="<?= LINK_FACTION ?>"><?= NAV_FACTION ?></a></li>
        </ul>
        <!-- Dropdown tuto Structure -->
        <ul id="dropdownMobilTips" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'quest.php?id=' . $_SESSION['id'] : 'quest.php' ?>" title="<?= LINK_QUESTS ?>"><?= NAV_QUESTS ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'raid.php?id=' . $_SESSION['id'] : 'raid.php' ?>" title="<?= LINK_RAID ?>"><?= NAV_RAID ?></a></li>
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'tuto.php?id=' . $_SESSION['id'] : 'tuto.php' ?>" title="<?= LINK_TUTO ?>"><?= NAV_TUTO ?></a></li>
        </ul>
        <!-- Dropdown contribution Structure -->
        <ul id="dropdownMobilContrib" class="dropdown-content">
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'video.php?id=' . $_SESSION['id'] : 'video.php' ?>" title="<?= LINK_VIDEO ?>"><?= NAV_VIDEO ?></a></li>
<!--                        <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'streaming.php?id=' . $_SESSION['id'] : 'streaming.php' ?>" title="<?= LINK_STREAMING ?>"><?= NAV_STREAMING ?></a></li>-->
            <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'artwork.php?id=' . $_SESSION['id'] : 'artwork.php' ?>" title="<?= LINK_ARTWORKS ?>"><?= NAV_ARTWORKS ?></a></li>
        </ul>
        <!--                     Dropdown forum Structure 
                            <ul id="dropdownMobilForum" class="dropdown-content">
                                <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'forum.php?id=' . $_SESSION['id'] : 'forum.php' ?>" title="<?= LINK_FORUM ?>"><?= NAV_FORUM ?></a></li>
                                <li><a class="waves-effect waves-dark" href="<?= isset($_SESSION['isConnect']) ? 'tchat.php?id=' . $_SESSION['id'] : 'tchat.php' ?>" title="<?= LINK_TCHAT ?>"><?= NAV_TCHAT ?></a></li>
                            </ul>-->

        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="home.php" class="brand-logo"><img src="../assets/img/logo.png" title="Logo Destiny" alt="Représentation du logo Destiny"/></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <!--                            <form>
                                                            <div class="input-field">
                                                                <input id="search" type="search" required />
                                                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                                                <i class="material-icons">close</i>
                                                            </div>
                                                        </form>-->
                        </li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownLore" title="<?= LINK_LORE ?>"><?= NAVBAR_LORE ?><i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownTips" title="<?= LINK_TUTO ?>"><?= NAVBAR_TUTO ?><i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdownContrib" title="<?= LINK_CONTRIBS ?>"><?= NAVBAR_CONTRIBS ?><i class="material-icons right">arrow_drop_down</i></a></li>
    <!--                        <li><a class="dropdown-button" href="#!" data-activates="dropdownForum" title="<?= LINK_FORUM ?>"><?= NAVBAR_FORUM ?><i class="material-icons right">arrow_drop_down</i></a></li>-->
                        <li>                      
                            <?php
                             if (!isset($_SESSION['isConnect']))
                             {
                                 ?>
                                 <a class="waves-effect waves-dark btn" href="subscribe.php" title="<?= LINK_SUBSCRIBE ?>"><?= NAV_SUBSCRIBE ?></a>
                                 <a class="waves-effect waves-dark btn modal-trigger" href="#login" title="<?= LINK_CONNECT ?>"><?= NAV_CONECT ?></a>
                                 <?php
                             }
                             else
                             {
                                 ?>
                                 <span class="hello"><?= sprintf(NAV_WELCOME, $_SESSION['gamerTag']) ?></span>
                             </li>
                             <li><a class="waves-effect waves-dark btn modal-trigger" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect" title="<?= LINK_DISCONNECT ?>"><?= NAV_DISCONECT ?></a></li>
                             <?php
                         }
                        ?>
                    </ul>                  
                </div>
            </nav>
        </div>
        <!-- menu side-bar -->
        <ul class="side-nav" id="mobile-demo">
            <li>
                <!--                            <form>
                                                <div class="input-field">
                                                    <input id="search" type="search" required />
                                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                                    <i class="material-icons">close</i>
                                                </div>
                                            </form>-->
            </li>
            <li><a class="dropdown-button-mobil" href="#!" data-activates="dropdownMobilLore" title="<?= LINK_LORE ?>"><?= NAVBAR_LORE ?><i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button-mobil" href="#!" data-activates="dropdownMobilTips" title="<?= LINK_TUTO ?>"><?= NAVBAR_TUTO ?><i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button-mobil" href="#!" data-activates="dropdownMobilContrib" title="<?= LINK_CONTRIBS ?>"><?= NAVBAR_CONTRIBS ?><i class="material-icons right">arrow_drop_down</i></a></li>
<!--                        <li><a class="dropdown-button" href="#!" data-activates="dropdownMobilForum" title="<?= LINK_FORUM ?>"><?= NAVBAR_FORUM ?><i class="material-icons right">arrow_drop_down</i></a></li>-->
            <li>                      
                <?php
                 if (!isset($_SESSION['isConnect']))
                 {
                     ?>
                     <a class="waves-effect waves-dark btn" href="subscribe.php" title="<?= LINK_SUBSCRIBE ?>"><?= NAV_SUBSCRIBE ?></a>
                     <a class="waves-effect waves-dark btn modal-trigger" href="#login" title="<?= LINK_CONNECT ?>"><?= NAV_CONECT ?></a>
                     <?php
                 }
                 else
                 {
                     ?>
                     <span class="hello"><?= sprintf(NAV_WELCOME, $_SESSION['gamerTag']) ?></span>
                 </li>
                 <li><a class="waves-effect waves-dark btn modal-trigger" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect" title="<?= LINK_DISCONNECT ?>"><?= NAV_DISCONECT ?></a></li>
                 <?php
             }
            ?>
        </ul>
        <?php
         if (isset($_SESSION['isConnect']))
         {
             ?>
             <!-- menu interaction utilisateur --> 
             <div class="fixed-action-btn toolbar">
                 <a class="btn-floating">
                     <i class="material-icons large">menu</i>
                 </a>
                 <ul>
                     <li class="waves-effect waves-dark menu"><a href="<?= 'updateProfil.php?id=' . $_SESSION['id'] ?>" title="<?= LINK_PROFIL ?>"><small class="hide-on-med-and-down"><?= POP_PROFIL ?></small><i class="material-icons right">person</i></a></li>
     <!--                     <li class="waves-effect waves-dark menu"><a href="historique.php" title="<?= LINK_HISTORICAL ?>"><small class="hide-on-med-and-down"><?= POP_HISTORICAL ?></small><i class="material-icons right">assignment</i></a></li>-->
                     <li class="waves-effect waves-dark menu"><a href="<?= 'addContent.php?id=' . $_SESSION['id'] ?>" title="<?= LINK_ADD_CONTRIBS ?>"><small class="hide-on-med-and-down"><?= POP_ADD_CONTRIBS ?></small><i class="material-icons right">publish</i></a></li>
                     <?php
                     if ($_SESSION['role'] == 1 || $_SESSION['role'] == 3)
                     {
                         ?>
                         <li class="waves-effect waves-dark menu"><a href="moderation.php" title="<?= LINK_MOD ?>"><small class="hide-on-med-and-down"><?= POP_MOD ?></small><i class="material-icons right">check</i></a></li>
                         <li class="waves-effect waves-dark menu"><a href="profilList.php" title="<?= LINK_LIST ?>"><small class="hide-on-med-and-down"><?= POP_LIST ?></small><i class="material-icons right">supervisor_account</i></a></li>
                         <?php
                     }
                     ?>
                 </ul>
             </div>
             <?php
         }
        ?>
        <!-- login modal -->
        <div id="login" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4><?= FORM_TITLE_CONNEXION ?></h4>
                <!-- formulaire de connexion -->
                <div class="row" id="#">
                    <form action="<?= isset($_SESSION['isConnect']) ? $_SERVER['PHP_SELF'] . '?id=' . $_SESSION['id'] : '' ?>" method="POST" class="col s12 m12 l12">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <input id="gamerTag" type="text" name="gamerTag" class="validate" />
                                <label for="gamerTag"><?= FORM_GT_CONNEXION ?> :</label>
                                <small class="error"><?= isset($_POST['submit']) && isset($connexionError['gamerTag']) ? $connexionError['gamerTag'] : '' ?></small>          
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <input id="password" type="password" class="validate" name="password" />
                                <label for="password"><?= FORM_PASSWORD_CONNEXION ?> :</label>
                                <small class="error"><?= isset($_POST['submit']) && isset($connexionError['password']) ? $connexionError['password'] : '' ?></small>          
                            </div>
                        </div>
                        <div class="row" id="#">
                            <div class="col s12 m12 l12" id="#">
                                <input type="checkbox" id="remind" name="rememberMe" />
                                <label for="remind"><?= FORM_REMIND_CONNEXION ?></label>                                
                            </div>
                        </div>
                        <div class="row right-align">
                            <div class="col s12 m12 l12">
                                <input type="submit" class="right-align waves-effect waves-red btn-flat" value="<?= FORM_CONNECT?>" name="connect" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <a href="subscribe.php" title="<?= FORM_SIGNIN ?>"><?= FORM_SUBSCRIBE_CONNEXION ?></a>
                    </div>
                </div>
            </div>
        </div>
