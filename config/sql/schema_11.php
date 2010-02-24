<?php 
/* SVN FILE: $Id$ */
/* CostumCMS schema generated on: 2010-02-20 12:02:46 : 1266686206*/
class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	var $file = 'schema_11.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $pages = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'title' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index'),
			'body' => array('type' => 'text', 'null' => false),
			'created' => array('type' => 'datetime', 'null' => false),
			'modified' => array('type' => 'datetime', 'null' => false),
			'published' => array('type' => 'datetime', 'null' => false),
			'status_id' => array('type' => 'integer', 'null' => false),
			'user_id' => array('type' => 'integer', 'null' => false),
			'parent_id' => array('type' => 'integer', 'null' => false),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => array('title', 'body'), 'unique' => 0))
		);

}
?>