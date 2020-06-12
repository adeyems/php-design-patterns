<?php

namespace DesignPatterns\Creational\AbstractFactory;

class CustomerAccountFactory extends AbstractAccountFactory
{
    const PREMIUM_CUSTOMER = 'premium';
    const FREEMIUM_CUSTOMER = 'freemium';

    public function getAccount(string $accountType): Account
    {
        if ($accountType === self::PREMIUM_CUSTOMER)
            return new PremiumCustomer();

        if ($accountType === self::FREEMIUM_CUSTOMER)
            return new FreemiumCustomer();

        return null;
    }
}