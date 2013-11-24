<?php
App::uses('StudentsController', 'Controller');

/**
 * StudentsController Test Case
 *
 */
class StudentsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student',
		'app.grade',
		'app.subject',
		'app.students_subject',
		'app.teacher',
		'app.student_teacher_message',
		'app.subjects_teacher'
	);

}
