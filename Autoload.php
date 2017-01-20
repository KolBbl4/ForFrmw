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
    echo $fileName;
    die('Ошибка в названии');
  }
}

spl_autoload_register('autoload');
