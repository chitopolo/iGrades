<?php
App::uses('AppController', 'Controller');
/**
 * Grades Controller
 *
 * @property Grade $Grade
 * @property PaginatorComponent $Paginator
 */
class GradesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		 $grades = $this->Grade->find('all');
		$this->set('grades', $this->Paginator->paginate());
		$this->set(array(
            'grades' => $grades,
            '_serialize' => array('grades')
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
		if (!$this->Grade->exists($id)) {
			throw new NotFoundException(__('Invalid grade'));
		}
		$options = array('conditions' => array('Grade.' . $this->Grade->primaryKey => $id));
		$this->set('grade', $this->Grade->find('first', $options));
		$grades = $this->Grade->findById($id);
		$this->set(array(
            'grades' => $grades,
            '_serialize' => array('grades')
        ));

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grade->create();
			if ($this->Grade->save($this->request->data)) {
				$this->Session->setFlash(__('The grade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade could not be saved. Please, try again.'));
			}
		}
		$students = $this->Grade->Student->find('list');
		$subjects = $this->Grade->Subject->find('list');
		$teachers = $this->Grade->Teacher->find('list');
		$this->set(compact('students', 'subjects', 'teachers'));

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Grade->exists($id)) {
			throw new NotFoundException(__('Invalid grade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grade->save($this->request->data)) {
				$this->Session->setFlash(__('The grade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grade.' . $this->Grade->primaryKey => $id));
			$this->request->data = $this->Grade->find('first', $options);
		}
		$students = $this->Grade->Student->find('list');
		$subjects = $this->Grade->Subject->find('list');
		$teachers = $this->Grade->Teacher->find('list');
		$this->set(compact('students', 'subjects', 'teachers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Grade->delete()) {
			$this->Session->setFlash(__('The grade has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
