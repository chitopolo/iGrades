<?php
App::uses('StudentTeacherMessage', 'Model');

/**
 * StudentTeacherMessage Test Case
 *
 */
class StudentTeacherMessageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student_teacher_message',
		'app.student',
		'app.teacher'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentTeacherMessage = ClassRegistry::init('StudentTeacherMessage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentTeacherMessage);

		parent::tearDown();
	}

}
