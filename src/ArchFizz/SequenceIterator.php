<?php

namespace ArchFizz;

use FizzBuzz\FizzBuzz;

class SequenceIterator
{
    /**
     * @var FizzBuzz
     */
    private $fizzBuzz;

    /**
     * @param FizzBuzz $fizzBuzz
     */
    public function __construct(FizzBuzz $fizzBuzz)
    {
        $this->fizzBuzz = $fizzBuzz;
    }

    /**
     * @param integer $iterations
     *
     * @return string
     */
    public function iterate($iterations)
    {
        $stdout = [];

        for ($i = 1; $i <= $iterations; $i++) {
            $stdout[] = $this->fizzBuzz->play($i);
        }

        return implode(', ', $stdout);
    }
}
