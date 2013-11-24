<?php
App::uses('SubjectsController', 'Controller');

/**
 * SubjectsController Test Case
 *
 */
class SubjectsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject',
		'app.grade',
		'app.student',
		'app.student_teacher_message',
		'app.teacher',
		'app.subjects_teacher',
		'app.students_subject'
	);

}
