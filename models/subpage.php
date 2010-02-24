<?php
App::import('model', 'Page');
class Subpage extends Page {
  
  var $name = 'Subpage';
 
	var $belongsTo = array(
			'Status' => array('className' => 'Status',
								'foreignKey' => 'status_id',
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'counterCache' => true
			),
			
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id'
			),
			'Page' => array('className' => 'Page',
								'foreignKey' => 'parent_id',
								'counterCache' => true
			)							
	);   
}


?>