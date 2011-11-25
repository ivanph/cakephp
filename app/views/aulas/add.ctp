<div class="aulas form">
<?php echo $this->Form->create('Aula');?>
	<fieldset>
		<legend><?php __('Add Aula'); ?></legend>
	<?php
		echo $this->Form->input('aula');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Aulas', true), array('action' => 'index'));?></li>
	</ul>
</div>