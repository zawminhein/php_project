<?php

namespace Helpers;

class HTTP
{
   static $project = "http://localhost/php_project";

   static function redirect($page, $q = "")
   {
      $url = static::$project . $page;
      if($q) $url .= "?$q";

      header("location: $url");
      exit();
   }
}