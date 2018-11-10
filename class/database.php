<?php

 /**
  * classe permettant la connexion à la base de données
  *
  * @author cedric
  */
 class database {

     public $pdo;
     private $host = '';
     private $login = '';
     private $password = '';
     private $dbName = '';
     private static $_instance;

     private function __construct()
     {
         $this->host = HOST;
         $this->login = LOGIN;
         $this->password = PASSWORD;
         $this->dbName = DBNAME;


         /**
          * Méthode permettant de créer l'instance PDO
          */
         try {
             $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=UTF8;', $this->login, $this->password);
         } catch (Exception $ex) {
             $message = 'Erreur P.D.O dans ' . $ex->getFile() . ' ligne ' . $ex->getLine() . ' : ' . $ex->getMessage();
             die($message);
         }
     }

     /**
      * récupère l'instance de la classe
      * @return database
      */
     public static function getInstance()
     {
         if (is_null(self::$_instance))
         {
             self::$_instance = new self();
         }
         return self::$_instance;
     }

 }
 