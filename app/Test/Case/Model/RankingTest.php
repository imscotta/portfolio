<?php
App::uses('Ranking', 'Model');

/**
 * Ranking Test Case
 *
 */
class RankingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ranking',
		'app.comment',
		'app.user',
		'app.article',
		'app.keyword',
		'app.articles_keyword',
		'app.player',
		'app.team',
		'app.articles_player',
		'app.users_player',
		'app.articles_team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ranking = ClassRegistry::init('Ranking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ranking);

		parent::tearDown();
	}

}
