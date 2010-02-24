<?php 
/* SVN FILE: $Id$ */
/* backup_feb2 schema generated on: 2010-02-09 00:02:59 : 1265692799*/
class backup_feb2Schema extends CakeSchema {
	var $name = 'backup_feb2';

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
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
}
?>