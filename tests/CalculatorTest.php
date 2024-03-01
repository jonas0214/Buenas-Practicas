<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{

    public function testAddWillReturnTheSumOfItsParameters(){

        $sut = new Calculator();

        $this->assertEquals(8, $sut->add( 5 , 3 ));
        $this->assertEquals(3, $sut->resta( 5 , 2 ));
        $this->assertEquals(10, $sut->multiplicacion( 5 , 2 ));
        $this->assertEquals(3, $sut->division( 6 , 2 ));

    }
}