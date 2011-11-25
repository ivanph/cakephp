<div class="usuarios form">
   <?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Buscar'); ?></legend>
	<?php
		echo $this->Form->input('matricula',array('label'=>'Matrícula/Número de Personal'));
        ?>
        </fieldset>
<?php echo $this->Form->end(__('Buscar', true));?>                 
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Usuario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Usuarios', true), array('action' => 'index'));?></li>
        </ul>
</div>	

    