<?php
App::uses('Tops-page', 'Model');

/**
 * Tops-page Test Case
 *
 */
class Tops-pageTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tops-page = ClassRegistry::init('Tops-page');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tops-page);

		parent::tearDown();
	}

}
