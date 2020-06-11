<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

class GiftCouponHandler implements CouponHandlerInterface {

    public function applyCoupon(): string {
        return 'applying gift coupon ...';
    }

}