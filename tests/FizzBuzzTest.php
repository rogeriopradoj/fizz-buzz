<?php

namespace FizzBuzzTests;

use \FizzBuzz\FizzBuzz;

/**
 * Class FizzBuzzTest
 * @package FizzBuzz
 * @author Matthew Setter <matthew@matthewsetter.com>
 * @property FizzBuzz fizzBuzz
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * {@inheritDoc}
     */
    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @dataProvider listDataProvider
     * @param array $input
     * @param array $expectedResult
     */
    public function testDeterminesFizzBuzzCorrectly(array $input, array $expectedResult)
    {
        $result = $this->fizzBuzz->process($input);
        $this->assertEquals(
            $result,
            $expectedResult,
            'Incorrect result returned: ' . var_export($result, TRUE)
        );
    }

    /**
     * @return array
     */
    public function listDataProvider() : array
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