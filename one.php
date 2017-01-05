<?php	
require 'compos/vendor/autoload.php';
require __DIR__.'/autoload.php';
$controller = new app\controllers\news;
$controller->action('One');
