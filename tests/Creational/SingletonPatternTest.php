<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\Singleton\DB;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryPatternTest.
 */
class SingletonPatternTest extends TestCase
{
    public function test_it_can_return_DB_instance()
    {
        $this->assertSame('single connection', DB::getInstance()->getConnection());
    }
}
