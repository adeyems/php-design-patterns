<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

class CouponHandlerFactory
{
    const MONETARY_COUPON = 'monetary';
    const GIFT_COUPON = 'gift';
    const SHIPPING_COUPON = 'shipping';

    public function getCouponHandler(string $type): CouponHandlerInterface
    {
        if ($type == self::MONETARY_COUPON) {
            return new MonetaryCouponHandler();
        }

        if ($type == self::GIFT_COUPON) {
            return new GiftCouponHandler();
        }

        if ($type == self::SHIPPING_COUPON) {
            return new ShippingCouponHandler();
        }

        return null;
    }
}