<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Adapter\AuthController;
use DesignPatterns\Structural\Adapter\GoogleLogin;
use DesignPatterns\Structural\Adapter\GoogleLoginAdapter;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryPatternTest.
 */
class AdapterPatternTest extends TestCase
{
    public function test_it_can_login_with_any_login_interface()
    {
        $authController = new AuthController(new GoogleLoginAdapter(new GoogleLogin()));
        $email = 'john@exaple.com';
        $this->assertSame("signing in with $email and authToken", $authController->authenticate($email));
    }
}
