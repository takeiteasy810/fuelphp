<?php

class Fieldset_Test extends Fieldset_base
{
  public function init()
  {

    static::$_instance->add(
      'article_title',
      'Title',
      array('class' => 'pretty_input')
    );

    $ops = array('male', 'female');
    static::$_instance->add(
      'gender',
      '',
      array('options' => $ops, 'type' => 'radio', 'value' => 'true')
    );

    return static::$_instance;
  }
}

