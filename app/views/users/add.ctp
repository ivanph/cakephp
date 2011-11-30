<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Añadir Administrador'); ?></legend>
	<?php	
                echo $form->create('User', array('action' => 'add'));
                echo $form->input('username');
                echo $form->input('password');
                echo $form->input('password_confirm', array('type' => 'password'));
                echo $form->submit();
                echo $form->end();
?>
	
	</fieldset>

</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
	</ul>
</div>