<?php

 /**
  * Description of u01cc_users
  * classe utilisant la table des utilisateurs
  * @author cedric
  */
 class u01cc_users extends database {

     public $id = '';
     public $lastname = '';
     public $firstname = '';
     public $birthdate = '';
     public $email = '';
     public $gamerTag = '';
     public $password = '';
     public $confirmPassword = '';
     public $console = '';

     public function __construct()
     {
         parent::__construct();
         $this->dbConnect();
     }

     /**
      * création d'un utilisateur
      * @return type
      */
     public function addUser()
     {
         $query = 'INSERT INTO `u01cc_users` (`lastname`, `firstname`, `birthdate`, `email`, `gamerTag`, `password`, `console`) '
                 . 'VALUES (:lastname, :firstname, :birthdate, :email, :gamerTag, :password, :console)'; //  :quelquechose => marqueur nominatif , sans valeur pour l'instant, sera attribuer plus tard (= attribut)
         $addUser = $this->pdo->prepare($query);
         $addUser->bindValue(':lastname', $this->lastname, PDO::PARAM_STR); // bindValue( marqueur nominatif, valeur a lui attribuer, type de valeur attribuée) ATTRIBUE UNE VALEUR A UN MARQUER NOMINATIF
         $addUser->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
         $addUser->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
         $addUser->bindValue(':email', $this->email, PDO::PARAM_STR);
         $addUser->bindValue(':gamerTag', $this->gamerTag, PDO::PARAM_STR);
         $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
         $addUser->bindValue(':console', $this->console, PDO::PARAM_STR);
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

     public function __destruct()
     {
         ;
     }

 }
 