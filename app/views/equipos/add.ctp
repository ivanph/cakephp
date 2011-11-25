<div class="equipos form">
<?php echo $this->Form->create('Equipo');?>
	<fieldset>
		<legend><?php __('Agregar Equipo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('aula');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Equipos', true), array('action' => 'index'));?></li>
	</ul>
</div>