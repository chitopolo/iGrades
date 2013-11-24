<?php
App::uses('AppController', 'Controller');
/**
 * SubjectsTeachers Controller
 *
 * @property SubjectsTeacher $SubjectsTeacher
 * @property PaginatorComponent $Paginator
 */
class SubjectsTeachersController extends AppController {

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
		

		$subjectsteachers = $this->SubjectsTeacher->find('all');
		$this->set('subjectsteachers', $this->Paginator->paginate());
		$this->set(array(
            'subjectsteachers' => $subjectsteachers,
            '_serialize' => array('subjectsteachers')
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
		if (!$this->SubjectsTeacher->exists($id)) {
			throw new NotFoundException(__('Invalid subjects teacher'));
		}
		$options = array('conditions' => array('SubjectsTeacher.' . $this->SubjectsTeacher->primaryKey => $id));
		$this->set('subjectsTeacher', $this->SubjectsTeacher->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubjectsTeacher->create();
			if ($this->SubjectsTeacher->save($this->request->data)) {
				$this->Session->setFlash(__('The subjects teacher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subjects teacher could not be saved. Please, try again.'));
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
		if (!$this->SubjectsTeacher->exists($id)) {
			throw new NotFoundException(__('Invalid subjects teacher'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubjectsTeacher->save($this->request->data)) {
				$this->Session->setFlash(__('The subjects teacher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subjects teacher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubjectsTeacher.' . $this->SubjectsTeacher->primaryKey => $id));
			$this->request->data = $this->SubjectsTeacher->find('first', $options);
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
		$this->SubjectsTeacher->id = $id;
		if (!$this->SubjectsTeacher->exists()) {
			throw new NotFoundException(__('Invalid subjects teacher'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubjectsTeacher->delete()) {
			$this->Session->setFlash(__('The subjects teacher has been deleted.'));
		} else {
			$this->Session->setFlash(__('The subjects teacher could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
