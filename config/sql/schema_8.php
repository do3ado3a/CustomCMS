<?php 
/* SVN FILE: $Id$ */
/* CostumCMS schema generated on: 2010-02-17 01:02:21 : 1266388581*/
class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	var $file = 'schema_8.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $posts = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'title' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index'),
			'body' => array('type' => 'text', 'null' => false),
			'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL,),
			'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL,),
			'published' => array('type' => 'datetime', 'null' => false, 'default' => NULL,),
			'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL,),
			'tags' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
			'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20),
			'attachmentName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
			'attachmentType' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
			'attachmentLocation' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
			'attachmentSize' => array('type' => 'integer', 'null' => false, 'default' => NULL),
			'attachmentWidth' => array('type' => 'integer', 'null' => false, 'default' => NULL),
			'attachmentHeight' => array('type' => 'integer', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => array('title', 'body'), 'unique' => 0))
		);

}
?>