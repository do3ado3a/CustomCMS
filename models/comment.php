<?php
App::import('model', 'Post');
class Comment extends Post {
  
  var $name = 'Comment';
 
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
			'Post' => array('className' => 'Post',
								'foreignKey' => 'parent_id',
								'counterCache' => true
			)							
	);   
}


?>