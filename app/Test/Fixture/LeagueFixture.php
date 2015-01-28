<?php
/**
 * LeagueFixture
 *
 */
class LeagueFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'country' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'photo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 144, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'social_link_1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 144, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'id' => '54c18883-9580-401a-9de3-94f7c0aa087a',
			'name' => 'Lorem ipsum do',
			'country' => 'Lorem ipsum do',
			'photo' => 'Lorem ipsum dolor sit amet',
			'social_link_1' => 'Lorem ipsum dolor sit amet'
		),
	);

}
