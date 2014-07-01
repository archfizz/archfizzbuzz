<?php

namespace spec\ArchFizz;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArchFizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ArchFizz\ArchFizzBuzz');
    }

    function it_is_a_FizzBuzzer()
    {
        $this->shouldHaveType('FizzBuzz\FizzBuzz');
    }

    function it_returns_Fizz_for_multiples_of_3()
    {
        $this->play(6)->shouldReturn("Fizz");
    }

    function it_returns_Buzz_for_multiples_of_5()
    {
        $this->play(10)->shouldReturn("Buzz");
    }

    function it_returns_Buzz_for_multiples_of_3_and_5()
    {
        $this->play(30)->shouldReturn("FizzBuzz");
    }

    function it_returns_the_number_as_a_string_if_it_is_not_a_multiple_of_3_and_5()
    {
        $this->play(14)->shouldReturn("14");
    }

    function it_throws_an_exception_if_a_number_was_not_provided()
    {
        $this->shouldThrow('InvalidArgumentException')->duringPlay("Hello, World!");
    }

    function it_accepts_numbers_as_a_string()
    {
        $this->play("5")->shouldReturn("Buzz");
    }
}
