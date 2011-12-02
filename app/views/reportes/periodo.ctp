<div class="reportes index">
    <?php echo $this->Form->create('Reporte');?>
	<fieldset>
		<legend><?php __('Generar reporte por Periodo'); ?></legend>
	<?php
            $monthNames = array(
                '01'=>'Enero',
                '02'=>'Febrero',
                '03'=>'Marzo',
                '04'=>'Abril',
                '05'=>'Mayo',
                '06'=>'Junio',
                '07'=>'Julio',
                '08'=>'Agosto',
                '09'=>'Septiembre',
                '10'=>'Octubre',
                '11'=>'Noviembre',
                '12'=>'Diciembre');
            
            echo $this->Form->dateTime(
                    'Sesione.fecha_inicio',
                    'DMY',
                    'NONE',
                    'NONE',
                    array('minYear'=>2010,'maxYear'=>2020,'empty'=>false,'monthNames'=>$monthNames)); 
            
            echo $this->Form->label('Inicio'); 
            echo '<br>';
            
            echo $this->Form->dateTime('Sesione.fecha_fin',
                    'DMY',
                    'NONE',
                    strtotime('today'),
                    array('minYear'=>2010,'maxYear'=>2020,'empty'=>false,'monthNames'=>$monthNames)); 
            echo $this->Form->label('Fin'); 
            
                ?>
<?php echo $this->Form->end(__('Generar', true));?>
        </fieldset>
    <?php if (!empty($sesiones)): ?>  
    <h2>Reporte</h2>
    <table cellpadding="0" cellspacing="0">
    
    <tr>
			<th><?php echo 'Fecha';?></th>
			<th><?php echo 'Inicio';?></th>
			<th><?php echo  'Fin';?></th>
			
			<th><?php echo 'Usuario';?></th>
			<th><?php echo 'Carrera';?></th>
			<th><?php echo 'Equipo';?></th>
                        <th><?php echo 'Aula';?></th>
			
	</tr>
	
	<?php
	$i = 0;
	foreach ($sesiones as $sesione):
                //debug($sesione);
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
                
		<td><?php echo $sesione['Sesione']['fecha_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesione['Sesione']['hora_inicio_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesione['Sesione']['hora_fin_sesion']; ?>&nbsp;</td>
		
		<td><?php echo $sesione['Usuario']['nombre_completo']; ?>&nbsp;</td>
              <td><?php foreach($carreras as $carrera){
                                
                            if ($sesione['Usuario']['carreras_id'] == $carrera['Carreras']['id']){
                                echo $carrera['Carreras']['carrera'];
                            }
                            
                         }?>&nbsp;</td>
              <td><?php echo $sesione['Equipo']['nombre']; ?>&nbsp;</td>
              <td><?php foreach($aulas as $aula){
                                
                            if ($sesione['Equipo']['aulas_id'] == $aula['Aula']['id']){
                                echo $aula['Aula']['aula'];
                            }
                            
                         }?>&nbsp;</td>
	</tr>
      
<?php endforeach; ?>
	</table>

 <?php else: ?>
    <h2>No se encontraron registros</h2>
<?php endif; ?>

</div>    