<?php
 /**
  * Description of u01cc_raidSteps
  *
  * @author cedric
  */
 class u01cc_raidSteps {
     public $id = '';
     public $raidStep ='';
     public $contentStep ='';
     public $id_u01cc_contribs ='';
     
     public function __construct() {
          $database = database::getInstance();
         $this->pdo = $database->pdo;
     }
     /**
      * ajoute la suite d'un contenu
      */
     public function addNextContent() {
         $query = 'INSERT INTO `u01cc_raidSteps` (`raidStep`, `contentStep`, `id_u01cc_contribs`) '
                 . 'VALUES (:raidStep, :contentStep, :id_u01cc_contribs)';
         $addNextContent = $this->pdo->prepare($query);
         $addNextContent->bindValue(':raidStep', $this->raidStep, PDO::PARAM_STR);  
         $addNextContent->bindValue(':contentStep', $this->contentStep, PDO::PARAM_STR);  
         $addNextContent->bindValue(':id_u01cc_contribs', $this->id_u01cc_contribs, PDO::PARAM_INT);  
         return $addNextContent->execute();
     }
     public function getAddNextContent() {
         $query = $query = 'SELECT `u01cc_raidSteps`.`id` AS `id`, `raidStep`, `contentStep`, DATE_FORMAT(`u01cc_contribs`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `gamerTag`, `u01cc_categoriesContribs`.`name` AS `name`, `id_u01cc_status`, `id_u01cc_contribs`, `title` '
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
     public function confirmNextContent() {
          $query = 'UPDATE `u01cc_raidSteps` '
                 . 'SET `id_u01cc_status` = \'1\' '
                 . 'WHERE `u01cc_raidSteps`.`id` = :id';
         $confirmNextContent = $this->pdo->prepare($query);
         $confirmNextContent->bindValue(':id', $this->id, PDO::PARAM_STR);
         return $confirmNextContent->execute();
     }
     public function deleteNextContent() {
          $query = 'DELETE FROM `u01cc_raidSteps` '
                 . 'WHERE `u01cc_raidSteps`.`id` = :id';
         $deleteNextContent = $this->pdo->prepare($query);
         $deleteNextContent->bindValue(':id', $this->id, PDO::PARAM_STR);
         return $deleteNextContent->execute();
     }
     public function getStepById() {
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
     public function updateStepContent() {
         $query = 'UPDATE `u01cc_raidSteps` '
                 . 'SET `raidStep` = :raidStep , `contentStep` = :contentStep '
                 . 'WHERE `id` = :id';
         $updateIntroContribs = $this->pdo->prepare($query);
         $updateIntroContribs->bindValue(':raidStep', $this->raidStep, PDO::PARAM_STR);
         $updateIntroContribs->bindValue(':contentStep', $this->contentStep, PDO::PARAM_STR);
         $updateIntroContribs->bindValue(':id', $this->id, PDO::PARAM_STR);
         return $updateIntroContribs->execute();
     }
 }
 