<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2010-02-17 13:02:10 : 1266432910*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $table = 'users';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
			'email' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
			'password' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
			'created' => array('type'=>'datetime', 'null' => false),
			'modified' => array('type'=>'datetime', 'null' => false),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'email'  => 'Lorem ipsum dolor sit amet',
			'password'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-02-17 13:55:10',
			'modified'  => '2010-02-17 13:55:10'
			));
}
?>