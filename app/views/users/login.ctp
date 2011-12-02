<div class="ingreso form">
<?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('User');
    echo $this->Form->input('username',array('label'=>'Nombre de usuario'));
    echo $this->Form->input('password',array('label'=>'Contraseña'));
    echo $this->Form->end('Ingresar');
?>
</div>