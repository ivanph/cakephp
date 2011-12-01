<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Añadir Administrador'); ?></legend>
	<?php	
                echo $form->create('User', array('action' => 'add'));
                echo $form->input('username');
                echo $form->input('password');
                echo $form->input('password_confirm', array('type' => 'password'));
                echo $form->input('nombre_completo');
                echo $form->submit();
                echo $form->end();
?>
	
	</fieldset>

</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Usuarios', true), array('action' => 'index'));?></li>
	</ul>
</div>