<div class="reportes index">
    <?php echo $this->Form->create('Reporte');?>
	<fieldset>
		<legend><?php __('Generar reporte por Aula'); ?></legend>
	<?php
                foreach ($aulas as $aula){
                    $id=$aula['Aula']['id'];
                    $aula_nombre =$aula['Aula']['aula']; 
                   
                    
                    echo '<input type="radio" name="aula" value="'.$id.'" />'.$aula_nombre.'<br /><br />';
                   }
                    
                    
            
                ?>
<?php echo $this->Form->end(__('Generar', true));?>
        </fieldset>
</div>    