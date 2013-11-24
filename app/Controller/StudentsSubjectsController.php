<?php
App::uses('AppController', 'Controller');
/**
 * StudentsSubjects Controller
 *
 * @property StudentsSubject $StudentsSubject
 * @property PaginatorComponent $Paginator
 */
class StudentsSubjectsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$studentssubjects = $this->StudentsSubject->find('all');
		$this->set('studentsSubjects', $this->Paginator->paginate());
		$this->set(array(
            'studentssubjects' => $studentssubjects,
            '_serialize' => array('studentssubjects')
        ));


	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentsSubject->exists($id)) {
			throw new NotFoundException(__('Invalid students subject'));
		}
		$options = array('conditions' => array('StudentsSubject.' . $this->StudentsSubject->primaryKey => $id));
		$this->set('studentsSubject', $this->StudentsSubject->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentsSubject->create();
			if ($this->StudentsSubject->save($this->request->data)) {
				$this->Session->setFlash(__('The students subject has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The students subject could not be saved. Please, try again.'));
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
		if (!$this->StudentsSubject->exists($id)) {
			throw new NotFoundException(__('Invalid students subject'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentsSubject->save($this->request->data)) {
				$this->Session->setFlash(__('The students subject has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The students subject could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentsSubject.' . $this->StudentsSubject->primaryKey => $id));
			$this->request->data = $this->StudentsSubject->find('first', $options);
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
		$this->StudentsSubject->id = $id;
		if (!$this->StudentsSubject->exists()) {
			throw new NotFoundException(__('Invalid students subject'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StudentsSubject->delete()) {
			$this->Session->setFlash(__('The students subject has been deleted.'));
		} else {
			$this->Session->setFlash(__('The students subject could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}






}




