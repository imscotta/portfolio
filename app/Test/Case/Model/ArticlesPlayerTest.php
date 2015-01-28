<?php
App::uses('ArticlesPlayer', 'Model');

/**
 * ArticlesPlayer Test Case
 *
 */
class ArticlesPlayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.articles_player',
		'app.article',
		'app.comment',
		'app.keyword',
		'app.articles_keyword',
		'app.player',
		'app.team',
		'app.articles_team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArticlesPlayer = ClassRegistry::init('ArticlesPlayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticlesPlayer);

		parent::tearDown();
	}

}
