<div class="equipos index">
	<h2><?php __('Equipos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('aulas_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
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
		<td><?php echo $equipo['Equipo']['id']; ?>&nbsp;</td>
		<td><?php echo $equipo['Equipo']['nombre']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipo['Aula']['aula'], array('controller' => 'aulas', 'action' => 'view', $equipo['Aula']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $equipo['Equipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipo['Equipo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Equipo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Aulas', true), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula', true), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
	</ul>
</div>