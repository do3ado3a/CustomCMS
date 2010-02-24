<?php 
/* SVN FILE: $Id$ */
/* CostumCMS schema generated on: 2010-02-24 04:02:31 : 1267003531*/
class CostumCMSSchema extends CakeSchema {
	var $name = 'CostumCMS';

	var $file = 'schema_13.php';

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
			'tags' => array('type' => 'string', 'null' => false, 'length' => 100),
			'type' => array('type' => 'string', 'null' => false, 'length' => 20),
			'user_id' => array('type' => 'integer', 'null' => false),
			'parent_id' => array('type' => 'integer', 'null' => false),
			'subpage_count' => array('type' => 'integer', 'null' => false),
			'url' => array('type' => 'string', 'null' => false, 'length' => 150),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => 'title', 'unique' => 0))
		);
	var $posts = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'title' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index'),
			'body' => array('type' => 'text', 'null' => false),
			'created' => array('type' => 'datetime', 'null' => false),
			'modified' => array('type' => 'datetime', 'null' => false),
			'published' => array('type' => 'datetime', 'null' => false),
			'status_id' => array('type' => 'integer', 'null' => false),
			'tags' => array('type' => 'string', 'null' => false, 'length' => 100),
			'type' => array('type' => 'string', 'null' => false, 'length' => 20),
			'attachmentName' => array('type' => 'string', 'null' => false, 'length' => 100),
			'attachmentType' => array('type' => 'string', 'null' => false, 'length' => 100),
			'attachmentLocation' => array('type' => 'string', 'null' => false, 'length' => 100),
			'attachmentSize' => array('type' => 'integer', 'null' => false),
			'attachmentWidth' => array('type' => 'integer', 'null' => false),
			'attachmentHeight' => array('type' => 'integer', 'null' => false),
			'user_id' => array('type' => 'integer', 'null' => false),
			'parent_id' => array('type' => 'integer', 'null' => false),
			'comment_count' => array('type' => 'integer', 'null' => false),
			'photo_count' => array('type' => 'integer', 'null' => false),
			'url' => array('type' => 'string', 'null' => false, 'length' => 150),
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
			'post_count' => array('type' => 'integer', 'null' => false),
			'comment_count' => array('type' => 'integer', 'null' => false),
			'page_count' => array('type' => 'integer', 'null' => false),
			'subpage_count' => array('type' => 'integer', 'null' => false),
			'album_count' => array('type' => 'integer', 'null' => false),
			'media_count' => array('type' => 'integer', 'null' => false),
			'link_count' => array('type' => 'integer', 'null' => false),
			'newsletter_count' => array('type' => 'integer', 'null' => false),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
	var $tags = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type' => 'string', 'null' => false, 'length' => 50),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
	var $users = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
			'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
			'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
			'created' => array('type' => 'datetime', 'null' => false),
			'modified' => array('type' => 'datetime', 'null' => false),
			'subscribed' => array('type' => 'integer', 'null' => false),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
}
?>