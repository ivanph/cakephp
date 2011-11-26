<div class="reportes index">
    
   
   <?php echo $this->Form->create('Reporte');?>
	<fieldset>
		<legend><?php __('Generar reporte por Carrera'); ?></legend>
	<?php 
            foreach ($carreras as $carrera){
                    $id = $carrera['Carreras']['id'];
                    $carrera = $carrera['Carreras']['carrera'];
            
                    echo '<input type="radio" name="carrera" value="'.$id.'" />'.$carrera.'<br /><br />';
            }        
                    
            
                ?>
<?php echo $this->Form->end(__('Generar', true));?>
    </fieldset>
 <?php if (!empty($registros)): ?>  
    <h2>Reporte</h2>
    <table cellpadding="0" cellspacing="0">
    
    <tr>
			<th><?php echo 'Fecha';?></th>
			<th><?php echo 'Inicio';?></th>
			<th><?php echo 'Fin';?></th>
			<th><?php echo 'Tipo ';?></th>
                        <th><?php echo 'Usuario';?></th>
                        <th><?php echo 'Equipo';?></th>
                        
			
	</tr>
	
	<?php
	$i = 0;
        
	foreach ($registros as $registro):
            $sesiones= $registro['Sesione'];
            
               //debug($registro); 
            
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
             <?php foreach ($sesiones as $sesion):?>   
		<td><?php echo $sesion['fecha_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesion['hora_inicio_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesion['hora_fin_sesion']; ?>&nbsp;</td>
                 <td><?php echo $registro['TipoUsuario']['tipo_usuario']; ?>&nbsp;</td> 
                <td><?php echo $registro['Usuario']['nombre_completo']; ?>&nbsp;</td>
                <td><?php foreach($equipos as $equipo){
                            if ($equipo['Equipo']['id'] == $sesion['equipos_id']){
                                echo $equipo['Equipo']['nombre'];
                            }
                            
                         }?>&nbsp;</td>
               
	</tr>
       <?php endforeach;?>
            
<?php endforeach; ?>
	</table>

 <?php else: ?>
    <h2>No se encontraron registros</h2>
<?php endif; ?>


</div>    