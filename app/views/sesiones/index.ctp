<div class="sesiones index">
	<h2><?php __('Últimas Sesiones');?></h2>
     
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Fecha','fecha_sesion');?></th>
			<th><?php echo $this->Paginator->sort('Inicio','hora_inicio_sesion');?></th>
			<th><?php echo $this->Paginator->sort('Fin','hora_fin_sesion');?></th>
			<th><?php echo $this->Paginator->sort('Usuario','usuarios_id');?></th>
			<th><?php echo $this->Paginator->sort('Carrera','carreras_id');?></th>
                        <th><?php echo $this->Paginator->sort('Tipo','tipo_usuarios_id');?></th>
                        <th><?php echo $this->Paginator->sort('Equipo','equipos_id');?></th>
			<th><?php echo $this->Paginator->sort('Aula','aula');?></th>
			
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
                
		<td><?php echo $sesione['Sesione']['fecha_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesione['Sesione']['hora_inicio_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesione['Sesione']['hora_fin_sesion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sesione['Usuario']['nombre_completo'], array('controller' => 'usuarios', 'action' => 'view', $sesione['Usuario']['id']));; ?>
		</td>
                  <td><?php    foreach ($carreras as $carrera){
                                
                                if (($sesione['Usuario']['carreras_id']) == ($carrera['Carrera']['id']))
                                  echo $carrera['Carrera']['carrera'];
                }
                        ;?>&nbsp;</td>
                    <td><?php    foreach ($tipos as $tipo){
                                
                                if (($sesione['Usuario']['tipo_usuarios_id']) == ($tipo['TipoUsuario']['id']))
                                  echo $tipo['TipoUsuario']['tipo_usuario'];
                }
                        ;?>&nbsp;</td>
		<td><?php echo $sesione['Equipo']['nombre'];?></td>
		    <td><?php    foreach ($aulas as $aula){
                                
                                if (($sesione['Equipo']['aulas_id']) == ($aula['Aula']['id']))
                                  echo $aula['Aula']['aula'];
                }
                        ;?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count% totales', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Lista de Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Equipos', true), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>