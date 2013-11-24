<?php
App::uses('StudentsSubjectsController', 'Controller');

/**
 * StudentsSubjectsController Test Case
 *
 */
class StudentsSubjectsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.students_subject',
		'app.subject',
		'app.grade',
		'app.student',
		'app.student_teacher_message',
		'app.teacher',
		'app.subjects_teacher'
	);

}
