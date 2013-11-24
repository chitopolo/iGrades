<?php
/**
 * SubjectFixture
 *
 */
class SubjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8', 'key' => 'primary'),
		'registro' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'sigla' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'materia' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horario' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'semestre' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aula' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'registro' => array('column' => 'registro', 'unique' => 1),
			'registro_2' => array('column' => 'registro', 'unique' => 0),
			'registro_3' => array('column' => 'registro', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 'Lorem ipsum dolor sit amet',
			'registro' => 1,
			'sigla' => 'Lorem ipsum dolor sit amet',
			'materia' => 'Lorem ipsum dolor sit amet',
			'horario' => 'Lorem ipsum dolor sit amet',
			'semestre' => 'Lorem ipsum dolor sit amet',
			'aula' => 'Lorem ipsum dolor sit amet',
			'created_at' => '2013-11-23 16:41:50',
			'updated_at' => '2013-11-23 16:41:50'
		),
	);

}
