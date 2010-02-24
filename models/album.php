<?php
App::import('model', 'Post');
class Album extends Post {
  
	var $name = 'Album';
	var $useTable = 'posts';
	
	
	var $hasMany = array(
			'Photo' => array('className' => 'Photo',
								'foreignKey' => 'parent_id',
								'dependent' => true,
								'order' => array('Photo.id' => 'DESC')
								
			)
	);		
 
}
?>