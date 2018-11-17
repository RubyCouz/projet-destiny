<?php

 /*
  * 
  */

 /**
  * Description of u01cc_contribs
  *
  * @author cedric
  */
 class u01cc_contribs {

     public $id = '';
     public $title = '';
     public $content = '';
     public $dateHour = '';
     public $id_u01cc_users = '';
     public $id_u01cc_categoriesContribs = '';
     public $id_u01cc_contribs = '';

     public function __construct()
     {
         $database = database::getInstance();
         $this->pdo = $database->pdo;
     }

     /**
      * ajout de contenu dans la table contribs
      * @return type boolean
      */
     public function addContent()
     {
         $state = false;
         $query = 'INSERT INTO `u01cc_contribs` (`title`, `content`, `dateHour`, `id_u01cc_users`, `id_u01cc_categoriesContribs`) '
                 . 'VALUES (:title, :content, :dateHour, :id_u01cc_users, :id_u01cc_categoriesContribs)';
         $addContent = $this->pdo->prepare($query);
         $addContent->bindValue(':title', $this->title, PDO::PARAM_STR);
         $addContent->bindValue(':content', $this->content, PDO::PARAM_STR);
         $addContent->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
         $addContent->bindValue(':id_u01cc_users', $this->id_u01cc_users, PDO::PARAM_INT);
         $addContent->bindValue(':id_u01cc_categoriesContribs', $this->id_u01cc_categoriesContribs, PDO::PARAM_INT);
         if ($addContent->execute())
         {
             $state = true;
         }
         return $state;
     }

     /**
      * affichage de contenu avant modération
      */
     public function viewNoModerationContent()
     {
         $query = 'SELECT `u01cc_contribs`.`id` AS `id`, `title`, `content`, DATE_FORMAT(`u01cc_contribs`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `gamerTag`, `u01cc_categoriesContribs`.`name` AS `name`, `id_u01cc_status` '
                 . 'FROM `u01cc_contribs` '
                 . 'LEFT JOIN `u01cc_users` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'LEFT JOIN `u01cc_categoriesContribs` '
                 . 'ON `id_u01cc_categoriesContribs` = `u01cc_categoriesContribs`.`id` '
                 . 'WHERE `id_u01cc_status` = \'2\' ';
         $viewNoModerationContent = $this->pdo->query($query);
         if (is_object($viewNoModerationContent))
         {
             $isObjectResult = $viewNoModerationContent->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function confirmContent()
     {
         $query = 'UPDATE `u01cc_contribs` '
                 . 'SET `id_u01cc_status` = \'1\' '
                 . 'WHERE `u01cc_contribs`.`id` = :id';
         $confirmContent = $this->pdo->prepare($query);
         $confirmContent->bindValue(':id', $this->id, PDO::PARAM_STR);
         return $confirmContent->execute();
     }

     public function deleteContent()
     {
         $query = 'DELETE FROM `u01cc_contribs` '
                 . 'WHERE `u01cc_contribs`.`id` = :id';
         $deleteContent = $this->pdo->prepare($query);
         $deleteContent->bindValue(':id', $this->id, PDO::PARAM_STR);
         return $deleteContent->execute();
     }

     public function deleteAllContent()
     {
         try {
             // début de la transaction
             $deleteAllContent = $this->pdo->beginTransaction();
             //suppression des données de la table contribs
             $query = 'DELETE FROM `u01cc_contribs` '
                     . 'WHERE `id` = :id';
             $deleteAllContent = $this->pdo->prepare($query);
             $deleteAllContent = bindValue(':id', $this->id, PDO::PARAM_INT);
             $deleteAllContent = execute();
             //suppression des données de la table raidStep
             $query = 'DELETE FROM `u01cc_raidSteps` '
                     . 'WHERE `id_u01cc_contribs` = :id_u01cc_contribs';
             $deleteAllContent = $this->pdo->prepare($query);
             $deleteAllContent = bindValue(':id_u01cc_contribs', $this->id_u01cc_contribs, PDO::PARAM_INT);
             $deleteAllContent->execute();
             //fin de la transaction et sauvegarde
             $deleteAllContent = $this->pdo->commit();
         } catch (Exception $ex) {
             //anullation en cas d'erreur sur une des suppressions
             $rollback();
             $ex->getMessage();
         }
     }

 }
 