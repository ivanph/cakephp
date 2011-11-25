<div class="tipoUsuarios form">
<?php echo $this->Form->create('TipoUsuario');?>
	<fieldset>
		<legend><?php __('Agregar un tipo de Usuario'); ?></legend>
	<?php
		echo $this->Form->input('tipo_usuario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de tipos de Usuarios', true), array('action' => 'index'));?></li>
	</ul>
</div>