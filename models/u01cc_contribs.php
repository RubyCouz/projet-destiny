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
         // on définit la requête permettant l'insertion dans la base de données
         $query = 'INSERT INTO `u01cc_contribs` (`title`, `content`, `dateHour`, `id_u01cc_users`, `id_u01cc_categoriesContribs`) '
                 . 'VALUES (:title, :content, :dateHour, :id_u01cc_users, :id_u01cc_categoriesContribs)';
         // on prépare la requête
         $addContent = $this->pdo->prepare($query);
         // on assigne les valeurs récupérées dans le formulaire au marqueur nominatif
         $addContent->bindValue(':title', $this->title, PDO::PARAM_STR);
         $addContent->bindValue(':content', $this->content, PDO::PARAM_STR);
         $addContent->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
         $addContent->bindValue(':id_u01cc_users', $this->id_u01cc_users, PDO::PARAM_INT);
         $addContent->bindValue(':id_u01cc_categoriesContribs', $this->id_u01cc_categoriesContribs, PDO::PARAM_INT);
         // on execute la requête
         return $addContent->execute(); 
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
      * méthode supprimant une contribution
      * @return type boolean
      */
     public function deleteContent()
     {//on indique la requète permettant la suppression de données
         $query = 'DELETE FROM `u01cc_contribs` '
                 . 'WHERE `u01cc_contribs`.`id` = :id';
         // prepare la requète
         $deleteContent = $this->pdo->prepare($query);
         //on assigne une valeur au marquer nominatif
         $deleteContent->bindValue(':id', $this->id, PDO::PARAM_INT);
         //on execute la requète
         return $deleteContent->execute();
     }

     /**
      * methode affichant le titre d'un raid
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

     /**
      * méthode permettant l'affichage du titre d'une quête
      * @return type boolean
      */
     public function getTitleQuest()
     {
         $query = 'SELECT `u01cc_contribs`.`id` AS `id`, `title` '
                 . 'FROM `u01cc_contribs` '
                 . 'WHERE `id_u01cc_categoriesContribs` = \'2\' '
                 . 'AND `id_u01cc_status` = \'1\'';
         $getTitleRaid = $this->pdo->query($query);
         if (is_object($getTitleRaid))
         {
             $isObjectResult = $getTitleRaid->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     /**
      * méthode affichant le titre d'un tuto
      * @return type boolean
      */
     public function getTitleTuto()
     {
         $query = 'SELECT `u01cc_contribs`.`id` AS `id`, `title` '
                 . 'FROM `u01cc_contribs` '
                 . 'WHERE `id_u01cc_categoriesContribs` = \'3\' '
                 . 'AND `id_u01cc_status` = \'1\'';
         $getTitleTuto = $this->pdo->query($query);
         if (is_object($getTitleTuto))
         {
             $isObjectResult = $getTitleTuto->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     /**
      * méthode récupérant l'id d'une quête (table contribs=
      * @return type boolean
      */
     public function getQuestId()
     {
         $query = 'SELECT `u01cc_contribs`.`id` AS `id` '
                 . 'FROM `u01cc_contribs` '
                 . 'WHERE `id_u01cc_categoriesContribs` = \'2\' '
                 . 'AND `id_u01cc_status` = \'1\' '
                 . 'AND `id` = :id';
         $getQuestId = $this->pdo->prepare($query);
         $getQuestId->bindValue(':id', $this->id, PDO::PARAM_INT);
         $getQuestId->execute();
         if (is_object($getQuestId))
         {
             $isObjectResult = $getQuestId->fetchAll(PDO::FETCH_OBJ);
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

     /**
      * méthode permettant la récupération du contenu de la table contribs (sert d'intro au tuto)
      * @return type boolean
      */
     public function getQuestIntro()
     {
         $query = 'SELECT `u01cc_contribs`.`id` AS `id`, `title`, `content`, `id_u01cc_users` '
                 . 'FROM `u01cc_contribs` '
                 . 'WHERE `id_u01cc_categoriesContribs` = \'2\' '
                 . 'AND `id` = :id '
                 . 'AND `id_u01cc_status` = \'1\'';
         $getQuestIntro = $this->pdo->prepare($query);
         $getQuestIntro->bindValue(':id', $this->id, PDO::PARAM_INT);
         $getQuestIntro->execute();
         if (is_object($getQuestIntro))
         {
             $isObjectResult = $getQuestIntro->fetch(PDO::FETCH_OBJ);
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
/**
 * méthode permettant la mise  à jour d'une contribution
 * @return type
 */
     public function updateIntroContribs()
     {
                  // on définit la requête permettant la modifcation dans la base de données
         $query = 'UPDATE `u01cc_contribs` '
                 . 'SET `id_u01cc_status` = \'2\', `title` = :title , `content` = :content '
                 . 'WHERE `id` = :id';
         // on prépare la requète
         $updateIntroContribs = $this->pdo->prepare($query);
         $updateIntroContribs->bindValue(':title', $this->title, PDO::PARAM_STR);
         $updateIntroContribs->bindValue(':content', $this->content, PDO::PARAM_STR);
         $updateIntroContribs->bindValue(':id', $this->id, PDO::PARAM_STR);
         // on execute la requète
         return $updateIntroContribs->execute();
     }

     /**
      * méthode permettant la récupération des vidéos postées par les utilisateurs.
      * @return type boolean
      */
     public function getUsersVideo()
     {
         $query = 'SELECT `u01cc_users`.`id`, `gamerTag`, `title`, `content`, DATE_FORMAT(`u01cc_contribs`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `u01cc_contribs`.`id`, `id_u01cc_categoriesContribs`, `id_u01cc_users` '
                 . 'FROM `u01cc_contribs` '
                 . 'INNER JOIN `u01cc_users` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'WHERE `id_u01cc_categoriesContribs` = 6 '
                 . 'AND `id_u01cc_status` = 1 '
                 . 'AND `id_u01cc_users` = :id_u01cc_users';
         $getUsersVideo = $this->pdo->prepare($query);
         $getUsersVideo->bindValue(':id_u01cc_users', $this->id_u01cc_users, PDO::PARAM_INT);
         $getUsersVideo->execute();
         if (is_object($getUsersVideo))
         {
             $isObjectResult = $getUsersVideo->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }
/**
 * méthode affichant les artworks postés par un utilisateur en particulier
 * @return type boolean
 */
     public function getUsersArtworks()
     {
         $query = 'SELECT `u01cc_users`.`id`, `gamerTag`, `title`, `content`, DATE_FORMAT(`u01cc_contribs`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `u01cc_contribs`.`id`, `id_u01cc_categoriesContribs`, `id_u01cc_users` '
                 . 'FROM `u01cc_contribs` '
                 . 'INNER JOIN `u01cc_users` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'WHERE `id_u01cc_categoriesContribs` = 7 '
                 . 'AND `id_u01cc_status` = 1 '
                 . 'AND `id_u01cc_users` = :id_u01cc_users';
         $getUsersArtworks = $this->pdo->prepare($query);
         $getUsersArtworks->bindValue(':id_u01cc_users', $this->id_u01cc_users, PDO::PARAM_INT);
         $getUsersArtworks->execute();
         if (is_object($getUsersArtworks))
         {
             $isObjectResult = $getUsersArtworks->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }
/**
 * méthode permettant la lecture de tous les artworks
 * @return type boolean
 */
     public function getAllArtworks()
     {
         $query = 'SELECT `u01cc_users`.`id`, `gamerTag`, `title`, `content`, DATE_FORMAT(`u01cc_contribs`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `u01cc_contribs`.`id`, `id_u01cc_categoriesContribs`, `id_u01cc_users` '
                 . 'FROM `u01cc_contribs` '
                 . 'INNER JOIN `u01cc_users` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'WHERE `id_u01cc_categoriesContribs` = 7 '
                 . 'AND `id_u01cc_status` = 1';
         $getAllArtworks = $this->pdo->query($query);
         if (is_object($getAllArtworks))
         {
             $isObjectResult = $getAllArtworks->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function getAllVideo()
     {
         $query = 'SELECT `u01cc_users`.`id`, `gamerTag`, `title`, `content`, DATE_FORMAT(`u01cc_contribs`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `u01cc_contribs`.`id`, `id_u01cc_categoriesContribs`, `id_u01cc_users` '
                 . 'FROM `u01cc_contribs` '
                 . 'INNER JOIN `u01cc_users` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'WHERE `id_u01cc_categoriesContribs` = 6 '
                 . 'AND `id_u01cc_status` = 1';
         $getAllVideo = $this->pdo->query($query);
         if (is_object($getAllVideo))
         {
             $isObjectResult = $getAllVideo->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function updateGtContribs()
     {
         $query = 'UPDATE `u01cc_contribs` '
                 . 'SET `id_u01cc_users` = 7 '
                 . 'WHERE `id_u01cc_users` = :id';
         $updateGtContribs = $this->pdo->prepare($query);
         $updateGtContribs->bindValue(':id', $this->id, PDO::PARAM_INT);
         $updateGtContribs->execute();
     }

     public function __destruct()
     {
         $this->pdo = NULL;
     }

 }
 