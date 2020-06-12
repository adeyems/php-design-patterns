<?php

namespace DesignPatterns\Behavioural\Strategy;

class Maths
{
    private $operation;

    public function __construct(ArithmeticInterface $arithmetic)
    {
        $this->operation = $arithmetic;
    }

    public function executeStrategy(float $x, float $y)
    {
        return $this->operation->calculate($x, $y);
    }
}
