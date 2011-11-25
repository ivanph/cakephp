<?php
class UsuariosController extends AppController {

	var $name = 'Usuarios';
        
	function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
		
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
                $equipo = ClassRegistry::init('Equipo');
                $equipos = $equipo->find('all');
                $this->set('equipos',$equipos);
		$this->set('usuario', $this->Usuario->read(null, $id));
		
	
	}

	function add() {
		if (!empty($this->data)) {
                     // No guardar si se presionó el botón cancelar     
                        if (isset( $this->params['form']['cancel'])) {
                                $this->Session->setFlash(__('Operación cancelada. No se realizaron cambios', true));
                                $this->redirect( array( 'action' => 'index' ));
                        }
			$this->Usuario->create();
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('Usuario agregado correctamente', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo agregar el usuario. Por favor intente de nuevo.', true));
			}
		}
		$tipoUsuarios = $this->Usuario->TipoUsuario->find('list');
		$carreras = $this->Usuario->Carrera->find('list');
		$this->set(compact('tipoUsuarios', 'carreras'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Usuario no válido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
                     // abort if cancel button was pressed      
                        if (isset( $this->params['form']['cancel'])) {
                                $this->Session->setFlash(__('Operación cancelada. No se realizaron cambios', true));
                                $this->redirect( array( 'action' => 'index' ));
                        }
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('Usuario actualizado correctamente', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudieron guardar los datos. Por favor intente de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
		$tipoUsuarios = $this->Usuario->TipoUsuario->find('list');
		$carreras = $this->Usuario->Carrera->find('list');
		$this->set(compact('tipoUsuarios', 'carreras'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Usuario no encontrado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Usuario->delete($id)) {
			$this->Session->setFlash(__('Se ha borrado el usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('No se pudo borrar el usuario', true));
		$this->redirect(array('action' => 'index'));
	}
        
        function buscar(){
            if (!empty($this->data)) {
                
                $usuario = $this->data;
                
                $id = $this->Usuario->find(
                    array('Usuario.matricula' => $usuario['Usuario']['matricula']),
                    array('Usuario.id'));
                if(!empty ($id)){
                      $this->redirect(array('controller' => 'usuarios','action'=>'view/'. $id['Usuario']['id']));
                }
                      else{
                            $this->Session->setFlash(__('Usuario no encontrado', true)); 
                            $this->redirect(array('controller' => 'usuarios','action'=>'buscar'));
               }
            }
            
            
            }
        
}
