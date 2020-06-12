<?php


namespace DesignPatterns\Behavioural\Strategy;


class Addition implements ArithmeticInterface
{

    public function calculate(float $x, float $y): float
    {
        return $x + $y;
    }
}