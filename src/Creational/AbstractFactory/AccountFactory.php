<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class AccountFactory
{
    public function getAccountFactory(bool $isAdmin): AbstractAccountFactory
    {
        return $isAdmin ? new AdminAccountFactory() : new CustomerAccountFactory();
    }
}
