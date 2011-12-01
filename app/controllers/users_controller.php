<?php
class UsersController extends AppController {
         
	var $name = 'Users';
        
     

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Usuario no encontrado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
                    if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
                    $this->User->create();
                    $this->User->save($this->data);
                        
                    $this->redirect(array('action' => 'index'));
                }
            }
        }


	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Usuario no válido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('Cambios agregados correctamente', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo salvar el administrador, favor de intentrar nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Usuario no encontrado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('Se ha eliminado el usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('No se pudo eliminar el usuario', true));
		$this->redirect(array('action' => 'index'));
	}
        
         function login() {      }

        function logout() {
            $this->redirect($this->Auth->logout());
            
        }
}
