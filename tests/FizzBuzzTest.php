<?php

namespace FizzBuzzTests;

use \FizzBuzz\FizzBuzz;

/**
 * @property FizzBuzz fizzBuzz
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testDeterminesFizzBuzzCorrectly()
    {
        $this->assertEquals($this->fizzBuzz->process(range(1, 5)), [1, 2, 'Fizz', 4, 'Buzz']);
    }
}