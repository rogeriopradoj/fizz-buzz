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
        $result = $this->fizzBuzz->process(range(1, 15));
        $this->assertEquals(
            $result,
            [1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz'],
            'Incorrect result returned: ' . var_export($result, TRUE)
        );
    }
}