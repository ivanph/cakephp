<?php
class Equipo extends AppModel {
	var $name = 'Equipo';
	var $displayField = 'nombre';
	var $validate = array(
		'nombre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Aula' => array(
			'className' => 'Aula',
			'foreignKey' => 'aulas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
