<?php

 /**
  * Description of u01cc_users
  * classe utilisant la table des utilisateurs ,permettant lecture ,modification et suppression des utilisateurs
  * @author cedric
  */
 class u01cc_users {

     public $id = '';
     public $lastname = '';
     public $firstname = '';
     public $birthdate = '';
     public $email = '';
     public $gamerTag = '';
     public $password = '';
     public $confirmPassword = '';
     public $id_u01cc_consoles = '';

     public function __construct()
     {
         $database = database::getInstance();
         $this->pdo = $database->pdo;
     }

     /**
      * insertion des données de l'utilisateur dans la base de données lors de son inscription
      * @return type lastname string, firstname string, email string, gamerTag string, birthdate string, password string, id_u01cc_consoles int
      */
     public function addUser()
     {
         // déclaration de la requête qui va insérer les données dans la base
         $query = 'INSERT INTO `u01cc_users` (`lastname`, `firstname`, `birthdate`, `email`, `gamerTag`, `password`, `id_u01cc_consoles`) '
                 . 'VALUES (:lastname, :firstname, :birthdate, :email, :gamerTag, :password, :consoles)'; //  :quelquechose => marqueur nominatif , sans valeur pour l'instant, sera attribuer plus tard (= attribut)
         //preparation de la requete
         $addUser = $this->pdo->prepare($query);
         // on assigne une valeur au marqueur dénominatif
         $addUser->bindValue(':lastname', $this->lastname, PDO::PARAM_STR); // bindValue( marqueur nominatif, valeur a lui attribuer, type de valeur attribuée) ATTRIBUE UNE VALEUR A UN MARQUER NOMINATIF
         $addUser->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
         $addUser->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
         $addUser->bindValue(':email', $this->email, PDO::PARAM_STR);
         $addUser->bindValue(':gamerTag', $this->gamerTag, PDO::PARAM_STR);
         $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
         $addUser->bindValue(':consoles', $this->id_u01cc_consoles, PDO::PARAM_STR);
         //EXECUTION DE LA REQUETE
         return $addUser->execute();
     }

     /**
      * vérification de l'existence d'un mail
      * @return boolean
      */
     public function checkIfMailExist()
     {
         $state = false;
         $query = 'SELECT COUNT(`id`) AS `count` FROM `u01cc_users` WHERE `email` = :email';
         $result = $this->pdo->prepare($query);
         $result->bindValue(':email', $this->email, PDO::PARAM_STR);
         if ($result->execute())
         {
             $selectResult = $result->fetch(PDO::FETCH_OBJ);
             $state = $selectResult->count;
         }
         return $state;
     }
     /**
      * vérification de l'existence d'un gamertag
      * @return boolean
      */
     public function checkIfGtExist()
     {
         $state = false;
         $query = 'SELECT COUNT(`id`) AS `count` FROM `u01cc_users` WHERE `gamerTag` = :gamerTag';
         $result = $this->pdo->prepare($query);
         $result->bindValue(':gamerTag', $this->gamerTag, PDO::PARAM_STR);
         if ($result->execute())
         {
             $selectResult = $result->fetch(PDO::FETCH_OBJ);
             $state = $selectResult->count;
         }
         return $state;
     }

     /**
      * Méthode permettant la connexion d'un utilisateur
      * return type boolean
      */
     public function userConnection()
     {
         $state = false;
         // déclaration de la requête qui va insérer les données dans la base
         $query = 'SELECT `id`, `gamerTag`, `password`, `id_u01cc_role` '
                 . 'FROM `u01cc_users` '
                 . 'WHERE `gamerTag` = :gamerTag';
         //préparation de la requête
         $result = $this->pdo->prepare($query);
         $result->bindValue(':gamerTag', $this->gamerTag, PDO::PARAM_STR);
         if ($result->execute())
         { // on verifie la bonne exécution de la requete
             $selectResult = $result->fetch(PDO::FETCH_OBJ);
             if (is_object($selectResult))
             { // on vérifie qu'un utilisateur a bien été trouvé
                 // on hydrate
                 $this->gamerTag = $selectResult->gamerTag;
                 $this->password = $selectResult->password;
                 $this->id_u01cc_role = $selectResult->id_u01cc_role;
                 $this->id = $selectResult->id;
                 $state = true;
             }
         }
         return $state;
     }
/**
 * affichage liste utilisateurs
 * @return type boolean
 */
     public function getUsers()
     {
         $query = 'SELECT `u01cc_users`.`id`, `gamerTag`, `firstname`, `lastname`, DATE_FORMAT(`u01cc_users`.`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `birthdate`, `email`, `name`, `type` '
                 . 'FROM `u01cc_users` '
                 . 'INNER JOIN `u01cc_role` '
                 . 'ON `id_u01cc_role` = `u01cc_role`.`id` '
                 . 'INNER JOIN `u01cc_consoles` '
                 . 'ON `id_u01cc_consoles` = `u01cc_consoles`.`id`';
         $getUsers = $this->pdo->query($query);
         if (is_object($getUsers))
         {
             $isObjectResult = $getUsers->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     /**
      * méthode permettant la récupération d'un utilisateur selon l'id
      * @return type boolean
      */
     public function getUsersById()
     {
         $query = 'SELECT `u01cc_users`.`id`, `gamerTag`, `firstname`, `lastname`, `u01cc_users`.`dateHour`, `birthdate`, `email`, `id_u01cc_consoles`, `name`, `id_u01cc_role` '
                 . 'FROM `u01cc_users` '
                 . 'INNER jOIN `u01cc_consoles` '
                 . 'ON `u01cc_consoles`.`id` = `id_u01cc_consoles` '
                 . 'WHERE `u01cc_users`.`id` = :id';
         $getUsersById = $this->pdo->prepare($query);
         $getUsersById->bindValue(':id', $this->id, PDO::PARAM_INT);
         $getUsersById->execute();
         if (is_object($getUsersById))
         {
             $isObjectResult = $getUsersById->fetch(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     /**
      * méthode permettant la récupération des utilisateurs ayant posté un artwork
      * @return type boolean
      */
     public function getUsersPostArtwork()
     {
         $query = 'SELECT `u01cc_users`.`id`, `gamerTag`, `id_u01cc_users`, `id_u01cc_status`, `id_u01cc_categoriesContribs` '
                 . 'FROM `u01cc_users` '
                 . 'INNER JOIN `u01cc_contribs` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'WHERE `id_u01cc_status` = 1 '
                 . 'AND `id_u01cc_categoriesContribs` = 7 '
                 . 'GROUP BY `u01cc_users`.`id`';
         $getUsersPostArtwork = $this->pdo->query($query);
         if (is_object($getUsersPostArtwork))
         {
             $isObjectResult = $getUsersPostArtwork->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function getUsersPostVideo()
     {
         $query = 'SELECT `u01cc_users`.`id`, `gamerTag`, `id_u01cc_users`, `id_u01cc_status`, `id_u01cc_categoriesContribs` '
                 . 'FROM `u01cc_users` '
                 . 'INNER JOIN `u01cc_contribs` '
                 . 'ON `u01cc_users`.`id` = `id_u01cc_users` '
                 . 'WHERE `id_u01cc_status` = 1 '
                 . 'AND `id_u01cc_categoriesContribs` = 6 '
                 . 'GROUP BY `u01cc_users`.`id`';
         $getUsersPostVideo = $this->pdo->query($query);
         if (is_object($getUsersPostVideo))
         {
             $isObjectResult = $getUsersPostVideo->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     /**
      * méthode permettant la modification du profil utilisateur
      * @return type boolean
      */
     public function modifyUser()
     {
         $query = 'UPDATE `u01cc_users` '
                 . 'SET `lastname` = :lastname, `firstname` = :firstname, `birthdate` = :birthdate, `email` = :email, `id_u01cc_consoles` = :console, `password` = :password, `gamerTag` = :gamerTag '
                 . 'WHERE `id` = :id';
         $modifyUser = $this->pdo->prepare($query);
         $modifyUser->bindValue(':id', $this->id, PDO::PARAM_INT);
         $modifyUser->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
         $modifyUser->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
         $modifyUser->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
         $modifyUser->bindValue(':email', $this->email, PDO::PARAM_STR);
         $modifyUser->bindValue(':console', $this->id_u01cc_consoles, PDO::PARAM_INT);
         $modifyUser->bindValue(':password', $this->password, PDO::PARAM_STR);
         $modifyUser->bindValue(':gamerTag', $this->gamerTag, PDO::PARAM_STR);
         return $modifyUser->execute();
     }

     public function updateUserByAdmin() {
          $query = 'UPDATE `u01cc_users` '
                 . 'SET `lastname` = :lastname, `firstname` = :firstname, `birthdate` = :birthdate, `email` = :email, `id_u01cc_consoles` = :console,  `gamerTag` = :gamerTag, `id_u01cc_role` = :role '
                 . 'WHERE `id` = :id';
         $updateUserByAdmin = $this->pdo->prepare($query);
         $updateUserByAdmin->bindValue(':id', $this->id, PDO::PARAM_INT);
         $updateUserByAdmin->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
         $updateUserByAdmin->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
         $updateUserByAdmin->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
         $updateUserByAdmin->bindValue(':email', $this->email, PDO::PARAM_STR);
         $updateUserByAdmin->bindValue(':console', $this->id_u01cc_consoles, PDO::PARAM_INT);
         $updateUserByAdmin->bindValue(':gamerTag', $this->gamerTag, PDO::PARAM_STR);
         $updateUserByAdmin->bindValue(':role', $this->id_u01cc_role, PDO::PARAM_STR);
         return $updateUserByAdmin->execute();
     }
     /**
      * méthode supprimant le profil d'un utilisateur selon son id
      * @return type boolean
      */
     public function deleteUser()
     {
         $query = 'DELETE FROM `u01cc_users` '
                 . 'WHERE `id` = :id';
         $deleteUser = $this->pdo->prepare($query);
         $deleteUser->bindValue(':id', $this->id, PDO::PARAM_INT);
         return $deleteUser->execute();
         // voir changement idcontribs
     }

     public function __destruct()
     {
         $this->pdo = NULL;
     }

 }
 