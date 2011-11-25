<?php
class Usuario extends AppModel {
	var $name = 'Usuario';
	var $displayField = 'nombre';
        var $virtualFields = array(
            'nombre_completo' => "CONCAT(Usuario.nombre, ' ', Usuario.apellido_paterno,' ',Usuario.apellido_materno)"
            );

        var $validate = array(
		'nombre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obligatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                    'rule' => '/[A-Za-z ]+/',
				'message' => 'Solo se permiten letras y espacios',
				'allowEmpty' => false,
		),
		'apellido_paterno' => array(
                        'rule' => '/[A-Za-z ]+/',
				'message' => 'Solo se permiten letras y espacios',
				'allowEmpty' => false,
			),
                    
                        'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obligatorio',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		
		'apellido_materno' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obligatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
				'rule' => '/[A-Za-z ]+/',
				'message' => 'Solo se permiten letras y espacios',
				'allowEmpty' => false,
				
			),
		
		'arancel' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'matricula' => array(
			'notempty' => array(
				'rule' => array('isUnique'),
				'message' => 'Ya existe un registro con esta Matrícula/Número de personal',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('between', 5, 9),
				'message' => 'El campo debe contener entre 5 y 9 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                        
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
                            ),	
                    
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
        var $hasMany = array(
                    'Sesione' => array(
                    'className' => 'Sesione',
                    'foreignKey' => 'usuarios_id',
                    'limit' => '5',
                    'dependent'=> true
                    )
); 
        
        var $belongsTo = array(
		'TipoUsuario' => array(
			'className' => 'TipoUsuario',
			'foreignKey' => 'tipo_usuarios_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Carrera' => array(
			'className' => 'Carrera',
			'foreignKey' => 'carreras_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
