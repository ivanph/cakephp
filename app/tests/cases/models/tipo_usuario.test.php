<?php
/* TipoUsuario Test cases generated on: 2011-11-17 02:27:45 : 1321518465*/
App::import('Model', 'TipoUsuario');

class TipoUsuarioTestCase extends CakeTestCase {
	var $fixtures = array('app.tipo_usuario');

	function startTest() {
		$this->TipoUsuario =& ClassRegistry::init('TipoUsuario');
	}

	function endTest() {
		unset($this->TipoUsuario);
		ClassRegistry::flush();
	}

}
