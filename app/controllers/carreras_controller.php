<?php
class CarrerasController extends AppController {

	var $name = 'Carreras';

	function index() {
		$this->Carrera->recursive = 0;
		$this->set('carreras', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Carrera->create();
			if ($this->Carrera->save($this->data)) {
				$this->Session->setFlash(__('Carrera añadida correctamente', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al al añadir la Carrera. Por favor intente de nuevo', true));
			}
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Carrera no válida', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Carrera->delete($id)) {
			$this->Session->setFlash(__('Carrera eliminada correctamente', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('No se pudo borrar la carrera', true));
		$this->redirect(array('action' => 'index'));
	}
}
