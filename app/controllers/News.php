<?php

/**
 * Контроллер новостей
 */

namespace app\controllers;

class News extends \app\Controller {

  protected function beforeAction() {
    
  }

  protected function actionIndex() {

    $this->view->news = \app\models\news::findAll();
    $this->view->display(__DIR__ . '/../templates/index.php');
  }

  protected function actionOne() {

    $id = (int) $_GET['id'];
    $this->view->article = \app\models\news::findById($id);
    $this->view->display(__DIR__ . '/../templates/one.php');
  }

}
