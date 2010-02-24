<?php 
/* SVN FILE: $Id$ */
/* Status Fixture generated on: 2010-02-09 00:02:31 : 1265693311*/

class StatusFixture extends CakeTestFixture {
	var $name = 'Status';
	var $table = 'statuses';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => false, 'length' => 50),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet'
			));
}
?>