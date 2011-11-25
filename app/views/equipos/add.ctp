<div class="equipos form">
<?php echo $this->Form->create('Equipo');?>
	<fieldset>
		<legend><?php __('Add Equipo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('aulas_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Equipos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aulas', true), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula', true), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
	</ul>
</div>