<?php

namespace Adeyems\DesignPattern\Creational\Factory;

class CouponTypeFactory
{
    const MONETARY_COUPON = 'monetary';
    const GIFT_COUPON = 'gift';
    const SHIPPING_COUPON = 'shipping';


    public function getCouponType(string $type): CouponType {
        if ($type == self::MONETARY_COUPON)
            return new MonetaryCoupon();

        if ($type == self::GIFT_COUPON)
            return new GiftCoupon();

        if ($type == self::SHIPPING_COUPON)
            return new ShippingCoupon();

        return null;

    }
}