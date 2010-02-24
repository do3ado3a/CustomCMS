<?php 
/* SVN FILE: $Id$ */
/* RecordingsController Test cases generated on: 2010-02-11 01:02:38 : 1265869718*/
App::import('Controller', 'Recordings');

class TestRecordings extends RecordingsController {
	var $autoRender = false;
}

class RecordingsControllerTest extends CakeTestCase {
	var $Recordings = null;

	function setUp() {
		$this->Recordings = new TestRecordings();
		$this->Recordings->constructClasses();
	}

	function testRecordingsControllerInstance() {
		$this->assertTrue(is_a($this->Recordings, 'RecordingsController'));
	}

	function tearDown() {
		unset($this->Recordings);
	}
}
?>