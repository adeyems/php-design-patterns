<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

class ShippingCouponHandler implements CouponHandlerInterface {

    public function applyCoupon(): string {
        return 'applying shipping coupon ...';
    }
}