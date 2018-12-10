<?php

 /**
  * Description of u01cc_raidSteps
  *
  * @author cedric
  */
 class u01cc_raidSteps {

     public $id = '';
     public $raidStep = '';
     public $contentStep = '';
     public $id_u01cc_contribs = '';
     public $id_u01cc_users = '';
     public $title = '';
     public $content = '';

     public function __construct()
     {
         $database = database::getInstance();
         $this->pdo = $database->pdo;
     }

     /**
      * ajoute la suite d'une contribution
      */
     public function addNextContent()
     {
         // on définit la requête permettant l'insertion dans la base de données
         $query = 'INSERT INTO `u01cc_raidSteps` (`raidStep`, `contentStep`, `id_u01cc_contribs`) '
                 . 'VALUES (:raidStep, :contentStep, :id_u01cc_contribs)';
         // on prépare la requête
         $addNextContent = $this->pdo->prepare($query);
         // on assigne les valeurs récupérées dans le formulaire au marqueur nominatif
         $addNextContent->bindValue(':raidStep', $this->raidStep, PDO::PARAM_STR);
         $addNextContent->bindValue(':contentStep', $this->contentStep, PDO::PARAM_STR);
         $addNextContent->bindValue(':id_u01cc_contribs', $this->id_u01cc_contribs, PDO::PARAM_INT);
         // on execute la requête
         return $addNextContent->execute();
     }

     public function getAddNextContent()
     {
         $query = 'SELECT `u01cc_raidSteps`.`id` AS `id`, `raidStep`, `contentStep`, DATE_FORMAT(`u01cc_contribs`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `gamerTag`, `u01cc_categoriesContribs`.`name` AS `name`, `id_u01cc_status`, `id_u01cc_contribs`, `title` '
                 . 'FROM `u01cc_raidSteps` '
                 . 'LEFT JOIN u01cc_contribs '
                 . 'ON `id_u01cc_contribs` = `u01cc_contribs`.`id` '
                 . 'LEFT JOIN `u01cc_users` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'LEFT JOIN `u01cc_categoriesContribs` '
                 . 'ON `id_u01cc_categoriesContribs` = `u01cc_categoriesContribs`.`id` '
                 . 'WHERE `id_u01cc_status` = \'2\'';
         $getAddNextContent = $this->pdo->query($query);
         if (is_object($getAddNextContent))
         {
             $isObjectResult = $getAddNextContent->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     /**
      * Méthode validant un ajout de contenu
      * @return type boolean 
      */
     public function confirmNextContent()
     {
         $query = 'UPDATE `u01cc_raidSteps` '
                 . 'SET `id_u01cc_status` = \'1\' '
                 . 'WHERE `u01cc_raidSteps`.`id` = :id';
         $confirmNextContent = $this->pdo->prepare($query);
         $confirmNextContent->bindValue(':id', $this->id, PDO::PARAM_STR);
         return $confirmNextContent->execute();
     }

     /**
      * Méthode permettant la suppression d'une étape
      * @return type boolean
      */
     public function deleteStepContent()
     {
         //on indique la requète pour la suppression de données
         $query = 'DELETE FROM `u01cc_raidSteps` '
                 . 'WHERE `u01cc_raidSteps`.`id` = :id';
         //on prépare la requète
         $deleteNextContent = $this->pdo->prepare($query);
         // on assigne un valeur au marquer nominatif
         $deleteNextContent->bindValue(':id', $this->id, PDO::PARAM_STR);
         // on exécute la requète
         return $deleteNextContent->execute();
     }

     public function getStepById()
     {
         $query = 'SELECT `raidStep`, `contentStep`, `id_u01cc_contribs` '
                 . 'FROM `u01cc_raidSteps` '
                 . 'WHERE `id` = :id';
         $getStepById = $this->pdo->prepare($query);
         $getStepById->bindValue(':id', $this->id, PDO::PARAM_INT);
         $getStepById->execute();
         if (is_object($getStepById))
         {
             $isObjectResult = $getStepById->fetch(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function updateStepContent()
     {
                           // on définit la requête permettant la modifcation dans la base de données
         $query = 'UPDATE `u01cc_raidSteps` '
                 . 'SET `raidStep` = :raidStep , `contentStep` = :contentStep '
                 . 'WHERE `id` = :id';
         // on prépare la requète
         $updateIntroContribs = $this->pdo->prepare($query);
         $updateIntroContribs->bindValue(':raidStep', $this->raidStep, PDO::PARAM_STR);
         $updateIntroContribs->bindValue(':contentStep', $this->contentStep, PDO::PARAM_STR);
         $updateIntroContribs->bindValue(':id', $this->id, PDO::PARAM_STR);
         //on exécute la requète
         return $updateIntroContribs->execute();
     }

     public function getStepInfo()
     {
         $query = 'SELECT `id_u01cc_contribs`, `raidStep`, `u01cc_raidSteps`.`id` AS `id` '
                 . 'FROM `u01cc_raidSteps` '
                 . 'WHERE `id_u01cc_contribs` = :id_u01cc_contribs';
         $getStepInfo = $this->pdo->prepare($query);
         $getStepInfo->bindValue(':id_u01cc_contribs', $this->id_u01cc_contribs, PDO::PARAM_INT);
         $getStepInfo->execute();
         if (is_object($getStepInfo))
         {
             $isObjectResult = $getStepInfo->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     /**
      * méthode permettan la récupération des quêtes (intro et étapes)
      * @return type boolean
      */
     public function getQuest()
     { //on définit la requête qui va permettre l'affichage des données
         $query = 'SELECT `rs`.`id`, `title`, `content`, DATE_FORMAT(`c`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `id_u01cc_status`, `raidStep`, `contentStep`, `id_u01cc_users`, `id_u01cc_contribs`, `gamerTag` '
                 . 'FROM `u01cc_raidSteps` AS `rs` '
                 . 'RIGHT JOIN `u01cc_contribs` AS `c` '
                 . 'ON `rs`.`id_u01cc_contribs` = `c`.`id` '
                 . 'RIGHT JOIN `u01cc_users` '
                 . 'ON `id_u01cc_users` = `u01cc_users`.`id`'
                 . 'WHERE `id_u01cc_status` = 1 '
                 . 'AND `id_u01cc_categoriesContribs` = 2 '
                 . 'AND `id_u01cc_contribs` = :id_u01cc_contribs';
         //préparation de la requête
         $getQuest = $this->pdo->prepare($query);
         // on attribue une valeur au marqueur nominatif
         $getQuest->bindValue(':id_u01cc_contribs', $this->id_u01cc_contribs, PDO::PARAM_INT);
         // on execute la requete
         $getQuest->execute();
         // si le resultat est un objet
         if (is_object($getQuest))
         { // la requête va chercher les informations dans la base de données
             $isObjectResult = $getQuest->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     /**
      * méthode permettant la récupération des raids (intro et étapes)
      * @return type boolean
      */
     public function getRaid()
     {
         $query = 'SELECT `rs`.`id`, `title`, `content`, DATE_FORMAT(`c`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `id_u01cc_status`, `raidStep`, `contentStep`, `id_u01cc_users`, `id_u01cc_contribs`, `gamerTag` '
                 . 'FROM `u01cc_raidSteps` AS `rs` '
                 . 'RIGHT JOIN `u01cc_contribs` AS `c` '
                 . 'ON `rs`.`id_u01cc_contribs` = `c`.`id` '
                 . 'RIGHT JOIN `u01cc_users` '
                 . 'ON `id_u01cc_users` = `u01cc_users`.`id`'
                 . 'WHERE `id_u01cc_status` = 1 '
                 . 'AND `id_u01cc_categoriesContribs` = 1 '
                 . 'AND `id_u01cc_contribs` = :id_u01cc_contribs';
         $getRaid = $this->pdo->prepare($query);
         $getRaid->bindValue(':id_u01cc_contribs', $this->id_u01cc_contribs, PDO::PARAM_INT);
         $getRaid->execute();
         if (is_object($getRaid))
         {
             $isObjectResult = $getRaid->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function getTuto()
     {
         $query = 'SELECT `rs`.`id`, `title`, `content`, DATE_FORMAT(`c`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `id_u01cc_status`, `raidStep`, `contentStep`, `id_u01cc_users`, `id_u01cc_contribs`, `gamerTag` '
                 . 'FROM `u01cc_raidSteps` AS `rs` '
                 . 'RIGHT JOIN `u01cc_contribs` AS `c` '
                 . 'ON `rs`.`id_u01cc_contribs` = `c`.`id` '
                 . 'RIGHT JOIN `u01cc_users` '
                 . 'ON `id_u01cc_users` = `u01cc_users`.`id`'
                 . 'WHERE `id_u01cc_status` = 1 '
                 . 'AND `id_u01cc_categoriesContribs` = 3 '
                 . 'AND `id_u01cc_contribs` = :id_u01cc_contribs';
         $getTuto = $this->pdo->prepare($query);
         $getTuto->bindValue(':id_u01cc_contribs', $this->id_u01cc_contribs, PDO::PARAM_INT);
         $getTuto->execute();
         if (is_object($getTuto))
         {
             $isObjectResult = $getTuto->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function __destruct()
     {
         $this->pdo = NULL;
     }

 }
 