<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class FreemiumCustomer implements Account
{
    public function create(): string
    {
        return 'creating freemium customer profile ...';
    }
}
