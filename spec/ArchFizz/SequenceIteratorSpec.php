<?php

namespace spec\ArchFizz;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use FizzBuzz\FizzBuzz;

class StdoutIteratorSpec extends ObjectBehavior
{
    function let(FizzBuzz $fizzBuzz)
    {
        $this->beConstructedWith($fizzBuzz);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('ArchFizz\StdoutIterator');
    }

    function it_returns_a_generated_sequence_a_limited_number_of_times(FizzBuzz $fizzBuzz)
    {
        for ($i = 1; $i <= 10; $i++) {
            $fizzBuzz->play($i)->willReturn((string) $i);
        }

        $fizzBuzz->play(11)->shouldNotBeCalled();

        $this->iterate(10)->shouldReturn("1, 2, 3, 4, 5, 6, 7, 8, 9, 10");
    }
}
