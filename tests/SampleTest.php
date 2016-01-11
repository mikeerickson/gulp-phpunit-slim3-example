<?php

class SampleTest extends PHPUnit_Framework_TestCase {

	public function __construct()
	{
		var_dump('SampleTest Constructor');
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
}