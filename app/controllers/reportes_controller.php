<?php
class ReportesController extends AppController {
    
    var $name = 'Reportes';
    var $uses = array('Equipos');

    function index(){
                
    }




    function aula(){
        $equipo = ClassRegistry::init('Equipos');
        $equipos = $equipo->find('all');
        $this->set('equipos',$equipos);
        if (!empty($this->params['form'])){
            debug($this->params['form']);
            $sesion = ClassRegistry::init('Sesione');
            $equipo = ClassRegistry::init('Equipo');
            $registros = $equipo->find('all',
                    array('conditions' => array('Equipo.aula' => $this->params['form']['aula'])),
                    array('Equipo.id','Equipo.nombre'));
           //debug($registros);
           foreach ($registros as $registro){
               $sesiones[] = $sesion->find('all',
                       array('conditions' => array('Sesione.equipos_id' => $registro['Equipo']['id'])));
                       
                       
           }
           foreach ($sesiones as $sesion){
               debug($sesion);
              
           }
            //$sesiones = $registros['Sesione'];
          // $this->set('sesiones',$sesiones);
            
            
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
