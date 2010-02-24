<?php
App::import('model', 'Post');
class Photo extends Post {
  
  var $actsAs = array('Taggable', 
                      'Typeable', 
                      'Attachable' => array( 'thumbnails' =>  array('small' => '100x75', 'medium' => '300x250', 'large' => '500 x 375'),
                                             'types' => array('image/jpeg' => 'jpg', 'image/pjpeg' => 'jpg'))
                      );
  
	var $name = 'Photo';
	
	var $useTable = 'posts';
	
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
			'Album' => array('className' => 'Post',
								'foreignKey' => 'parent_id',
								'counterCache' => true
			)							
	);	
 
}
?>