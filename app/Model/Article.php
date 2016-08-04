<?php
App::uses('AppModel', 'Model');
/**
 * Article Model
 *
 * @property Project $Project
 * @property Skills $Skills
 */
class Article extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Skills' => array(
			'className' => 'Skills',
			'foreignKey' => 'skills_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
