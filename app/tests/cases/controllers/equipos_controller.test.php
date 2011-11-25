<?php
/* Equipos Test cases generated on: 2011-11-17 03:20:35 : 1321521635*/
App::import('Controller', 'Equipos');

class TestEquiposController extends EquiposController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EquiposControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.equipo');

	function startTest() {
		$this->Equipos =& new TestEquiposController();
		$this->Equipos->constructClasses();
	}

	function endTest() {
		unset($this->Equipos);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
