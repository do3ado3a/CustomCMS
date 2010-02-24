<?php 
/* SVN FILE: $Id$ */
/* Page Test cases generated on: 2010-02-24 11:02:18 : 1267027578*/
App::import('Model', 'Page');

class PageTestCase extends CakeTestCase {
	var $Page = null;
	var $fixtures = array('app.page', 'app.status', 'app.user', 'app.parent');

	function startTest() {
		$this->Page =& ClassRegistry::init('Page');
	}

	function testPageInstance() {
		$this->assertTrue(is_a($this->Page, 'Page'));
	}

	function testPageFind() {
		$this->Page->recursive = -1;
		$results = $this->Page->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Page' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>