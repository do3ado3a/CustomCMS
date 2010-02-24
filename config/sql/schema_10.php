<?php 
/* SVN FILE: $Id$ */
/* CostumCMS schema generated on: 2010-02-17 13:02:55 : 1266432835*/
class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	var $file = 'schema_10.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $posts = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'title' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index'),
			'body' => array('type' => 'text', 'null' => false),
			'created' => array('type' => 'datetime', 'null' => false),
			'modified' => array('type' => 'datetime', 'null' => false),
			'published' => array('type' => 'datetime', 'null' => false),
			'status_id' => array('type' => 'integer', 'null' => false),
			'user_id' => array('type' => 'integer', 'null' => false),
			'tags' => array('type' => 'string', 'null' => false, 'length' => 100),
			'type' => array('type' => 'string', 'null' => false, 'length' => 20),
			'attachmentName' => array('type' => 'string', 'null' => false, 'length' => 100),
			'attachmentType' => array('type' => 'string', 'null' => false, 'length' => 100),
			'attachmentLocation' => array('type' => 'string', 'null' => false, 'length' => 100),
			'attachmentSize' => array('type' => 'integer', 'null' => false),
			'attachmentWidth' => array('type' => 'integer', 'null' => false),
			'attachmentHeight' => array('type' => 'integer', 'null' => false),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => array('title', 'body'), 'unique' => 0))
		);
	
}
?>