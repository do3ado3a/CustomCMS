<?php 

class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $posts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index'),
		'body' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'published' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'tags' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'attachmentName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'attachmentType' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'attachmentLocation' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'attachmentSize' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'attachmentWidth' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'attachmentHeight' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'parent_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'comment_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'photo_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => array('title', 'body'), 'unique' => 0))
	);
	var $posts_tags = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tag_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $statuses = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'post_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'comment_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
	  'album_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),	
	  'media_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),		
	  'link_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),	
	  'newsletter_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),	
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $tags = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'subscribed' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
}
?>