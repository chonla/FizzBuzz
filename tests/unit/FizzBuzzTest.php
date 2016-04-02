<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        $this->fb = new FizzBuzz();
    }

    public function testGiven1ShouldReturnOne() {
        $this->assertEquals(1,$this->fb->get(1));
    }

    public function testGivenDivisibleBy3ShouldReturnFizz(){
        $this->assertEquals("Fizz", $this->fb->get(3));
    }

    public function testGivenDivisibleBy5ShouldReturnBuzz(){
        $this->assertEquals("Buzz", $this->fb->get(5));
    }

    public function testGivenDivisibleBy15ShouldReturnBuzz(){
        $this->assertEquals("FizzBuzz", $this->fb->get(15));
    }
}

?>