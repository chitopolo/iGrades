<?php
App::uses('StudentsSubject', 'Model');

/**
 * StudentsSubject Test Case
 *
 */
class StudentsSubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.students_subject',
		'app.subject',
		'app.student',
		'app.grade',
		'app.teacher',
		'app.student_teacher_message'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentsSubject = ClassRegistry::init('StudentsSubject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentsSubject);

		parent::tearDown();
	}

}
