<?php

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
     public $raidStep = '';
     public $contentStep = '';
     public $gamerTag = '';

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
      * méthode permettan l'affichage de contenu en attente de modération
      * @return typeboolean
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

     /**
      * méthode validant le contenu lors de la modération en modifiant le status (id_u01cc_status)
      * @return type boolean
      */
     public function confirmContent()
     {
         $query = 'UPDATE `u01cc_contribs` '
                 . 'SET `id_u01cc_status` = \'1\' '
                 . 'WHERE `u01cc_contribs`.`id` = :id';
         $confirmContent = $this->pdo->prepare($query);
         $confirmContent->bindValue(':id', $this->id, PDO::PARAM_INT);
         return $confirmContent->execute();
     }

     /**
      * méthode supprimant le contenu lors de la modération
      * @return type boolean
      */
     public function deleteContent()
     {
         $query = 'DELETE FROM `u01cc_contribs` '
                 . 'WHERE `u01cc_contribs`.`id` = :id';
         $deleteContent = $this->pdo->prepare($query);
         $deleteContent->bindValue(':id', $this->id, PDO::PARAM_INT);
         return $deleteContent->execute();
     }

     /**
      * methode affichant le contenu validé
      * @return type boolean
      */
     public function getTitleRaid()
     {
         $query = 'SELECT `u01cc_contribs`.`id` AS `id`, `title` '
                 . 'FROM `u01cc_contribs` '
                 . 'WHERE `id_u01cc_categoriesContribs` = \'1\' '
                 . 'AND `id_u01cc_status` = \'1\'';
         $getTitleRaid = $this->pdo->query($query);
         if (is_object($getTitleRaid))
         {
             $isObjectResult = $getTitleRaid->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function getRaidIntro()
     {
         $query = 'SELECT `u01cc_contribs`.`id` AS `id`, `title`, `content` '
                 . 'FROM `u01cc_contribs` '
                 . 'WHERE `id_u01cc_categoriesContribs` = \'1\' '
                 . 'AND `id_u01cc_status` = \'1\'';
         $getRaidIntro = $this->pdo->query($query);
         if (is_object($getRaidIntro))
         {
             $isObjectResult = $getRaidIntro->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function getRaidStep()
     {
         $query = 'SELECT `u01cc_contribs`.`id` AS `id`,  `gamerTag`, DATE_FORMAT(`u01cc_contribs`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `id_u01cc_categoriesContribs`, `id_u01cc_status`, `id_u01cc_users`, `u01cc_raidSteps`.`id` AS `nextId`, `id_u01cc_contribs`, `contentStep`, `raidStep` '
                 . 'FROM `u01cc_contribs` '
                 . 'INNER JOIN `u01cc_raidSteps` '
                 . 'ON `u01cc_contribs`.`id` = `id_u01cc_contribs` '
                 . 'INNER JOIN `u01cc_users` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'INNER JOIN `u01cc_categoriesContribs` '
                 . 'ON `id_u01cc_categoriesContribs` = `u01cc_categoriesContribs`.`id` '
                 . 'WHERE `id_u01cc_status` = \'1\' '
                 . 'AND `id_u01cc_categoriesContribs` = \'1\'';
         $getRaidStep = $this->pdo->query($query);
         if (is_object($getRaidStep))
         {
             $isObjectResult = $getRaidStep->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function getContribsById()
     {
         $query = 'SELECT `title`, `content`, `id_u01cc_categoriesContribs` '
                 . 'FROM `u01cc_contribs` '
                 . 'WHERE `id` = :id';
         $getContribsById = $this->pdo->prepare($query);
         $getContribsById->bindValue(':id', $this->id, PDO::PARAM_INT);
         $getContribsById->execute();
         if (is_object($getContribsById))
         {
             $isObjectResult = $getContribsById->fetch(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function updateIntroContribs()
     {
         $query = 'UPDATE `u01cc_contribs` '
                 . 'SET `id_u01cc_status` = \'2\', `title` = :title , `content` = :content '
                 . 'WHERE `id` = :id';
         $updateIntroContribs = $this->pdo->prepare($query);
         $updateIntroContribs->bindValue(':title', $this->title, PDO::PARAM_STR);
         $updateIntroContribs->bindValue(':content', $this->content, PDO::PARAM_STR);
         $updateIntroContribs->bindValue(':id', $this->id, PDO::PARAM_STR);
         return $updateIntroContribs->execute();
     }

 }
 