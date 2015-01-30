<?php
App::uses('AppController', 'Controller');
/**
 * Keywords Controller
 *
 * @property Keyword $Keyword
 * @property PaginatorComponent $Paginator
 */
class KeywordsController extends AppController {

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
		$this->Keyword->recursive = 0;
		$this->set('keywords', $this->Paginator->paginate());
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
		if (!$this->Keyword->exists($id)) {
			throw new NotFoundException(__('Invalid keyword'));
		}
		$options = array('conditions' => array('Keyword.' . $this->Keyword->primaryKey => $id));
		$this->set('keyword', $this->Keyword->find('first', $options));
	}

	public function viewbackup($id = null) {
		$this->layout = 'boots';
		if (!$this->Keyword->exists($id)) {
			throw new NotFoundException(__('Invalid keyword'));
		}
		$options = array('conditions' => array('Keyword.' . $this->Keyword->primaryKey => $id));
		$this->set('keyword', $this->Keyword->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Keyword->create();
			if ($this->Keyword->save($this->request->data)) {
				$this->Session->setFlash(__('The keyword has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The keyword could not be saved. Please, try again.'));
			}
		}
		$articles = $this->Keyword->Article->find('list');
		$this->set(compact('articles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Keyword->exists($id)) {
			throw new NotFoundException(__('Invalid keyword'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Keyword->save($this->request->data)) {
				$this->Session->setFlash(__('The keyword has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The keyword could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Keyword.' . $this->Keyword->primaryKey => $id));
			$this->request->data = $this->Keyword->find('first', $options);
		}
		$articles = $this->Keyword->Article->find('list');
		$this->set(compact('articles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Keyword->id = $id;
		if (!$this->Keyword->exists()) {
			throw new NotFoundException(__('Invalid keyword'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Keyword->delete()) {
			$this->Session->setFlash(__('The keyword has been deleted.'));
		} else {
			$this->Session->setFlash(__('The keyword could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
