<?php


namespace DesignPatterns\Behavioural\Strategy;


class Subtraction implements ArithmeticInterface
{

    public function calculate(float $x, float $y): float
    {
        return $x - $y;
    }
}