<?php 
/* SVN FILE: $Id$ */
/* Page Fixture generated on: 2010-02-24 11:02:18 : 1267027578*/

class PageFixture extends CakeTestFixture {
	var $name = 'Page';
	var $table = 'pages';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'title' => array('type'=>'string', 'null' => false, 'length' => 100, 'key' => 'index'),
			'body' => array('type'=>'text', 'null' => false),
			'created' => array('type'=>'datetime', 'null' => false),
			'modified' => array('type'=>'datetime', 'null' => false),
			'published' => array('type'=>'datetime', 'null' => false),
			'status_id' => array('type'=>'integer', 'null' => false),
			'tags' => array('type'=>'string', 'null' => false, 'length' => 100),
			'type' => array('type'=>'string', 'null' => false, 'length' => 20),
			'user_id' => array('type'=>'integer', 'null' => false),
			'parent_id' => array('type'=>'integer', 'null' => false),
			'subpage_count' => array('type'=>'integer', 'null' => false),
			'url' => array('type'=>'string', 'null' => false, 'length' => 150),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => 'title', 'unique' => 0))
			);
	var $records = array(array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'body'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2010-02-24 11:06:18',
			'modified'  => '2010-02-24 11:06:18',
			'published'  => '2010-02-24 11:06:18',
			'status_id'  => 1,
			'tags'  => 'Lorem ipsum dolor sit amet',
			'type'  => 'Lorem ipsum dolor ',
			'user_id'  => 1,
			'parent_id'  => 1,
			'subpage_count'  => 1,
			'url'  => 'Lorem ipsum dolor sit amet'
			));
}
?>