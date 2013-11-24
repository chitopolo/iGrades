<?php
/**
 * SubjectsTeacherFixture
 *
 */
class SubjectsTeacherFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'subject_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'teacher_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'index_subjects_teachers_on_subject_id_and_teacher_id' => array('column' => array('subject_id', 'teacher_id'), 'unique' => 0),
			'index_subjects_teachers_on_teacher_id_and_subject_id' => array('column' => array('teacher_id', 'subject_id'), 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'subject_id' => 'Lorem ipsum dolor sit amet',
			'teacher_id' => 1
		),
	);

}
