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
     * @param array $list
     */
    public function process($list)
    {
        return array_map(function ($item) {
            if ($item % 3 === 0) {
                return "Fizz";
            }

            return $item;
        }, $list);
    }
}