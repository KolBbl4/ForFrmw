<?php

namespace app\core;

abstract class Controller {

  protected $view;

  public function __construct() {
    $this->view = new \app\core\View();
  }

  /**
   * Метод прокси, для подключение экшенов конроллера
   * @param string $action
   * @return string
   */
  public function action($action) {
    $methodName = 'action' . $action;
    $this->beforeAction();
    return $this->$methodName();
  }

  /**
   * Метод выполняемы до закгрузки основного метода.
   */
  abstract protected function beforeAction();
}
