<div class="usuarios view">
<h2><?php  __('Usuario');?></h2>
<?php
        $sesiones = array();
        $sesiones = $usuario['Sesione'];
       
    ;?>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Apellido Paterno  '); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ' '.$usuario['Usuario']['apellido_paterno']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Apellido Materno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['apellido_materno']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Arancel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['arancel']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Matricula'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['matricula']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($usuario['TipoUsuario']['tipo_usuario'], array('controller' => 'tipo_usuarios', 'action' => 'view', $usuario['TipoUsuario']['tipo_usuario'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Carrera'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($usuario['Carrera']['carrera'], array('controller' => 'carreras', 'action' => 'view', $usuario['Carrera']['carrera'])); ?>
			&nbsp;
		</dd>
	</dl>
<br><br>
<h2>Últimas Sesiones del Usuario</h2>

<table cellpadding="0" cellspacing="0">
    
    <tr>
			<th><?php echo 'Fecha';?></th>
			<th><?php echo 'Inicio';?></th>
			<th><?php echo  'Fin';?></th>
			<th><?php echo 'Equipo';?></th>
			
	</tr>
	
	<?php
	$i = 0;
	foreach ($sesiones as $sesione):
                
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
                
		<td><?php echo $sesione['fecha_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesione['hora_inicio_sesion']; ?>&nbsp;</td>
		<td><?php echo $sesione['hora_fin_sesion']; ?>&nbsp;</td>
                <td><?php    foreach ($equipos as $equipo){
                                
                                if (($sesione['equipos_id']) == ($equipo['Equipo']['id']))
                                  echo $equipo['Equipo']['nombre'];
                }
                        ;?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario', true), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Usuario', true), array('action' => 'delete', $usuario['Usuario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Usuarios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Usuario', true), array('action' => 'add')); ?> </li>
	</ul>
</div>

