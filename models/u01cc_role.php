<?php

 /**
  * Description of u01cc_role
  *
  * @author cedric
  */
 class u01cc_role {

     public $id = '';
     public $type = '';

     public function __construct()
     {
         $database = database::getInstance();
         $this->pdo = $database->pdo;
     }

     public function getRole()
     {
         $query = 'SELECT `id`, `type` '
                 . 'FROM `u01cc_role`';
         $getRole = $this->pdo->query($query);
         if (is_object($getRole))
         {
             $isObjectResult = $getRole->fetchAll(PDO::FETCH_OBJ);
         }
         return $isObjectResult;
     }

     public function __destruct()
     {
         $this->pdo = NULL;
     }

 }
 