<div class="aulas view">
<h2><?php  __('Aula');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aula['Aula']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aula'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aula['Aula']['aula']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aula', true), array('action' => 'edit', $aula['Aula']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Aula', true), array('action' => 'delete', $aula['Aula']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aula['Aula']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
