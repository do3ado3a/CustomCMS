<?php
class PostsTag extends AppModel {

	var $name = 'PostsTag';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Post' => array('className' => 'Post',
								'foreignKey' => 'post_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'Tag' => array('className' => 'Tag',
								'foreignKey' => 'tag_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

}
?>