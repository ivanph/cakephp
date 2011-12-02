<div class="aulas form">
<?php echo $this->Form->create('Aula');?>
	<fieldset>
		<legend><?php __('Agregar Aula'); ?></legend>
	<?php
		echo $this->Form->input('aula');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Aulas', true), array('action' => 'index'));?></li>
	</ul>
</div>