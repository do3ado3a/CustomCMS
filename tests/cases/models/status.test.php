<?php 
/* SVN FILE: $Id$ */
/* Status Test cases generated on: 2010-02-09 00:02:31 : 1265693311*/
App::import('Model', 'Status');

class StatusTestCase extends CakeTestCase {
	var $Status = null;
	var $fixtures = array('app.status', 'app.post');

	function startTest() {
		$this->Status =& ClassRegistry::init('Status');
	}

	function testStatusInstance() {
		$this->assertTrue(is_a($this->Status, 'Status'));
	}

	function testStatusFind() {
		$this->Status->recursive = -1;
		$results = $this->Status->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Status' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet'
			));
		$this->assertEqual($results, $expected);
	}
}
?>