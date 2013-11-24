<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 * @property Grade $Grade
 * @property StudentTeacherMessage $StudentTeacherMessage
 * @property Subject $Subject
 */
class Student extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'paterno';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idp' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Grade' => array(
			'className' => 'Grade',
			'foreignKey' => 'student_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'StudentTeacherMessage' => array(
			'className' => 'StudentTeacherMessage',
			'foreignKey' => 'student_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Subject' => array(
			'className' => 'Subject',
			'joinTable' => 'students_subjects',
			'foreignKey' => 'student_id',
			'associationForeignKey' => 'subject_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
