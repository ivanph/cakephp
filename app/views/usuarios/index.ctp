<div class="usuarios index">
	<h2><?php __('Usuarios');?></h2>
	
         
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno');?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno');?></th>
			<th><?php echo $this->Paginator->sort('matricula');?></th>
			<th><?php echo $this->Paginator->sort('Tipo','tipo_usuarios_id');?></th>
			<th><?php echo $this->Paginator->sort('Carrera','carreras_id');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usuarios as $usuario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usuario['Usuario']['nombre']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['apellido_paterno']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['apellido_materno']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['matricula']; ?>&nbsp;</td>
		<td><?php echo $usuario['TipoUsuario']['tipo_usuario'];?>&nbsp;</td>
		<td><?php echo $usuario['Carrera']['carrera'];?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $usuario['Usuario']['id']), null, sprintf(__('¿Está seguro de eliminar el usuario  %s?', true), $usuario['Usuario']['nombre_completo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count% total',true)
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
		<li><?php echo $this->Html->link(__('Nuevo Usuario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Buscar Usuario', true), array('action' => 'buscar')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Tipos de Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Carreras', true), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
        </ul>
</div>