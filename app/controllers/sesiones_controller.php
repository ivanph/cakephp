<?php
class SesionesController extends AppController {
   
	var $name = 'Sesiones';

	function index() {
		$this->Sesione->recursive = 0;
		$this->set('sesiones', $this->paginate());
                $equipos = $this->Sesione->Equipo->find('list');
		$tipo = ClassRegistry::init('TipoUsuario');
                $tipos = $tipo->find('all');
                $this->set('tipos',$tipos);
                $carrera = ClassRegistry::init('Carrera');
                $carreras = $carrera->find('all');
                $this->set('carreras',$carreras);                
                $this->set(compact('equipos'));
                $aula = ClassRegistry::init('Aula');
                $aulas = $aula->find('all');
                $this->set('aulas',$aulas);
                
	}
       


        function pdf()
{
      Configure::write('debug',0);
      $this->layout = 'pdf'; //this will use the pdf.ctp layout
      // Operaciones que deseamos realizar y variables que pasaremos a la vista.
      $this->render();
}
	
}
