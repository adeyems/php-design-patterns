<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractAccountFactory
{
    abstract public function getAccount(string $accountType): Account;
}
