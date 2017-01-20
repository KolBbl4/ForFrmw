<?php

namespace app;

/**
 * Класс для работы с адресами
 */
class Routs {

 
 public function __construct($uri){
   $parsUri= explode('/', $uri);
   switch ($parsUri[2]) {
     case 'news':$controller =  new controllers\News();

       break;

     default:
        $controller =  new controllers\Index(); // котроллер индекса 
        break;

      
   }
         /* Второй параметр в адресной строке */
  if (isset($parsUri[3])) {
    $action = $parsUri[3] ?: 'Index';
  } else {
    $action = 'Index';
  }
//$controller->action($action);
$controller->action($action);       
  }
}