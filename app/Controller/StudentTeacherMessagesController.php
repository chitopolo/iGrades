<?php
App::uses('AppController', 'Controller');
/**
 * StudentTeacherMessages Controller
 *
 * @property StudentTeacherMessage $StudentTeacherMessage
 * @property PaginatorComponent $Paginator
 */
class StudentTeacherMessagesController extends AppController {

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
		$this->StudentTeacherMessage->recursive = 0;
		$this->set('studentTeacherMessages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentTeacherMessage->exists($id)) {
			throw new NotFoundException(__('Invalid student teacher message'));
		}
		$options = array('conditions' => array('StudentTeacherMessage.' . $this->StudentTeacherMessage->primaryKey => $id));
		$this->set('studentTeacherMessage', $this->StudentTeacherMessage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentTeacherMessage->create();
			if ($this->StudentTeacherMessage->save($this->request->data)) {
				$this->Session->setFlash(__('The student teacher message has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student teacher message could not be saved. Please, try again.'));
			}
		}
		$students = $this->StudentTeacherMessage->Student->find('list');
		$teachers = $this->StudentTeacherMessage->Teacher->find('list');
		$this->set(compact('students', 'teachers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StudentTeacherMessage->exists($id)) {
			throw new NotFoundException(__('Invalid student teacher message'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentTeacherMessage->save($this->request->data)) {
				$this->Session->setFlash(__('The student teacher message has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student teacher message could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentTeacherMessage.' . $this->StudentTeacherMessage->primaryKey => $id));
			$this->request->data = $this->StudentTeacherMessage->find('first', $options);
		}
		$students = $this->StudentTeacherMessage->Student->find('list');
		$teachers = $this->StudentTeacherMessage->Teacher->find('list');
		$this->set(compact('students', 'teachers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StudentTeacherMessage->id = $id;
		if (!$this->StudentTeacherMessage->exists()) {
			throw new NotFoundException(__('Invalid student teacher message'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StudentTeacherMessage->delete()) {
			$this->Session->setFlash(__('The student teacher message has been deleted.'));
		} else {
			$this->Session->setFlash(__('The student teacher message could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
