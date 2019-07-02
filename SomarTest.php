<?php 
use PHPUnit\Framework\TestCase
	class SomarTest extends TestCase{
	
		function testSoma(){
			$var = new Somar();
			$this->assertEquals(2, $var->soma());
		}
	}

?>