<?php

/**
 * Автозагрузка классов
 */
function autoload($class) {
  $fileName = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
  if (file_exists($fileName)) {
    require $fileName;
  }
}

spl_autoload_register('autoload');
