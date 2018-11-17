<?php

 /**
  * Description of u01cc_users
  * classe utilisant la table des utilisateurs
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
      * création d'un utilisateur
      * @return type
      */
     public function addUser()
     {
         $query = 'INSERT INTO `u01cc_users` (`lastname`, `firstname`, `birthdate`, `email`, `gamerTag`, `password`, `id_u01cc_consoles`) '
                 . 'VALUES (:lastname, :firstname, :birthdate, :email, :gamerTag, :password, :consoles)'; //  :quelquechose => marqueur nominatif , sans valeur pour l'instant, sera attribuer plus tard (= attribut)
         $addUser = $this->pdo->prepare($query);
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

     public function checkUserExist()
     {
         $state = false;
         $query = 'SELECT COUNT(`id`) AS `count` FROM `u01cc_users` WHERE `email` = :email';
         $result = $this->pdo->prepare($query);
         $result->bindValue(':email', $this->email, PDO::PARAM_STR);
         if ($result->execute)
         {
             $selectResult = $result->fetch(PDO::FETCH_OBJ);
             $state = $selectResult->count;
         }
         return $state;
     }
/**
 * méthode vérifiant si les cookies sont valides
 * @return type boolean
 */
     public function verifyCookie()
     {
         $state = false;
         $query = 'SELECT ('
                 . 'SELECT COUNT(`id`) AS `countId` FROM `u01cc_users` WHERE `id` = :id '
                 . 'SELECT COUNT(`gamerTag`) AS `countgt` FROM `u01cc_users` WHERE `gamerTag` = :gamerTag '
                 . 'SELECT COUNT(`password`) AS `countpassword` FROM `u01cc_users` WHERE `password` = :password '
                 . ')';
         $result = $this->pdo->prepare($query);
         $result->bindValue(':id', $this->id, PDO::PARAM_STR);
         $result->bindValue(':password', $this->password, PDO::PARAM_STR);
         $result->bindValue(':gamerTag', $this->gamerTag, PDO::PARAM_STR);
         if ($result->execute)
         {
             $selectResult = $result->fetch(PDO::FETCH_OBJ);
             $state = $selectResult->count;
         }
         return $state;
     }

     /**
      * Méthode permettant la connexion d'un utilisateur
      */
     public function userConnection()
     {
         $state = false;
         $query = 'SELECT `id`, `gamerTag`, `password` '
                 . 'FROM `u01cc_users` '
                 . 'WHERE `gamerTag` = :gamerTag';
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
                 $this->id = $selectResult->id;
                 $state = true;
             }
         }
         return $state;
     }

     public function cookiesConnection()
     {
         $state = false;
         $query = 'SELECT `id`, `gamerTag`, `password` '
                 . 'FROM `u01cc_users` '
                 . 'WHERE `gamerTag` = :gamerTag';
         $result = $this->pdo->prepare($query);
         $result->bindValue(':gamerTag', $this->gamerTag, PDO::PARAM_STR);
         if ($result->execute())
         { // on verifie la bonne exécution de la requete
             $selectResult = $result->fetch(PDO::FETCH_OBJ);
             // on vérifie qu'un utilisateur a bien été trouvé
             if (is_object($selectResult))
             {
                 // on hydrate
                 $this->gamerTag = $selectResult->gamerTag;
                 $this->password = $selectResult->password;
                 $this->id = $selectResult->id;
                 $state = true;
             }
         }
     }

     public function __destruct()
     {
         
     }

 }
 