<?php

namespace app\core;

/**
 * Трейд для определения классов как сингл тон
 */
trait Singleton {

  protected static $instance;

  protected function __construct() {
    
  }

  public static function instance() {
    if (null == static::$instance) {
      static::$instance = new static;
    }
    return static::$instance;
  }

}
