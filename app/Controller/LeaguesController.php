<?php
App::uses('AppController', 'Controller');
/*App::uses('TeamsController', 'Controller');
App::uses('PlayersController', 'Controller');
App::uses('ArticlesController', 'Controller');
App::uses('UsersController', 'Controller'); */


/**
 * Leagues Controller
 *
 * @property League $League
 * @property PaginatorComponent $Paginator
 */
class LeaguesController extends AppController {

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
		$this->layout = 'boots';
		$this->League->recursive = 0;
		$this->set('leagues', $this->Paginator->paginate());
	}

	public function indexbackup() {
		$this->League->recursive = 0;
		$this->set('leagues', $this->Paginator->paginate());
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
		if (!$this->League->exists($id)) {
			throw new NotFoundException(__('Invalid league'));
		}
		$this->loadModel('Article');
		$relatedArticles=$this->Article->find('all');
		//debug($relatedArticles);
		$options = array('conditions' => array('League.' . $this->League->primaryKey => $id));

		$featuredId="54c77a87-5048-41aa-9895-d530c0aa087a";
		$featuredArticle=$this->Article->find('first', array(
			'conditions' => array('Article.id' => $featuredId)
		));
		$farticle=$featuredArticle['Article'];
		$ftitle=$farticle['title'];
		$fid=$farticle['id'];
		$flink=$farticle['link'];
		$fdate=$farticle['created'];
		$fdescription=$farticle['description'];
		$fcreated=$farticle['created'];
		$fsource=$farticle['source'];
		$this->set(compact('ftitle', 'flink', 'fdate', 'fdescription', 'fid', 'breadcrumbs', 'articleCount', 'fcreated', 'fsource'));


		$this->set('articles', $this->Article->find('all'));		
		$this->set('league', $this->League->find('first', $options));
	}

	public function viewbackup($id = null) {
		if (!$this->League->exists($id)) {
			throw new NotFoundException(__('Invalid league'));
		}
		$options = array('conditions' => array('League.' . $this->League->primaryKey => $id));
		$this->set('league', $this->League->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->League->create();
			if ($this->League->save($this->request->data)) {
				$this->Session->setFlash(__('The league has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The league could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->League->exists($id)) {
			throw new NotFoundException(__('Invalid league'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->League->save($this->request->data)) {
				$this->Session->setFlash(__('The league has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The league could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('League.' . $this->League->primaryKey => $id));
			$this->request->data = $this->League->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->League->id = $id;
		if (!$this->League->exists()) {
			throw new NotFoundException(__('Invalid league'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->League->delete()) {
			$this->Session->setFlash(__('The league has been deleted.'));
		} else {
			$this->Session->setFlash(__('The league could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function teams($id = null) {
		$this->layout = 'boots';
		if (!$this->League->exists($id)) {
			throw new NotFoundException(__('Invalid league'));
		}
		$options = array('conditions' => array('League.' . $this->League->primaryKey => $id));
		$this->set('league', $this->League->find('first', $options));
	}



}
