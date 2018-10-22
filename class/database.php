<?php

 

 /**
  * classe permettant la connexion à la base de données
  *
  * @author cedric
  */
 class database {
     
     protected $pdo;
     private $host = '';
     private $login = '';
     private $password = '';
     private $dbName = '';
     public function __construct()
     {
         $this->host = HOST;
         $this->login = LOGIN;
         $this->password = PASSWORD;
         $this->$dbName = DBNAME;
     }
     /**
      * Méthode permettant de créer l'instance PDO
      */
     protected function dbConnect() {
         try {
             $this->pdo = new PDO('mysql:host='. $this->host . ';dbname=' . $this->dbName . ';charset=UTF8;', $this->login, $this->password);
         } catch (Exception $ex) {
$ex->getMessage();
         }
     }
 }
 