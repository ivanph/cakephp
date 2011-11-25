<div class="equipos index">
	<h2><?php __('Equipos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('aula');?></th>
			<th class="actions"><?php __('');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($equipos as $equipo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $equipo['Equipo']['nombre']; ?>&nbsp;</td>
		<td><?php echo $equipo['Equipo']['aula']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $equipo['Equipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipo['Equipo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count% total', true)
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
		<li><?php echo $this->Html->link(__('Nuevo Equipo', true), array('action' => 'add')); ?></li>
	</ul>
</div>