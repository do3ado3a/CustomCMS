<?php 
/* SVN FILE: $Id$ */
/* PostsTag Test cases generated on: 2010-02-09 00:02:47 : 1265693267*/
App::import('Model', 'PostsTag');

class PostsTagTestCase extends CakeTestCase {
	var $PostsTag = null;
	var $fixtures = array('app.posts_tag', 'app.post', 'app.tag');

	function startTest() {
		$this->PostsTag =& ClassRegistry::init('PostsTag');
	}

	function testPostsTagInstance() {
		$this->assertTrue(is_a($this->PostsTag, 'PostsTag'));
	}

	function testPostsTagFind() {
		$this->PostsTag->recursive = -1;
		$results = $this->PostsTag->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('PostsTag' => array(
			'id'  => 1,
			'post_id'  => 1,
			'tag_id'  => 1
			));
		$this->assertEqual($results, $expected);
	}
}
?>