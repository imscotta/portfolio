<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.users_player',
		'app.users_team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
