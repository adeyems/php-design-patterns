<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Behavioural;

use DesignPatterns\Behavioural\Strategy\Addition;
use DesignPatterns\Behavioural\Strategy\Division;
use DesignPatterns\Behavioural\Strategy\Maths;
use DesignPatterns\Behavioural\Strategy\Multiplication;
use DesignPatterns\Behavioural\Strategy\Subtraction;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryPatternTest.
 */
class StrategyPatternTest extends TestCase
{
    public function test_it_can_perform_with_any_arithmetic_interface()
    {
        $mathOperation = new Maths(new Addition);
        $this->assertSame(15., $mathOperation->executeStrategy(10, 5));

        $mathOperation = new Maths(new Subtraction);
        $this->assertSame(5., $mathOperation->executeStrategy(10, 5));

        $mathOperation = new Maths(new Multiplication);
        $this->assertSame(50., $mathOperation->executeStrategy(10, 5));

        $mathOperation = new Maths(new Division);
        $this->assertSame(2., $mathOperation->executeStrategy(10, 5));
    }
}
