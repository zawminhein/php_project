<?php

namespace Libs\Database;

use PDOException;
class UsersTable 
{
   private $db;

   public function __construct(Mysql $mysql)
   {
      $this->db = $mysql->connect();
   }

   public function insert($data)
   {
      try {
         $statement = $this->db->prepare(
            "INSERT INTO users (name, email, phone, address, password, created_at) 
            VALUES (:name, :email, :phone, :address, :password, NOW())"
         );

         $statement->execute($data);

         return $this->db->lastInsertId();

      } catch(PDOException $e) {
         echo $e->getMessage();
         exit();
      }
   }
}