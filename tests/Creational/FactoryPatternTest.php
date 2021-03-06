<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\Factory\CouponHandlerFactory;
use DesignPatterns\Creational\Factory\GiftCouponHandler;
use DesignPatterns\Creational\Factory\MonetaryCouponHandler;
use DesignPatterns\Creational\Factory\ShippingCouponHandler;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryPatternTest.
 */
class FactoryPatternTest extends TestCase
{
    /**
     * @return array
     */
    public function classProvider()
    {
        return [
            [new CouponHandlerFactory()],
        ];
    }

    /**
     * @dataProvider classProvider
     *
     * @param CouponHandlerFactory $couponHandlerFactory
     */
    public function test_can_provide_monetary_coupon_handler(CouponHandlerFactory $couponHandlerFactory)
    {
        $monetaryCouponHandler = $couponHandlerFactory->getCouponHandler('monetary');
        $this->assertInstanceOf(MonetaryCouponHandler::class, $monetaryCouponHandler);
        $this->assertSame('applying monetary coupon ...', $monetaryCouponHandler->applyCoupon());
    }

    /**
     * @dataProvider classProvider
     *
     * @param CouponHandlerFactory $couponHandlerFactory
     */
    public function test_can_provide_gift_coupon_handler(CouponHandlerFactory $couponHandlerFactory)
    {
        $giftCouponHandler = $couponHandlerFactory->getCouponHandler('gift');
        $this->assertInstanceOf(GiftCouponHandler::class, $giftCouponHandler);
        $this->assertSame('applying gift coupon ...', $giftCouponHandler->applyCoupon());
    }

    /**
     * @dataProvider classProvider
     *
     * @param CouponHandlerFactory $couponHandlerFactory
     */
    public function test_can_provide_shipping_coupon_handler(CouponHandlerFactory $couponHandlerFactory)
    {
        $shippingCouponHandler = $couponHandlerFactory->getCouponHandler('shipping');
        $this->assertInstanceOf(ShippingCouponHandler::class, $shippingCouponHandler);
        $this->assertSame('applying shipping coupon ...', $shippingCouponHandler->applyCoupon());
    }
}
