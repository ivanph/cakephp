<div class="carreras form">
<?php echo $this->Form->create('Carrera');?>
	<fieldset>
		<legend><?php __('Añadir Carrera'); ?></legend>
	<?php
		echo $this->Form->input('carrera');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Carreras', true), array('action' => 'index'));?></li>
	</ul>
</div>