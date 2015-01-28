<?php
App::uses('UsersPlayer', 'Model');

/**
 * UsersPlayer Test Case
 *
 */
class UsersPlayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_player',
		'app.user',
		'app.team',
		'app.league',
		'app.player',
		'app.article',
		'app.comment',
		'app.ranking',
		'app.keyword',
		'app.articles_keyword',
		'app.articles_player',
		'app.articles_team',
		'app.users_team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersPlayer = ClassRegistry::init('UsersPlayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersPlayer);

		parent::tearDown();
	}

}
