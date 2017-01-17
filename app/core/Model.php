<?php

namespace app\core;

abstract class Model {

  const TABLE = '';

  public $id;

  /**
   * Получаем все данные из БД
   * @return object
   */
  public static function findAll() {
    $db = Db::instance();
    return $db->query('SELECT * FROM ' . static::TABLE, [], static::class);
  }

  /**
   * Получаем id 
   * @return object
   */
  public static function findById($id) {
    $db = Db::instance();
    return $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id = :id ', [':id' => $id], static::class)[0];
  }

  public function isNew() {

    return empty($this->id);
  }

  /**
   * Вставка даннх в БД
   * @return sqlinset
   */
  public function insert() {
    if (!$this->isNew()) {
      return;
    }

    $colums = [];
    $values = [];
    foreach ($this as $key => $value) {

      if ('id' == $key) {
        continue;
      }

      $colums[] = $key;
      $values[':' . $key] = $value;
    }
    $sql = 'INSERT ' . static::TABLE . '
                (' . implode(',', $colums) . ') VALUES (' . implode(',', array_keys($values)) . ')';
    $db = db::instance();
    $db->execute($sql, $values);
    echo $sql;
  }

  public function update() {

    $sql = 'UPDATE ' . static::TABLE . ' SET';
  }

  public function delete($id) {
    $db = Db::instance();
    $db->query('DELETE FROM ' . static::TABLE . 'WHERE  id = :id ', [':id' => $id], static::class);
  }

}
