<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class PremiumCustomer implements Account
{
    public function create(): string
    {
        return 'creating premium customer profile ...';
    }
}
