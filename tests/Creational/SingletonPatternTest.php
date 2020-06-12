<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Creational;

use PHPUnit\Exception;
use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Singleton\DB;

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
