<?php
App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 * @property PaginatorComponent $Paginator
 */
class ArticlesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');





	public function isAuthorized($user) {
	    // All registered users can add posts
	    if ($this->action === 'add') {
		return true;
	    }

	    // The owner of a post can edit and delete it
	    if (in_array($this->action, array('edit', 'delete'))) {
		$postId = (int) $this->request->params['pass'][0];
		if ($this->Article->isOwnedBy($postId, $user['id'])) {
		    return true;
		}
	    }

	    return parent::isAuthorized($user);
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'boots';
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
		$fsource=$farticle['source'];

		$breadcrumbs = array('Real Madrid', 'Barcelona', 'Arsenal', 'Chelsea', 'Tottenham', 'Atletico Madrid');



		//debug($farticle);
		$this->Article->recursive = 0;
		$this->set('articles', $this->Paginator->paginate(), 'ftitle', 'flink', 'fdate');
		$this->set(compact('ftitle', 'flink', 'fdate', 'fdescription', 'fid', 'breadcrumbs', 'fsource'));
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
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$featuredArticle=$this->Article->find('first', array(
			'conditions' => array('Article.id' => $id)
		));
		$farticle=$featuredArticle['Article'];
		$ftitle=$farticle['title'];
		$fid=$farticle['id'];
		$flink=$farticle['link'];
		$fdate=$farticle['created'];
		$fdescription=$farticle['description'];
		$fsource=$farticle['source'];
		//debug($flink);
		$this->set(compact('ftitle', 'flink', 'fdate', 'fdescription', 'fid', 'breadcrumbs', 'fsource'));
		$this->set('article', $this->Article->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Article']['user_id'] = $this->Auth->user('id');
			$this->Article->create();
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		}
		$keywords = $this->Article->Keyword->find('list');
		$players = $this->Article->Player->find('list');
		$teams = $this->Article->Team->find('list');
		$this->set(compact('keywords', 'players', 'teams'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
		}
		$keywords = $this->Article->Keyword->find('list');
		$players = $this->Article->Player->find('list');
		$teams = $this->Article->Team->find('list');
		$this->set(compact('keywords', 'players', 'teams'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('The article has been deleted.'));
		} else {
			$this->Session->setFlash(__('The article could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



/**
 * home method
 *
 * @return void
 */
	public function home() {
		$this->Article->recursive = 0;
		$this->set('articles', $this->Paginator->paginate());
	}


/**
 * framehome method
 *
 * @return void
 */
	public function framehome() {
		$this->layout = 'frame7';
		$this->Article->recursive = 0;
		$this->set('articles', $this->Paginator->paginate());
	}


/**
 * framehome method
 *
 * @return void
 */
	public function index2() {
		$this->layout = 'frame7';
		$this->Article->recursive = 0;
		$this->set('articles', $this->Paginator->paginate());
	}



/**
 * framehome method
 *
 * @return void
 */
	public function item() {
		$this->layout = 'frame7';
		$this->Article->recursive = 0;
		$this->set('articles', $this->Paginator->paginate());
	}


/**
 * index method
 *
 * @return void
 */
	public function indexnormal() {
		$this->Article->recursive = 0;
		$this->set('articles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function viewbackup($id = null) {
		$this->layout = 'boots';
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));
	}


}
