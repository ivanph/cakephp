<?php
class Sesione extends AppModel {
	var $name = 'Sesione';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
        
	var $belongsTo = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuarios_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Equipo' => array(
			'className' => 'Equipo',
			'foreignKey' => 'equipos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
