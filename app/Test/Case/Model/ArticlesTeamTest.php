<?php
App::uses('ArticlesTeam', 'Model');

/**
 * ArticlesTeam Test Case
 *
 */
class ArticlesTeamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.articles_team',
		'app.article',
		'app.comment',
		'app.keyword',
		'app.articles_keyword',
		'app.player',
		'app.articles_player',
		'app.team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArticlesTeam = ClassRegistry::init('ArticlesTeam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticlesTeam);

		parent::tearDown();
	}

}
