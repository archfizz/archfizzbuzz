<?php

namespace FizzBuzz;

interface FizzBuzz
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    const FIZZABLE = 3;
    const BUZZABLE = 5;

    /**
     * Return either `Fizz` for multiples of 3, `Buzz` for multiples of 5,
     * `FizzBuzz` for multiples of 3 and 5 or the input number as a string.
     *
     * @param integer $number
     *
     * @return string
     */
    public function play($number);
}
