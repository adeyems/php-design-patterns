<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\AbstractFactory\AccountFactory;
use DesignPatterns\Creational\AbstractFactory\AdminAccountFactory;
use DesignPatterns\Creational\AbstractFactory\CustomerAccountFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryPatternTest.
 */
class AbstractFactoryPatternTest extends TestCase
{
    /**
     * @return array
     */
    public function accountFactoryProvider()
    {
        return [
            [new AccountFactory()],
        ];
    }

    /**
     * @dataProvider accountFactoryProvider
     * @param AccountFactory $accountFactory
     */
    public function test_can_provide_account_factory_class(AccountFactory $accountFactory)
    {
        $customerAccountFactory = $accountFactory->getAccountFactory(false);
        $this->assertInstanceOf(CustomerAccountFactory::class, $customerAccountFactory);

        $adminAccountFactory = $accountFactory->getAccountFactory(true);
        $this->assertInstanceOf(AdminAccountFactory::class, $adminAccountFactory);

    }

    /**
     * @dataProvider accountFactoryProvider
     * @param AccountFactory $accountFactory
     */
    public function test_can_provide_class_from_factory_class(AccountFactory $accountFactory)
    {
        $customerAccountFactory = $accountFactory->getAccountFactory(false);

        $freemiumCustomerAccount = $customerAccountFactory->getAccount('freemium');
        $this->assertSame('creating freemium customer profile ...', $freemiumCustomerAccount->create());

        $premiumCustomerAccount = $customerAccountFactory->getAccount('premium');
        $this->assertSame('creating premium customer profile ...', $premiumCustomerAccount->create());


        $adminAccountFactory = $accountFactory->getAccountFactory(true);

        $regularAdminAccount = $adminAccountFactory->getAccount('regular');
        $this->assertSame('creating regular admin profile ...', $regularAdminAccount->create());

        $superAdminAccount = $adminAccountFactory->getAccount('super');
        $this->assertSame('creating super admin profile ...', $superAdminAccount->create());

    }
}
