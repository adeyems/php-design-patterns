<?php

namespace DesignPatterns\Creational\AbstractFactory;

class AdminAccountFactory extends AbstractAccountFactory
{
    const REGULAR_ADMIN = 'regular';
    const SUPER_ADMIN = 'super';

    public function getAccount(string $accountType): Account
    {
        if ($accountType === self::REGULAR_ADMIN)
            return new RegularAdmin();

        if ($accountType === self::SUPER_ADMIN)
            return new SuperAdmin();

        return null;
    }
}