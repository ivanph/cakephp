<div class="carreras form">
<?php echo $this->Form->create('Carrera');?>
	<fieldset>
		<legend><?php __('Edit Carrera'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('carrera');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Carrera.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Carrera.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Carreras', true), array('action' => 'index'));?></li>
	</ul>
</div>