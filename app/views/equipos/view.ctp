<div class="equipos view">
<h2><?php  __('Equipo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipo['Equipo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipo['Equipo']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aula'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipo['Aula']['aula'], array('controller' => 'aulas', 'action' => 'view', $equipo['Aula']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipo', true), array('action' => 'edit', $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Equipo', true), array('action' => 'delete', $equipo['Equipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas', true), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula', true), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
