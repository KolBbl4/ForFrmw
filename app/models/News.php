<?php

/**
 * Модель для работы с новотной таблицей
 */

namespace app\models;

class News extends \app\core\model {

  const TABLE = 'news';

  public $title;
  public $lead;
  public $author_id;

  /**
   * LAZY LOAD
   * 
   * @param string $key
   * 
   */
  public function __get($key) {
    switch ($key) {
      case 'author':
        return author::findById($this->author_id);
        break;
      default :
        return null;
    }
  }

  public function __isset($key) {
    switch ($key) {
      case 'author':
        return !empty($this->author_id);
        break;
      default :
        return FALSE;
    }
  }

}
