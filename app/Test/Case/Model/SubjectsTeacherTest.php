<?php
App::uses('SubjectsTeacher', 'Model');

/**
 * SubjectsTeacher Test Case
 *
 */
class SubjectsTeacherTest extends CakeTestCase {

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

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubjectsTeacher = ClassRegistry::init('SubjectsTeacher');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubjectsTeacher);

		parent::tearDown();
	}

}
