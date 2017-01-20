<?php


namespace app\controllers;


class Index extends \app\core\Controller {
  
  protected function beforeAction() {
    
  }
  
  public function actionIndex() {
    echo 'INDEX!!!';
    
  }
  public function actionWell() {
    $this->view->display(__DIR__ . '/../templates/well.php');
  }
}
