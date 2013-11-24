<?php
App::uses('AppModel', 'Model');
/**
 * StudentTeacherMessage Model
 *
 * @property Student $Student
 * @property Teacher $Teacher
 */
class StudentTeacherMessage extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'message';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Teacher' => array(
			'className' => 'Teacher',
			'foreignKey' => 'teacher_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
