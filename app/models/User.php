<?php

/**
 * Модель для работы с пользователями
 */

namespace app\models;

use app\Model as Model;

class User extends Model {

  const TABLE = 'users';

  public $login;
  public $password;
  public $email;

}
