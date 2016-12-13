<?php defined('SYSPATH') OR die('No direct access allowed.');

Class Model_Radiost extends ORM {
	protected $_belongs_to = array(
		'user' => array(
			'model' => 'user',
			'foreign_key' => 'user_id',)
		);
};