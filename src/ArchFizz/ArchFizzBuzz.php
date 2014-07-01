<?php

namespace ArchFizz;

use FizzBuzz\FizzBuzz;

class ArchFizzBuzz implements FizzBuzz
{
    /**
     * @param integer $number
     *
     * @return string
     */
    public function play($number)
    {
        if (!is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('"%s" is not a number', $number));
        }

        $number = (int) $number;

        if ($this->isFizzable($number) && $this->isBuzzable($number)) {
            return FizzBuzz::FIZZ.FizzBuzz::BUZZ;
        }

        if ($this->isFizzable($number)) {
            return FizzBuzz::FIZZ;
        }

        if ($this->isBuzzable($number)) {
            return FizzBuzz::BUZZ;
        }

        return (string) $number;
    }

    /**
     * @param integer $number
     *
     * @return boolean
     */
    private function isFizzable($number)
    {
        return 0 === $number % FizzBuzz::FIZZABLE;
    }

    /**
     * @param integer $number
     *
     * @return boolean
     */
    private function isBuzzable($number)
    {
        return 0 === $number % FizzBuzz::BUZZABLE;
    }
}
