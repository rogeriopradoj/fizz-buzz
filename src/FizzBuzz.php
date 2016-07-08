<?php

namespace FizzBuzz;

/**
 * Class FizzBuzz
 * @package FizzBuzz
 * @author Matthew Setter <matthew@matthewsetter.com>
 */
class FizzBuzz
{
    const MATCH_FIZZ = 3;
    const MATCH_BUZZ = 5;
    const MATCH_FIZZBUZZ = 15;

    /**
     * Runs the FizzBuzz algorithm
     *
     * @param array $list
     */
    public function process(array $list)
    {
        return array_map(function ($item) {
            if ($item % self::MATCH_FIZZBUZZ === 0) {
                return 'FizzBuzz';
            } else {
                if ($item % self::MATCH_FIZZ === 0) {
                    return 'Fizz';
                }
                if ($item % self::MATCH_BUZZ === 0) {
                    return 'Buzz';
                }
            }

            return $item;
        }, $list);
    }
}