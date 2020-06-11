<?php
declare(strict_types=1);

namespace Adeyems\DesignPattern\Creational\Factory;

class ShippingCouponHandler implements CouponHandlerInterface {

    public function applyCoupon(): string {
        return 'applying shipping coupon ...';
    }

}