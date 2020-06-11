<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractUser
{
    abstract public function createAccount();
}
