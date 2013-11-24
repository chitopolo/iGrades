<?php
App::uses('AppModel', 'Model');
/**
 * Teacher Model
 *
 * @property Grade $Grade
 * @property StudentTeacherMessage $StudentTeacherMessage
 * @property Subject $Subject
 */
class Teacher extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Grade' => array(
			'className' => 'Grade',
			'foreignKey' => 'teacher_id',
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
			'foreignKey' => 'teacher_id',
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
			'joinTable' => 'subjects_teachers',
			'foreignKey' => 'teacher_id',
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
