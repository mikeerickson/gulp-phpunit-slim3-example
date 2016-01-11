<?php


class GulpTest extends PHPUnit_Framework_TestCase {

	public function __construct()
	{
		// this is echo'd just to make sure only GulpTest Class is executed
		var_dump('GulpTest Constructor');
	}

	/** @test */
	public function it_should_pass() {
		$this->assertEquals(true, true);
	}

	/** @test */
	public function it_should_pass_hello_world() {
		$var = "Hello World";
		$this->assertEquals($var, 'Hello World');
	}

	/** @test */
	public function it_should_perform_array_test() {
		$testArray = ['name' => 'mike'];
		$this->assertArrayHasKey('name', $testArray);
	}
}