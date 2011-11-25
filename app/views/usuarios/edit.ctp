<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		echo $this->Form->input('matricula');
		echo $this->Form->input('tipo_usuarios_id',array('label' => 'Tipo'));
		echo $this->Form->input('carreras_id',array('label'=>'Carrera'));
	?>
	
      <div class="submit">
         <?php echo $this->Form->submit(__('Guardar', true), array('name' => 'ok', 'div' => false)); ?>
         <?php echo $this->Form->submit(__('Cancelar', true), array('name' => 'cancel','div' => false)); ?>
     </div>
     </fieldset>                   
 <?php echo $this->Form->end();?>

</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Usuario.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Lista de Tipos de Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Carreras', true), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
	
        </ul>
</div>