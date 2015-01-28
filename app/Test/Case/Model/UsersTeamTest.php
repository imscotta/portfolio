<?php
App::uses('UsersTeam', 'Model');

/**
 * UsersTeam Test Case
 *
 */
class UsersTeamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_team',
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
		'app.users_player'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersTeam = ClassRegistry::init('UsersTeam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersTeam);

		parent::tearDown();
	}

}
