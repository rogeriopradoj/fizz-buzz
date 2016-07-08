<?php

namespace FizzBuzz;

/**
 * Class FizzBuzz
 * @package FizzBuzz
 * @author Matthew Setter <matthew@matthewsetter.com>
 */
class FizzBuzz
{
    /**
     * Runs the FizzBuzz algorithm
     * @param array $list
     */
    public function process($list)
    {
        return array_map(function ($item) {
            if ($item % 3 === 0) {
                return 'Fizz';
            }

            if ($item % 5 === 0) {
                return 'Buzz';
            }

            return $item;
        }, $list);
    }
}