<?php
/* Carrera Test cases generated on: 2011-11-17 02:15:39 : 1321517739*/
App::import('Model', 'Carrera');

class CarreraTestCase extends CakeTestCase {
	var $fixtures = array('app.carrera');

	function startTest() {
		$this->Carrera =& ClassRegistry::init('Carrera');
	}

	function endTest() {
		unset($this->Carrera);
		ClassRegistry::flush();
	}

}
