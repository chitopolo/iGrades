<?php
App::uses('StudentTeacherMessagesController', 'Controller');

/**
 * StudentTeacherMessagesController Test Case
 *
 */
class StudentTeacherMessagesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student_teacher_message',
		'app.student',
		'app.grade',
		'app.subject',
		'app.students_subject',
		'app.teacher',
		'app.subjects_teacher'
	);

}
