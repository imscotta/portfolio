<?php
/**
 * TeamFixture
 *
 */
class TeamFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'founded' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 16, 'unsigned' => false),
		'city' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 18, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'country' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'history' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 144, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'league_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'id' => '54c18883-a360-42d6-b07d-94f7c0aa087a',
			'name' => 'Lorem ipsum dolor sit amet',
			'founded' => 1,
			'city' => 'Lorem ipsum dolo',
			'country' => 'Lorem ipsum do',
			'history' => 'Lorem ipsum dolor sit amet',
			'league_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
