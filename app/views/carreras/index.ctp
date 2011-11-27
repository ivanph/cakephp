<div class="carreras index">
	<h2><?php __('Carreras');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('carrera');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($carreras as $carrera):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $carrera['Carrera']['carrera']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $carrera['Carrera']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $carrera['Carrera']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Carrera', true), array('action' => 'add')); ?></li>
	</ul>
</div>