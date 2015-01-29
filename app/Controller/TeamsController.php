<?php
App::uses('AppController', 'Controller');
/**
 * Teams Controller
 *
 * @property Team $Team
 * @property PaginatorComponent $Paginator
 */
class TeamsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Team->recursive = 0;
		$this->set('teams', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'boots';
		if (!$this->Team->exists($id)) {
			throw new NotFoundException(__('Invalid team'));
		}
		$articles = $this->Team->Article->find('all');
		
		$articleCount=count($articles);
		$articleVarNames = array();
		//$articleData;
		//for ($i = 0; $i < $articleCount; $i++) {
		//	$articleVarNames[$i+1] = $art
		//}
		//debug($articles);
		$options = array('conditions' => array('Team.' . $this->Team->primaryKey => $id));
		$this->set('team', $this->Team->find('first', $options));

		$featuredId="54c77a87-5048-41aa-9895-d530c0aa087a";
		$featuredArticle=$this->Team->Article->find('first', array(
			'conditions' => array('Article.id' => $featuredId)
		));
		$farticle=$featuredArticle['Article'];
		$ftitle=$farticle['title'];
		$fid=$farticle['id'];
		$flink=$farticle['link'];
		$fdate=$farticle['created'];
		$fdescription=$farticle['description'];
		$fcreated=$farticle['created'];

		$breadcrumbs = array('Manchester United', 'Real Madrid', 'Barcelona', 'Arsenal', 'Chelsea', 'Tottenham', 'Atletico Madrid');

		//debug($farticle);
		$this->Team->recursive = 0;
		$this->set('articles', $articles);
		//debug($articles);
		$this->set(compact('ftitle', 'flink', 'fdate', 'fdescription', 'fid', 'breadcrumbs', 'articleCount', 'fcreated'));



	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Team->create();
			if ($this->Team->save($this->request->data)) {
				$this->Session->setFlash(__('The team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The team could not be saved. Please, try again.'));
			}
		}
		$leagues = $this->Team->League->find('list');
		$articles = $this->Team->Article->find('list');
		$users = $this->Team->User->find('list');
		$this->set(compact('leagues', 'articles', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Team->exists($id)) {
			throw new NotFoundException(__('Invalid team'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Team->save($this->request->data)) {
				$this->Session->setFlash(__('The team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The team could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Team.' . $this->Team->primaryKey => $id));
			$this->request->data = $this->Team->find('first', $options);
		}
		$leagues = $this->Team->League->find('list');
		$articles = $this->Team->Article->find('list');
		$users = $this->Team->User->find('list');
		$this->set(compact('leagues', 'articles', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Team->id = $id;
		if (!$this->Team->exists()) {
			throw new NotFoundException(__('Invalid team'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Team->delete()) {
			$this->Session->setFlash(__('The team has been deleted.'));
		} else {
			$this->Session->setFlash(__('The team could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function viewbackup($id = null) {
		if (!$this->Team->exists($id)) {
			throw new NotFoundException(__('Invalid team'));
		}
	
		//$articleData;
		//for ($i = 0; $i < $articleCount; $i++) {
		//	$articleVarNames[$i+1] = $art
		//}
		//debug($articles);
		$options = array('conditions' => array('Team.' . $this->Team->primaryKey => $id));
		$this->set('team', $this->Team->find('first', $options));

		//debug($articles);
		$this->set(compact('ftitle', 'flink', 'fdate', 'fdescription', 'fid', 'breadcrumbs', 'articleCount'));



	}


}
