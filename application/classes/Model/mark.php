<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Mark extends ORM {
	protected $_belongs_to = array(
      'radiost'  => array(
               'model'       => 'radiost',
               'foreign_key' => 'radiost_id',
          ),
      'user' => array(
      			'model' => 'user',
      			'foreign_key' => 'user_id',
      			),
      
    );
};