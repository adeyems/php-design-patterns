<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractUserFactory
{
    abstract public function createAccount();
}
