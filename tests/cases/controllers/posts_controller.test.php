<?php 
/* SVN FILE: $Id$ */
/* PostsController Test cases generated on: 2010-02-09 00:02:27 : 1265694267*/
App::import('Controller', 'Posts');

class TestPosts extends PostsController {
	var $autoRender = false;
}

class PostsControllerTest extends CakeTestCase {
	var $Posts = null;

	function setUp() {
		$this->Posts = new TestPosts();
		$this->Posts->constructClasses();
	}

	function testPostsControllerInstance() {
		$this->assertTrue(is_a($this->Posts, 'PostsController'));
	}

	function tearDown() {
		unset($this->Posts);
	}
}
?>