<?php
App::uses('ArticlesKeyword', 'Model');

/**
 * ArticlesKeyword Test Case
 *
 */
class ArticlesKeywordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.articles_keyword',
		'app.article',
		'app.comment',
		'app.keyword',
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
		$this->ArticlesKeyword = ClassRegistry::init('ArticlesKeyword');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticlesKeyword);

		parent::tearDown();
	}

}
