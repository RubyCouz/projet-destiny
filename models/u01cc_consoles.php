<?php

 /*
  * Classe utilisant la table des consoles
  */

 /**
  * Description of u01cc_consoles
  *
  * @author cedric
  */
 class u01cc_consoles {
     private $pdo = '';
     public $id = '';
     public $name = '';

     public function __construct()
     {
         $database = database::getInstance();
         $this->pdo = $database->pdo;
     }

     public function getConsoles()
     {
         $query = 'SELECT `id`, `name` '
                 . 'FROM `u01cc_consoles`';
         $getConsoles = $this->pdo->query($query);
         if (is_object($getConsoles))
         {
             $isObjectResult = $getConsoles->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

 }
 