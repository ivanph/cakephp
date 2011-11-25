<?php
/* TipoUsuarios Test cases generated on: 2011-11-17 03:21:28 : 1321521688*/
App::import('Controller', 'TipoUsuarios');

class TestTipoUsuariosController extends TipoUsuariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipoUsuariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipo_usuario');

	function startTest() {
		$this->TipoUsuarios =& new TestTipoUsuariosController();
		$this->TipoUsuarios->constructClasses();
	}

	function endTest() {
		unset($this->TipoUsuarios);
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
