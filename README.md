ArchFizzBuzz
============

An example of using Behavior-Driven Development and (very basic) Domain Driven Design
for creating a FizzBuzz library and command-line utility using [Behat][] 3 for functional
testing and [PhpSpec][] 2 for unit testing / specing.


Install
-------

```bash
$ git clone https://github.com/archfizz/archfizzbuzz
$ cd archfizzbuzz
$ composer install # requires Composer to be installed globally
```

Usage
-----

To print the sequence for 100 steps for example, run:

```bash
$ ./fizzbuzz 100      # returns 1, 2, Fizz, 4, Buzz, Fizz, 7, 8...
```

If no number is provided, it will default to 15 steps.


Run Unit Tests/Specifications with PhpSpec
------------------------------------------

```bash
$ bin/phpspec run
```

This specs can be found in the `specs` directory.


Run Integration/Functional Tests with Behat
-------------------------------------------

```bash
$ bin/behat
```

The tests can be found in the `features` directory.

```feature
Feature: Generating the FizzBuzz sequence
  In order to teach about division (or BBD)
  As a teacher (or developer)
  I need to generate the sequence of the FizzBuzz game

Scenario: Printing the sequence from 1 to 32
  Given I am in the FizzBuzz app directory
   When I run "./fizzbuzz 32"
   Then it should print:
"""
1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, 17, Fizz, 19, Buzz, Fizz, 22, 23, Fizz, Buzz, 26, Fizz, 28, 29, FizzBuzz, 31, 32

"""
```


[Behat]: https://github.com/behat/behat
[PhpSpec]: https://github.com/phpspec/phpspec
