<?php 
/* SVN FILE: $Id$ */
/* CostumCMS schema generated on: 2010-02-13 03:02:48 : 1266048408*/
class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	var $file = 'schema_5.php';

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
			'tags' => array('type' => 'string', 'null' => false, 'length' => 100),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => array('title', 'body'), 'unique' => 0))
		);
	var $posts_tags = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'post_id' => array('type' => 'integer', 'null' => false),
			'tag_id' => array('type' => 'integer', 'null' => false),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
	var $statuses = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type' => 'string', 'null' => false, 'length' => 50),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
	var $tags = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type' => 'string', 'null' => false, 'length' => 50),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
}
?>