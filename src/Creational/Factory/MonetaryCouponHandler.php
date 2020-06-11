<?php
declare(strict_types=1);

namespace Adeyems\DesignPattern\Creational\Factory;

class MonetaryCouponHandler implements CouponHandlerInterface {

    public function applyCoupon(): string
    {
        return 'applying monetary coupon ...';
    }
}