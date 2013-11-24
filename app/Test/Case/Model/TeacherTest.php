<?php
App::uses('Teacher', 'Model');

/**
 * Teacher Test Case
 *
 */
class TeacherTest extends CakeTestCase {

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

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Teacher = ClassRegistry::init('Teacher');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Teacher);

		parent::tearDown();
	}

}
