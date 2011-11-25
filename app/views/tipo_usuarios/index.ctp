<div class="tipoUsuarios index">
	<h2><?php __('Tipos de Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Tipo','tipo_usuario');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tipoUsuarios as $tipoUsuario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tipoUsuario['TipoUsuario']['tipo_usuario']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $tipoUsuario['TipoUsuario']['id']), null, sprintf(__('Está seguro de querer borrar # %s?', true), $tipoUsuario['TipoUsuario']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Tipo de Usuario', true), array('action' => 'add')); ?></li>
        </ul>
</div>