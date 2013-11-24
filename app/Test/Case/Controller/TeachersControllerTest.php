<?php
App::uses('TeachersController', 'Controller');

/**
 * TeachersController Test Case
 *
 */
class TeachersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.teacher',
		'app.grade',
		'app.student',
		'app.student_teacher_message',
		'app.subject',
		'app.students_subject',
		'app.subjects_teacher'
	);

}
