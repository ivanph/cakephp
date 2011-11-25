<?php
class EquiposController extends AppController {

	var $name = 'Equipos';

	function index() {
		$this->Equipo->recursive = 0;
		$this->set('equipos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid equipo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('equipo', $this->Equipo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Equipo->create();
			if ($this->Equipo->save($this->data)) {
				$this->Session->setFlash(__('The equipo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo could not be saved. Please, try again.', true));
			}
		}
		$aulas = $this->Equipo->Aula->find('list');
		$this->set(compact('aulas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid equipo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Equipo->save($this->data)) {
				$this->Session->setFlash(__('The equipo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Equipo->read(null, $id);
		}
		$aulas = $this->Equipo->Aula->find('list');
		$this->set(compact('aulas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for equipo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Equipo->delete($id)) {
			$this->Session->setFlash(__('Equipo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Equipo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
