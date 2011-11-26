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
            $aula = ClassRegistry::init('Carrera');
            $aulas = $aula->find('all');
            $carrera = ClassRegistry::init('Carreras');
            $carreras = $carrera->find('all');
            $this->set('carreras',$carreras);
            $this->set('sesiones',$sesiones);
        }

        
        
    }
    
    function carrera(){
          

        $carrera = ClassRegistry::init('Carreras');
        $carreras = $carrera->find('all');
        $this->set('carreras',$carreras);
        if (!empty($this->params['form'])){
            //debug($this->params['form']);
            $equipo = ClassRegistry::init('Equipo');
            $aula = ClassRegistry::init('Aula');
            $equipos = $equipo->find('all');
            $aulas = $aula->find('all');
            $usuario = ClassRegistry::init('Usuario');
            $registros = $usuario->find('all',
                    array('conditions'=> array('Usuario.carreras_id' => $this->params['form']['carrera'])),
                    array('Usuario.id','Usuario.nombre_completo'));
                       
            $this->set('registros',$registros);
            $this->set('aulas',$aulas);
            $this->set('equipos',$equipos);
            
            
        }
        
        
    }
    
    function periodo(){
         
        if(!empty($this->data))
        {
            $fecha_ini=$this->data['Sesione']['fecha_inicio'];
            $fecha_fin=  $this->data['Sesione']['fecha_fin'];
            $fecha_inicio = $fecha_ini['year'].'-'.$fecha_ini['month'].'-'.$fecha_ini['day'];
            $fecha_fini = $fecha_fin['year'].'-'.$fecha_fin['month'].'-'.$fecha_fin['day'];
            $sesion = ClassRegistry::init('Sesione');
            $sesiones = $sesion->find('all',
                   array('conditions' => array('Sesione.fecha_sesion between ? and ?' => array($fecha_inicio, $fecha_fini))));
            debug($sesiones);
            if(!empty($sesiones)){
                 $carrera = ClassRegistry::init('Carreras');
                 $carreras = $carrera->find('all');
                 $aula = ClassRegistry::init('Aula');
                 $aulas = $aula->find('all');
                 $this->set('aulas',$aulas);
                 $this->set('carreras',$carreras);
                 $this->set('sesiones',$sesiones);
            }
        }
    }
    
   
}

?>
