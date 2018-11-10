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
     public $id_u01cc_contribs = '';
     public $id_u01cc_categoriesContribs = '';

     public function __construct()
     {
         $database = database::getInstance();
         $this->pdo = $database->pdo;
     }

     public function addContent()
     {
         $query = 'INSERT INTO `u01cc_contribs` (`title`, `content`, `id_u01cc_users`, `id_u01cc_categoriesContribs`) '
                 . 'VALUES (:title, :content, :id_u01cc_users, :categories)';
         $addContent = $this->pdo->prepare($query);
         $addContent->bindValue(':title', $this->title, PDO::PARAM_STR);
         $addContent->bindValue(':content', $this->content, PDO::PARAM_STR);
         $addContent->bindValue(':categories', $this->id_u01cc_categoriesContribs, PDO::PARAM_STR);
         $addContent->bindValue(':id_u01cc_users', $this->id_u01cc_users, PDO::PARAM_STR);
         //exécution de la requète
         return $addContent->execute();
     }

     public function addRaidContent()
     {
         try {
             //début de la transaction
             //ajout de contenu dans la table raid
             $query = 'INSERT INTO `u01cc_contribs` (`title`, `content`, `id_u01cc_users`, `id_u01cc_categoriesContribs`) '
                     . 'VALUES (:title, :content, :id_u01cc_users, :categories)';
             $addContent = $this->pdo->prepare($query);
             $addContent->bindValue(':title', $this->title, PDO::PARAM_STR);
             $addContent->bindValue(':content', $this->content, PDO::PARAM_STR);
             $addContent->bindValue(':id_u01cc_users', $this->id_u01cc_users, PDO::PARAM_STR);
             $addContent->bindValue(':categories', $this->id_u01cc_categoriesContribs, PDO::PARAM_STR);
             //ajout de contenu dans la table raidSteps
             $query = 'INSERT INTO `u01cc_ra         $database->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
idSteps` (`raidStep`, `raidContent`, `id_u01cc_contribs`) '
                     . 'VALUES (:raidStep, :raidContent, :id_u01cc_contribs)';
             $addContent->bindValue(':raidStep', $this->raidStep, PDO::PARAM_STR);
             $addContent->bindValue(':raidContent', $this->raidContent, PDO::PARAM_STR);
             $addContent->bindValue(':id_u01cc_contribs', $this->id_u01cc_contribs, PDO::PARAM_STR);
             return $addRaidContent->execute();
         } catch (Exception $ex) {
             //annulation de la transaction en cas d'erreur
             $rollback();
             $ex->getMessage();
         }
     }

 }
 