<?php
use Orm\Model;

class Model_Customer extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'mail',
		'tel',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', '名前', 'required|max_length[50]');
		$val->add_field('mail', 'メールアドレス', 'required|max_length[150]');
		$val->add_field('tel', '電話番号', 'required|max_length[11]');

		return $val;
	}

}
