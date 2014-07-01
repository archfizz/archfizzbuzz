Feature: Generating the FizzBuzz sequence
  In order to teach about division
  As a teacher
  I need to generate the sequence of the FizzBuzz game

Scenario: Printing the sequence from 1 to 50
  Given I am in the FizzBuzz app directory
   When I run "./fizzbuzz 32"
   Then it should print:
"""
1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, 17, Fizz, 19, Buzz, Fizz, 22, 23, Fizz, Buzz, 26, Fizz, 28, 29, FizzBuzz, 31, 32

"""
