<div class="carreras view">
<h2><?php  __('Carrera');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $carrera['Carrera']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Carrera'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $carrera['Carrera']['carrera']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carrera', true), array('action' => 'edit', $carrera['Carrera']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Carrera', true), array('action' => 'delete', $carrera['Carrera']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $carrera['Carrera']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
