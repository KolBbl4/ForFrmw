<?php

namespace app\core;

/**
 * Класс вида для :
 * передачи в шаблон переменных
 * подключения самого шаблона через контроллер
 * 
 */
class View  {

  protected $data = [];

  /**
   * Магический метод для опеределения переменных
   */
  public function __set($key, $value) {

    $this->data[$key] = $value;
  }

  /**
   * Магический метод для возварата определённх методом __get() переменных
   */
  public function __get($key) {

    return $this->data[$key];
  }

  public function __isset($key) {
    if (isset($this->data[$key])) {
      return $this->data[$key];
    } else {
      die('Переменная  не установлена!!!');
    }
  }

  /**
   * Подключаем шаблон, буферезуем его и выводим
   * 
   * @param string $template
   */
  public function display($template) {
    echo $this->render($template);
  }

  /**
   * Для буферизации вывода данных из шаблона 
   * 
   */
  public function render($template) {

    ob_start();
    /**
     * Убираем в шаблоне у переменнх $this->
     */
    foreach ($this->data as $key => $value) {
      $$key = $value;
    }

    require $template;
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }



}
