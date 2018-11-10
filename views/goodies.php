<?php
 include 'header.php';
 include 'goodiesController.php';
?>

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

         function displayArray($cardArray)
         {
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
         foreach ($card as $info => $cardArray)
         {
             ?>
             <div class="col s12 m12 l4">
             <?= displayArray($cardArray) ?>
             </div>
 <?php } ?>
    </div>
</div>
<?php
 include 'footer';
?>
      