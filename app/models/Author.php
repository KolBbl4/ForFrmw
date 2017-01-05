<?php

/**
 * Модель для работы с БД авторы
 */

namespace app\Models;

class Author extends \app\Model {

  const TABLE = 'authors';

  public $name;

}