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

    /** @dataProvider listDataProvider */
    public function testDeterminesFizzBuzzCorrectly($input, $expectedResult)
    {
        $result = $this->fizzBuzz->process($input);
        $this->assertEquals(
            $result,
            $expectedResult,
            'Incorrect result returned: ' . var_export($result, TRUE)
        );
    }

    public function listDataProvider()
    {
        return [
            [
                [1, 2, 3, 4, 5],
                [1, 2, 'Fizz', 4, 'Buzz']
            ],
            [
                [5, 10, 15, 20, 25, 30],
                ['Buzz', 'Buzz', 'FizzBuzz', 'Buzz', 'Buzz', 'FizzBuzz']
            ],
            [
                [3, 6, 9, 12, 18, 21, 24, 27],
                ['Fizz', 'Fizz', 'Fizz', 'Fizz', 'Fizz', 'Fizz', 'Fizz', 'Fizz']
            ],
        ];
    }
}