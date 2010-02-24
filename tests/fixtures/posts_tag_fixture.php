<?php 
/* SVN FILE: $Id$ */
/* PostsTag Fixture generated on: 2010-02-09 00:02:47 : 1265693267*/

class PostsTagFixture extends CakeTestFixture {
	var $name = 'PostsTag';
	var $table = 'posts_tags';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'post_id' => array('type'=>'integer', 'null' => false),
			'tag_id' => array('type'=>'integer', 'null' => false),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'post_id'  => 1,
			'tag_id'  => 1
			));
}
?>