<?php
App::uses('Keyword', 'Model');

/**
 * Keyword Test Case
 *
 */
class KeywordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.keyword',
		'app.article',
		'app.comment',
		'app.user',
		'app.ranking',
		'app.articles_keyword',
		'app.player',
		'app.articles_player',
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
		$this->Keyword = ClassRegistry::init('Keyword');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Keyword);

		parent::tearDown();
	}

}
