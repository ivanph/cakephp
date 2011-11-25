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
 <?php if (!empty($sesiones)): ?>  
    <h2>Reporte</h2>
    <table cellpadding="0" cellspacing="0">
    
    <tr>
			<th><?php echo 'Fecha';?></th>
			<th><?php echo 'Inicio';?></th>
			<th><?php echo  'Fin';?></th>
			<th><?php echo 'Equipo';?></th>
			
	</tr>
	
	<?php
	$i = 0;
	foreach ($sesiones as $sesione):
                
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
                
		<td><?php echo $sesione['fecha_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesione['hora_inicio_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesione['hora_fin_sesion']; ?>&nbsp;</td>
              
	</tr>
      
<?php endforeach; ?>
	</table>

 <?php else: ?>
    <h2>No se encontraron registros</h2>
<?php endif; ?>


</div>    