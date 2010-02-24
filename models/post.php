<?php
class Post extends AppModel {

	var $name = 'Post';
	
	var $useTable = 'posts';
	
   var $actsAs = array('Taggable', 
                      'Typeable'
                      );
	
	var $validate = array(
	    'title' => array(
	    'rule' => array('minLength', 1),
	    'message' => 'Title is required.'
	    )
	);

	var $hasMany = array(
			'Comment' => array('className' => 'Comment',
								'foreignKey' => 'parent_id',
								'dependent' => true,
								'order' => array('Comment.id' => 'DESC')
								
			)
	);
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
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

	var $hasAndBelongsToMany = array(
			'Tag' => array('className' => 'Tag',
						'joinTable' => 'posts_tags',
						'foreignKey' => 'post_id',
						'associationForeignKey' => 'tag_id',
						'unique' => true,
						'conditions' => '',
						'fields' => '',
						'order' => '',
						'limit' => '',
						'offset' => '',
						'finderQuery' => '',
						'deleteQuery' => '',
						'insertQuery' => ''
			)
	);

  function paginate($conditions, $fields, $order, $limit, $page = 1, $recursive = null, $extra = array()) 
  {    
    $parameters = isset($conditions['joins']) ? array_merge($conditions, compact('fields', 'order', 'limit', 'page', 'recursive', 'extra')) : compact('conditions', 'fields', 'order', 'limit', 'page', 'recursive', 'extra'); 
    return $this->find('all', $parameters);
  }

  function paginateCount($conditions = null, $recursive = 0, $extra = array()) 
  {
    $parameters = isset($conditions['joins']) ? array_merge($conditions, compact('recursive', 'extra')) : compact('conditions', 'recursive', 'extra');
    return count($this->find('all', $parameters));
  } 		

}
?>