<?php
class Carrera extends AppModel {
	var $name = 'Carrera';
	var $displayField = 'carrera';
	var $validate = array(
		'carrera' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Debe agregar el nombre de la carrera',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        
}
