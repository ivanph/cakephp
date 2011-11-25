<?php
class TipoUsuariosController extends AppController {

	var $name = 'TipoUsuarios';

	function index() {
		$this->TipoUsuario->recursive = 0;
		$this->set('tipoUsuarios', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->TipoUsuario->create();
			if ($this->TipoUsuario->save($this->data)) {
				$this->Session->setFlash(__('Tipo de Usuario agregado correctamente', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Tipo de Usuario no se pudo guardar. Por favor intente de nuevo', true));
			}
		}
	}

        function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('No se encontró el registro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TipoUsuario->delete($id)) {
			$this->Session->setFlash(__('Tipo de Usuario eliminado correctamente', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('No se pudo borrar el Tipo de Usuario', true));
		$this->redirect(array('action' => 'index'));
	}
}
