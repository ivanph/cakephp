<div class="reportes index">
    <?php echo $this->Form->create('Reporte');?>
	<fieldset>
		<legend><?php __('Generar reporte por Aula'); ?></legend>
	<?php
        $valor = '';
                foreach ($equipos as $equipo){
                   if($valor != $equipo['Equipos']['aula'] ){ 
                        $valor = $equipo['Equipos']['aula'];
                    
                    echo '<input type="radio" name="aula" value="'.$valor.'" />'.$valor.'<br /><br />';
                   }
            }        
                    
            
                ?>
<?php echo $this->Form->end(__('Generar', true));?>
        </fieldset>
</div>    