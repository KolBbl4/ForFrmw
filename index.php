<?php
require __DIR__.'/app/Bootstap.php';
require __DIR__. '/Autoload.php';
$controller = new app\controllers\News();

new app\Routs($_SERVER['REQUEST_URI']);
/* @var $action string */
if (isset($_GET['action'])) {
  $action = $_GET['action'] ?: 'Index';
} else {
  $action = 'Index';
}

$controller->action($action);


//phpinfo();
/*$config = app\config::instance();
$config->data['db'] ='localhost'; 


$view->users = app\models\user::findAll();
$view->title = 'Мой сайт';




$modules = glob('app/*.php');

foreach ($modules as $module)
{
    
    require $module;
}
 

$user = \app\models\user::findAll();
//var_dump($res);

function sendEmail (\app\model $user)
{
    echo'Пароль после md5 = '.$user->password;
}

sendEmail($user['0']);

$user = new app\models\user;
$user->email = 'cool@mail.ru';
$user->login = 'login';
$user->password = 'pass';
//$user->insert();
*/
