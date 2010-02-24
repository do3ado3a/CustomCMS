<?php
class Page extends AppModel {

	var $name = 'Page';
	var $useTable = 'pages';
	
  var $actsAs = array('Taggable', 
                      'Typeable'
                      );
	
	var $validate = array(
	    'title' => array(
	    'rule' => array('minLength', 1),
	    'message' => 'Title is required.'
	    ),
	    'body' => array(
	    'rule'=> array('minLength', 1),
	    'message' => 'Body Required'
	    )
	);
	
	var $hasMany = array(
			'Subpage' => array('className' => 'Subpage',
								'foreignKey' => 'parent_id',
								'dependent' => true,
								'order' => array('Subpage.id' => 'DESC')
								
			)
	);
		
	var $belongsTo = array(
			'Status' => array('className' => 'Status',
								'foreignKey' => 'status_id',
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'counterCache' => true
			),
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)				
	);
	
	
	
	
	
}
?>