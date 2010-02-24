<?php 
/* SVN FILE: $Id$ */
/* CostumCMS schema generated on: 2010-02-20 13:02:31 : 1266690871*/
class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	var $file = 'schema_12.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $pages = array(
			'title' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index'),
			'body' => array('type' => 'text',  'null' => false),
			'created' => array('type' => 'datetime', 'null' => false),
			'modified' => array('type' => 'datetime', 'null' => false),
			'published' => array('type' => 'datetime', 'null' => false),
			'status_id' => array('type' => 'integer', 'null' => false),
			'tags' => array('type' => 'string', 'null' => false, 'length' => 100),
			'type' => array('type' => 'string', 'null' => false, 'length' => 20),
			'user_id' => array('type' => 'integer', 'null' => false),
			'parent_id' => array('type' => 'integer', 'null' => false),

			'url' => array('type' => 'string', 'null' => false, 'length' => 150),
			'indexes' => array('title' => array('column' => array('title'), 'unique' => 0))
		);

}
?>