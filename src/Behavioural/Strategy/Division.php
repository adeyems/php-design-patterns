<?php


namespace DesignPatterns\Behavioural\Strategy;


class Division implements ArithmeticInterface
{

    public function calculate(float $x, float $y): float
    {
        return $x / $y;
    }
}