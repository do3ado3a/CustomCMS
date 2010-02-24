<?php 
/* SVN FILE: $Id$ */
/* CostumCMS schema generated on: 2010-02-09 00:02:15 : 1265693115*/
class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	var $file = 'schema_2.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $posts = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'title' => array('type' => 'string', 'null' => false, 'length' => 100),
			'body' => array('type' => 'text', 'null' => false),
			'created' => array('type' => 'datetime', 'null' => false),
			'modified' => array('type' => 'datetime', 'null' => false),
			'published' => array('type' => 'datetime', 'null' => false),
			'status_id' => array('type' => 'integer', 'null' => false),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
	var $statuses = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type' => 'string', 'null' => false, 'length' => 50),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
}
?>