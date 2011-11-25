<?php
class EquiposController extends AppController {

	var $name = 'Equipos';

	function index() {
		$this->Equipo->recursive = 0;
		$this->set('equipos', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Equipo->create();
			if ($this->Equipo->save($this->data)) {
				$this->Session->setFlash(__('Equipo agregado correctamente', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo agregar el equipo. Por favor intente de nuevo.', true));
			}
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Equipo no encontrado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Equipo->delete($id)) {
			$this->Session->setFlash(__('Equipo eliminado correctamente', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('No se pudo eliminar el equipo', true));
		$this->redirect(array('action' => 'index'));
	}
}
