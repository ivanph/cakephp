<?php
class AulasController extends AppController {

	var $name = 'Aulas';

	function index() {
		$this->Aula->recursive = 0;
		$this->set('aulas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid aula', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('aula', $this->Aula->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Aula->create();
			if ($this->Aula->save($this->data)) {
				$this->Session->setFlash(__('The aula has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aula could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid aula', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Aula->save($this->data)) {
				$this->Session->setFlash(__('The aula has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aula could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Aula->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for aula', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Aula->delete($id)) {
			$this->Session->setFlash(__('Aula deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Aula was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
