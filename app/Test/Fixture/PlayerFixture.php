<?php
/**
 * PlayerFixture
 *
 */
class PlayerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 16, 'unsigned' => false),
		'dob' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 16, 'unsigned' => false),
		'social_link_1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'social_link_2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'social_link_3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'team_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '54c18883-c488-477f-896d-94f7c0aa087a',
			'first_name' => 'Lorem ipsum do',
			'last_name' => 1,
			'dob' => 1,
			'social_link_1' => 'Lorem ipsum dolor sit amet',
			'social_link_2' => 'Lorem ipsum dolor sit amet',
			'social_link_3' => 'Lorem ipsum dolor sit amet',
			'team_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
