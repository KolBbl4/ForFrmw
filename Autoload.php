<?php

/**
 * Автозагрузка классов
 */
function autoload($class) {
  $fileName = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
  if (file_exists($fileName)) {
    require $fileName;
  }
  else{
    die('Ошибка в названии');
  }
}

spl_autoload_register('autoload');
