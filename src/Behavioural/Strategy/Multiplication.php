<?php

namespace DesignPatterns\Behavioural\Strategy;

class Multiplication implements ArithmeticInterface
{
    public function calculate(float $x, float $y): float
    {
        return $x * $y;
    }
}
