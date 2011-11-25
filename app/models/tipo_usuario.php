<?php
class TipoUsuario extends AppModel {
	var $name = 'TipoUsuario';
	var $displayField = 'tipo_usuario';
	var $validate = array(
		'tipo_usuario' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				'message' => 'Campo obligatorio',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        
}
