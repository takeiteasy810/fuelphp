<?php

abstract class Fieldset_Base extends \Fuel\Core\Fieldset
{
  public static function forge($name = 'foo', array $config = array())
  {
    if((static::$_instance = parent::forge($name, $config)) === false){
      return false;
    }

    static::$_instance->init();

    return static::$_instance;
  }

  abstract public function init();
}

