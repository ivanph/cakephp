<?php
/* Carreras Test cases generated on: 2011-11-17 03:21:18 : 1321521678*/
App::import('Controller', 'Carreras');

class TestCarrerasController extends CarrerasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CarrerasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.carrera');

	function startTest() {
		$this->Carreras =& new TestCarrerasController();
		$this->Carreras->constructClasses();
	}

	function endTest() {
		unset($this->Carreras);
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
