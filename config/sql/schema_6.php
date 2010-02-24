<?php 
/* SVN FILE: $Id$ */
/* CostumCMS schema generated on: 2010-02-15 22:02:37 : 1266290617*/
class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	var $file = 'schema_6.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}


	var $statuses = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type' => 'string', 'null' => false, 'length' => 50),
			'post_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);

}
?>