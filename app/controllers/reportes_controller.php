<?php
class ReportesController extends AppController {
    
    var $name = 'Reportes';
    var $uses = array('Equipos');

    function index(){
                
    }




    function aula(){
        $aula = ClassRegistry::init('Aula');
        $aulas = $aula->find('all');
        $this->set('aulas',$aulas);
        
        if (!empty ($this->params['form'])){
            $id_aula = $this->params['form']['aula'];
            $sesion = ClassRegistry::init('Sesione');
            $sesiones = $sesion->find('all', array('conditions' => array('Equipo.aulas_id' => $id_aula)));
          //          array('conditions'->array('Equipo.aulas_id'=>$this))
            debug($sesiones);
        }

        
        
    }
    
    function carrera(){
        $carrera = ClassRegistry::init('Carreras');
        $carreras = $carrera->find('all');
        $this->set('carreras',$carreras);
        if (!empty($this->params['form'])){
            //debug($this->params['form']);
            $sesion = ClassRegistry::init('Sesione');
            $usuario = ClassRegistry::init('Usuario');
            $registros = $usuario->find(
                    array('Usuario.carreras_id' => $this->params['form']['carrera']),
                    array('Usuario.carreras_id','Usuario.nombre_completo'));
           $sesiones = $registros['Sesione'];
           $this->set('sesiones',$sesiones);
            
            
        }
        
        
    }
    
}

?>
