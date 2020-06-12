<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioural\Strategy;

interface ArithmeticInterface
{
    public function calculate(float $x, float $y): float;
}
