<?php
/* TipoUsuario Fixture generated on: 2011-11-17 02:27:45 : 1321518465 */
class TipoUsuarioFixture extends CakeTestFixture {
	var $name = 'TipoUsuario';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tipo_usuario' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'tipo_usuario' => 'Lorem ipsum dolor sit amet'
		),
	);
}
