<?php
App::uses('SubjectsTeachersController', 'Controller');

/**
 * SubjectsTeachersController Test Case
 *
 */
class SubjectsTeachersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subjects_teacher',
		'app.subject',
		'app.grade',
		'app.student',
		'app.student_teacher_message',
		'app.teacher',
		'app.students_subject'
	);

}
