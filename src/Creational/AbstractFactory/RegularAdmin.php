<?php

namespace DesignPatterns\Creational\AbstractFactory;

class RegularAdmin implements Account
{
    public function create(): string
    {
        return 'creating regular admin profile ...';
    }
}
