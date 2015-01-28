<?php
/**
 * RankingFixture
 *
 */
class RankingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'key' => 'primary'),
		'ranking' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 16, 'unsigned' => false),
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
			'id' => '54c18883-39c8-4fdf-a0c4-94f7c0aa087a',
			'ranking' => 1
		),
	);

}
