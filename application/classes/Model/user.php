<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_user extends ORM {
	protected $_belongs_to = array(
		'role' => array(
			'model' => 'role',
			'foreign_key' => 'role_id',
			)
		);

};