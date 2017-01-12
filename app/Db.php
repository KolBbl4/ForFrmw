<?php

/**
 * Класс для работы с БД
 */

namespace app;

class Db {

  use singleton;

  protected $dbConnect;

  /**
   * Устанавливаем соеденение 
   */
  protected function __construct() {

    try {
      $this->dbConnect = new \PDO('mysql:host=127.0.0.1;dbname=vk', 'root', '');
      $this->dbConnect->exec('SET NAMES utf8');//кодировка!!!!!!!

    } catch (\PDOException $e) {
      echo $e->getMessage();
      die;
    }
  }

  public function execute($sql, $params = []) {
    $srtq = $this->dbConnect->prepare($sql);
    $res = $srtq->execute($params);
    return $res;
  }

  public function query($sql, $params, $class) {
    $srtq = $this->dbConnect->prepare($sql);
    $res = $srtq->execute($params);
    if (false !== $res) {
      return $srtq->fetchall(\PDO::FETCH_CLASS, $class);
    }
    return [];
  }

}
