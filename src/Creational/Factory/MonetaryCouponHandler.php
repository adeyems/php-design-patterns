<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

class MonetaryCouponHandler implements CouponHandlerInterface
{
    public function applyCoupon(): string
    {
        return 'applying monetary coupon ...';
    }
}
