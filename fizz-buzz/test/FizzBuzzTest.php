<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;
use FizzBuzz\RuleMachine\FizzBuzzRuleMachine;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @var  FizzBuzz */
    private $fizzbuzz;

    /** @test */
    public function first_number_is_one()
    {
        $this->assertEquals(1, $this->fizzbuzz->getData(1));
    }

    /** @test */
    public function third_number_is_fizz()
    {
        $this->assertEquals('Fizz', $this->fizzbuzz->getData(3));
    }

    /** @test */
    public function fith_number_is_Buzz()
    {
        $this->assertEquals('Buzz', $this->fizzbuzz->getData(5));
    }

    /** @test */
    public function fifteen_number_is_fizzbuzz()
    {
        $this->assertEquals('FizzBuzz', $this->fizzbuzz->getData(15));
    }

    /** @test */
    public function every_third_number_then_is_fizz()
    {
        for ($i = 1; $i <= 1000; $i++) {
            if ($i % 3 == 0 && $i % 5 != 0) {
                $this->assertEquals('Fizz', $this->fizzbuzz->getData($i));
            }
        }
    }

    /** @test */
    public function every_five_numbers_is_buzz()
    {
        for ($i = 1; $i < 1000; $i++) {
            if ($i % 5 == 0 && $i % 3 != 0) {
                $this->assertEquals('Buzz', $this->fizzbuzz->getData($i));
            }
        }
    }

    /** @test */
    public function every_fifteen_numbers_is_fizzbuzz()
    {
        for ($i = 1; $i <= 1000; $i++) {
            if ($i % 5 == 0 && $i % 3 == 0) {
                $this->assertEquals('FizzBuzz', $this->fizzbuzz->getData($i));
            }
        }
    }

    protected function setUp()
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz(new FizzBuzzRuleMachine());
    }
}
