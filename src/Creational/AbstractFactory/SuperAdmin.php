<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class SuperAdmin implements Account
{
    public function create(): string
    {
        return 'creating super admin profile ...';
    }
}
